<?php

namespace App\Http\Controllers;

use Debugbar;
use App\Staff;
use App\State;
use App\LocalGovt;
use Carbon\Carbon;
use App\AppDocReview;
use App\ReportDocument;
use App\IssuedAtcLicense;
use App\UserNotification;
use App\LtoLicenseRenewal;
use App\ApplicationComments;
use App\PressureTestRecords;
use Illuminate\Http\Request;
use App\LtoInspectionDocument;
use App\AtcInspectionDocuments;
use App\CatdLtoInspectionDocument;
use Illuminate\Support\Facades\DB;
use App\AddonAtiInspectionDocument;
use App\AddonLtoInspectionDocument;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;
use App\Http\Transformers\StateTransformer;
use App\SiteSuitabilityInspectionDocuments;
use App\Http\Transformers\LocalGovtTransformer;
use App\Http\Resources\UserNotificationsListResource;

class APIController extends Controller
{

	/**
	 * The admin routes
	 * @return Response
	 */
	static function routes()
	{
		Route::group(['middleware' => ['web', 'throttle:40,1'], 'prefix' => 'api'], function () {

			Route::group(['middleware' => ['auth']], function () {

				Route::get('/', function () {
					return 'Welcome to DPR Nigeria API web service';
				});

				/**
				 * Get all the authenticated user's new notifications
				 */
				Route::get('/notifications/new', function () {
					$notifs = Cache::remember('new_notifs' . auth()->id(), 1, function () {
						return Auth::user()->new_notifications;
					});
					return UserNotificationsListResource::collection($notifs);
				});
				/**
				 * Get all the authenticated user's notifications
				 */
				Route::get('/notifications/all', function () {
					$notifs = Cache::remember('all_notifs' . auth()->id(), 1, function () {
						return Auth::user()->received_notifications;
					});
					return UserNotificationsListResource::collection($notifs->load('app_doc_review:id,application_id'));
				});
				/**
				 * Delete notification
				 */
				Route::get('/notification/{id}/delete', function ($id) {
					Cache::forget('new_notifs' . auth()->id());
					Cache::forget('all_notifs' . auth()->id());
					return ['status' => UserNotification::destroy($id)];
				});
				/**
				 * Mark notification as read
				 */
				Route::get('/notification/{notif}/read', function (UserNotification $notif) {
					if (!$notif->is_read) {
						$notif->is_read = true;
						$notif->save();
					}
					Cache::forget('new_notifs' . auth()->id());
					return ['notification' => $notif->load('app_doc_review:id,application_id')];
				});
				/**
				 * Send notification
				 */
				Route::post('/notification/send', function () {
					// return request()->all();
					Auth::user()->sent_notifications()->create([
						'recipient_id' => request('recipient_id'),
						'notification' => request('msg'),
						'sender_name' => Auth::user()->role
					]);
					return response()->json(['status' => true], 201);
				});

				/**
				 * Send the application back to marketer for review
				 */
				Route::post('/application/reject/by-staff', function () {
					// return request()->all();
					$staff = Staff::where('staff_id', request('staff_id'))->first();

					/**
					 * Create a notification for the marketer
					 */
					Auth::user()->sent_notifications()->create([
						'recipient_id' => $staff->id,
						'notification' => request('msg'),
						'sender_name' => Auth::user()->role,
						'application_id' => request('application_id')
					]);

					/**
					 * Append "M.R. " to the status so that we can reverse to the old status when the marketrer is done
					 */
					AppDocReview::find(request('application_id'))->update([
						'application_status' => DB::raw('CONCAT("M.R. ", application_status)')
					]);


					/**
					 * Return response and flag it on the client side
					 */
					return response()->json(['status' => true], 201);
				});

				/**
				 * Handle marketer resubmit application
				 */
				Route::post('/application/re-submit/{app_doc_review}', function (AppDocReview $app_doc_review) {

					/**
					 * Create a notification for the staff
					 */
					Auth::user()->sent_notifications()->create([
						'recipient_id' => $app_doc_review->job_assignment->assigned_staff->id,
						'notification' => request('msg'),
						'sender_name' => Auth::user()->role,
						'application_id' => $app_doc_review->id
					]);

					/**
					 * Remove "M.R. " from the status so that we can reverse to the old status
					 */
					$app_doc_review->application_status = str_after($app_doc_review->application_status, 'M.R. ');
					$app_doc_review->save();

					/**
					 * Return response and remove flag it on the client side
					 */
					return response()->json(['status' => true], 201);
				});

				/**
				 * Get penetration and population densities for a particular item
				 */
				Route::get('/penetration-and-population-density/{product}/{state_id}', function ($product, $state_id) {

					// return request()->all();

					// return (LocalGovt::withCount('app_doc_reviews')->where('state_id', $state_id)->has('app_doc_reviews')->get())->sortBy('id')->values();
					if (request('sort_by')) {
						if (request('sort_dir') == 'asc') {
							$local_govts = LocalGovt::withCount('app_doc_reviews')->where('state_id', $state_id)->get()->sortBy(request('sort_by'))->values();
						} else {
							$local_govts = LocalGovt::withCount('app_doc_reviews')->where('state_id', $state_id)->get()->sortByDesc(request('sort_by'))->values();
						}
					} else {
						$local_govts = LocalGovt::withCount('app_doc_reviews')->where('state_id', $state_id)->get();
					}
					return (new LocalGovtTransformer)->collectionTransformer($local_govts, 'transformForPenetrationReports');

					/**
					 * Create a notification for the staff
					 */

					// appdocrevioew refillplanmt lto issued vis-a-visissltolices where appid == and not expired group by lg and count
					// map and aggregate all where count <= 1 as others

					return response()->json(['status' => true], 201);
				});


				Route::get('/application/{app_id}', function ($app_id) {
					try {
						$applicationReview = AppDocReview::with(['job_assignment', 'company'])->where('application_id', $app_id)->firstOrFail();
					} catch (\Throwable $e) {
						return response()->json(['error' => 'Application not found'], 409);
					}

					$thisApplicationRenewalDetails = $applicationID = null;
					$applicationStatus = $applicationReview->job_assignment;

					$reportDocument = ReportDocument::where('application_id', $applicationReview->application_id)->first();    // retrieve report document
					$applicationComments = ApplicationComments::with('staff')->where('application_id', $applicationReview->application_id)->get();
					$issuedAtcLicense = IssuedAtcLicense::where('application_id', $applicationReview->application_id)->first();

					// check if the company that has this application has been registered into the system
					if ($applicationReview->company_id != null) {

						$activePressureTest = PressureTestRecords::where([
							['company_name', $applicationReview->company_id],
							['facility_name', $applicationReview->name_of_gas_plant],
							['due_date', '>', Carbon::now()]
						])->first();

						if ($applicationReview->sub_category == "Site Suitability Inspection") {
							$applicationID = SiteSuitabilityInspectionDocuments::where('application_id', $applicationReview->application_id)->first();
						} elseif ($applicationReview->sub_category == "ATC") {
							$applicationID = AtcInspectionDocuments::where('application_id', $applicationReview->application_id)->first();
						} elseif ($applicationReview->sub_category == "LTO") {
							$applicationID = LtoInspectionDocument::where('application_id', $applicationReview->application_id)->first();
						} elseif ($applicationReview->sub_category == "Renewal") {
							$thisApplicationRenewalDetails = LtoLicenseRenewal::where('application_id', $applicationReview->application_id)->first();

							$applicationID = LtoInspectionDocument::where('application_id', $applicationReview->application_id)->first();
						} elseif ($applicationReview->sub_category == "Take Over") {
							$applicationID = DB::table('takeover_inspection_documents')
								->Join('takeover_reviews', 'takeover_reviews.application_id', '=', 'takeover_inspection_documents.application_id')
								->first();
						} elseif ($applicationReview->sub_category == "Pressure Testing") {
							$applicationID = PressureTestRecords::where('application_id', $applicationReview->application_id)->first();
						} elseif ($applicationReview->sub_category == "ADD-ON ATI") {
							$applicationID = AddonAtiInspectionDocument::where('application_id', $applicationReview->application_id)->first();
						} elseif ($applicationReview->sub_category == "ADD-ON LTO") {
							$applicationID = AddonLtoInspectionDocument::where('application_id', $applicationReview->application_id)->first();
						} elseif ($applicationReview->sub_category == "CAT-D LTO") {
							$applicationID = CatdLtoInspectionDocument::with('catdLtoApplicationExtention')->where('application_id', $applicationReview->application_id)->first();
						}
						$role = Auth::user()->role;

						// debug(
						// 	$applicationReview->toArray(),
						// 	$applicationID,
						// 	$applicationStatus->toArray(),
						// 	$reportDocument->toArray(),
						// 	$applicationComments->toArray(),
						// 	$role,
						// 	$activePressureTest,
						// 	$issuedAtcLicense
						// );
						$applicationReview['is_under_review'] = $applicationReview->is_under_review();
						return [
							'application' => [
								'applicationReview' => $applicationReview,
								'applicationID' => $applicationID,
								'applicationStatus' => $applicationStatus,
								'reportDocument' => $reportDocument,
								'applicationComments' => $applicationComments,
								'role' => $role,
								'thisApplicationRenewalDetails' => $thisApplicationRenewalDetails,
								'activePressureTest' => $activePressureTest,
								'issuedAtcLicense' => $issuedAtcLicense
							]
						];
					} else {
						// redirect the staff to register this company
						dd('This application does not have a coy');
					}
				});
			});

			Route::get('states', function () {
				return (new StateTransformer)->collectionTransformer(State::all(), 'transformBase');
			});
		});
	}
}
