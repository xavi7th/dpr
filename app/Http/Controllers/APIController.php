<?php

namespace App\Http\Controllers;

use Debugbar;
use App\Staff;
use App\AppDocReview;
use App\UserNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;
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
			});
		});
	}
}
