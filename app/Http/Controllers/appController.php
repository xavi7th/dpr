<?php

namespace App\Http\Controllers;

use DB;

use Auth;
use App\Inbox;
use App\Staff;
use App\Outbox;
use App\Company;
use Carbon\Carbon;
use App\AppDocReview;
use App\CompletedJobs;
use App\JobAssignment;
use App\IssuedAtcLicense;
use App\IssuedLtoLicense;
use App\ApplicationComments;
use App\pressureTestLicense;
use App\PressureTestRecords;
use Illuminate\Http\Request;
use App\LtoInspectionDocument;

use App\AtcInspectionDocuments;
use App\CatdLtoInspectionDocument;
use App\AddonAtiInspectionDocument;
use App\AddonLtoInspectionDocument;
use Illuminate\Support\Facades\Validator;
use App\SiteSuitabilityInspectionDocuments;

class appController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
		return view('partials.settings');
	}

	public function changePassword(Request $request)
	{

		$this->validate(request(), [
			'password' => 'required|confirmed'
		]);

		Staff::where('id', auth()->id())
			->update([
				'password' => bcrypt(request('password'))
			]);

		return redirect('/logout');
	}

	public function updateStaffRecords(Request $request)
	{
		// dd($request);

		if (request('record_name') == 'null') {
			// send back to view with error messages
			return back();
		} else {
			Staff::where('id', auth()->id())
				->update([
					request('record_name') => request('record_value')
				]);

			return back();
		}
	}

	public function makeReportComment(Request $request)
	{
		ApplicationComments::create([
			'staff_id' => Auth::user()->staff_id,
			'application_id' => request('application_id'),
			'comment' => request('comment'),
		]);
		return back();
	}

	public function documentValid(Request $request)
	{
		// dd($request);
		// return $request;

		$applicationID = request('applicationid');
		$subCategory = request('subcategory');
		$valid = request('valid');
		$documentCheckName = request('documentcheck');

		if ($subCategory == 'Site Suitability Inspection') {
			SiteSuitabilityInspectionDocuments::where('application_id', $applicationID)
				->update([
					$documentCheckName => $valid
				]);
		} elseif ($subCategory == 'ATC') {
			AtcInspectionDocuments::where('application_id', $applicationID)
				->update([
					$documentCheckName => $valid
				]);
		} elseif ($subCategory == 'LTO') {
			LtoInspectionDocument::where('application_id', $applicationID)
				->update([
					$documentCheckName => $valid
				]);
		} elseif ($subCategory == 'ADD-ON ATI') {
			AddonAtiInspectionDocument::where('application_id', $applicationID)
				->update([
					$documentCheckName => $valid
				]);
		} elseif ($subCategory == 'ADD-ON LTO') {
			AddonLtoInspectionDocument::where('application_id', $applicationID)
				->update([
					$documentCheckName => $valid
				]);
		} elseif ($subCategory == 'CAT-D LTO') {
			CatdLtoInspectionDocument::where('application_id', $applicationID)
				->update([
					$documentCheckName => $valid
				]);
		} elseif ($subCategory == 'Renewal') {
			LtoInspectionDocument::where('application_id', $applicationID)
				->update([
					$documentCheckName => $valid
				]);
		}

		return response()->json(['status' => true], 201);
		// return back();
	}

	public function viewAllSSI()
	{
		$appDocReviewsSSI = AppDocReview::where('application_status', 'Site Suitable')->get();    // get all application requests
		return view('backend.general.view_all_ssi', compact('appDocReviewsSSI'));
	}

	public function advancedSearchAtc(Request $request)
	{
		// dd($request);
		$application_type = request('application_type');
		$search_type = request('search_type');
		$from = request('from');
		$to = request('to');

		$from = date_create_from_format('m/d/Y', $from);

		$to = date_create_from_format('m/d/Y', $to);

		if ($application_type == 'lpg retailer outlets') {
			if ($search_type == 'Application Date') {

				$appDocReviewsATC = AppDocReview::with(['issued_atc_licenses', 'company', 'job_assignment'])
					->where('application_type', 'LPG Retailer Outlets')
					->where('sub_category', 'ATC')
					->where('application_status', '!=', 'Not Submitted')
					->whereBetween('created_at', [$from, $to])
					->latest()
					->get();

				// dd($appDocReviewsATC);

			} elseif ($search_type == 'date_issued' || $search_type == 'expiry_date') {

				$appDocReviewsATC = AppDocReview::with(['company', 'issued_lto_licenses', 'job_assignment'])
					->whereHas('issued_atc_licenses', function ($query) use ($from, $to, $search_type) {
						$query->whereBetween($search_type, [$from, $to]);
					})
					->where('application_type', 'LPG Retailer Outlets')
					->where('sub_category', 'ATC')
					->where('application_status', '!=', 'Not Submitted')
					->latest()
					->get();
			}
		} elseif ($application_type == 'cng retailer outlets') { }
		return view('backend.general.view_all_atc', compact('appDocReviewsATC'));
	}

	public function viewAllATC(Request $request)
	{
		// dd($request);

		$type = request('val');

		if ($type == 'lpg_atc') {
			$appDocReviewsATC = AppDocReview::with(['issued_atc_licenses', 'company', 'job_assignment'])
				->where('application_type', 'LPG Retailer Outlets')
				->where('sub_category', 'ATC')
				->where('application_status', '!=', 'Not Submitted')
				->latest()
				->get();
			// dd($appDocReviewsATC);
		} elseif ($type == 'cng_atc') {
			// $appDocReviewsATC = DB::table('issued_atc_licenses')
			// ->join('app_doc_reviews', 'app_doc_reviews.application_id', '=', 'issued_atc_licenses.application_id')
			// ->join('companies', 'companies.company_id', '=', 'issued_atc_licenses.company_id')
			// ->select('issued_atc_licenses.*', 'app_doc_reviews.*', 'companies.*')
			// ->where('application_type', 'CNG Retailer Outlets')
			// ->where('application_status', 'ATC Issued')
			// ->get();    // get all application requests

			$appDocReviewsATC = AppDocReview::with(['issued_atc_licenses', 'company', 'job_assignment'])
				->where('application_type', 'CNG Retailer Outlets')
				->where('sub_category', 'ATC')
				->where('application_status', '!=', 'Not Submitted')
				->latest()
				->get();

			// dd($appDocReviewsATC);
		}
		return view('backend.general.view_all_atc', compact('appDocReviewsATC'));
	}

	public function viewAllLTO(Request $request)
	{
		// return $request->all();

		if (strtolower(request()->method()) === "post") {
			/**
			 * Handle the search form validation on the view all LTOs page
			 */

			$validator = Validator::make(
				$request->all(),
				[
					'search_type' => 'required|string|in:date,date_issued,expiry_date',
					'from' => 'required|date',
					'to' => 'required|date',
				],
				[
					'search_type.required' => 'Choose a search type',
					'search_type.string' => 'Improper data in search type',
					'search_type.in' => 'Invalid search type',
					'from.date' => 'Enter a valid starting date',
					'from.required' => 'Choose a starting date.',
					'to.date' => 'Enter a valid ending date',
					'to.required' => 'Choose a ending date.',
				]
			);

			if ($validator->fails()) {
				return redirect()->route('lto.all', ['val' => 'lpg_lto'])
					->withErrors($validator)
					->withInput();
			}

			$search_type = request('search_type');
			$from = request('from');
			$to = request('to');

			/**
			 * Using Carbon parse instead of date_create_from_format because
			 * date_create_from_format sets the time to the current time
			 * but Carbon::parse sets the time to 00:00. This is better cos
			 * searches in the afternoon will exclude morning results
			 */
			$from = Carbon::parse($from);
			$to = Carbon::parse($to);

			if ($search_type === 'date') {

				$appDocReviewsLTO = AppDocReview::with(['issued_lto_licenses', 'company'])
					->where('application_type', 'LPG Retailer Outlets')
					->where('sub_category', 'LTO')
					->whereBetween('created_at', [$from, $to])
					->latest()
					->get();
			} elseif ($search_type == 'date_issued' || $search_type == 'expiry_date') {

				$appDocReviewsLTO = AppDocReview::whereHas('issued_lto_licenses', function ($query) use ($from, $to, $search_type) {
					$query->whereBetween($search_type, [$from, $to]);
				})->with(['company', 'issued_lto_licenses'])
					->where('application_type', 'LPG Retailer Outlets')
					->where('sub_category', 'LTO')
					->latest()
					->get();
			} else {
				return back()->withErrors('Error processing the request');
			}
		} elseif (strtolower(request()->method()) === "get") {

			$type = request('val');

			if ($type == 'lpg_lto') {
				$appDocReviewsLTO = AppDocReview::with(['issued_lto_licenses', 'company'])
					->where('application_type', 'LPG Retailer Outlets')
					->where('sub_category', 'LTO')
					->get();    // get all application requests

				// dd($appDocReviewsLTO);
			} elseif ($type == 'cng_lto') {
				$appDocReviewsLTO = AppDocReview::with(['issued_lto_licenses', 'company'])
					->where('application_type', 'CNG Retailer Outlets')
					->where('sub_category', 'LTO')
					->get();    // get all application requests

				// dd($appDocReviewsLTO);
			}
			// this code below might still be important when license status are back from HQ

			// $appDocReviewsLTO = DB::table('issued_lto_licenses')
			// ->join('app_doc_reviews', 'app_doc_reviews.company_id', '=', 'issued_lto_licenses.company_id')
			// ->join('companies', 'companies.company_id', '=', 'app_doc_reviews.company_id')
			// ->where('application_status','LTO Issued')
			// ->get();    // get all application requests

			// dd($appDocReviewsLTO);
		}

		// dd(strtolower(request()->method()) === "get");

		return view('backend.general.view_all_lto', compact('appDocReviewsLTO'));
	}


	public function viewAllAddonLTO(Request $request)
	{
		return view('backend.general.view_all_addonlto');
	}


	public function viewAllCatDLTO(Request $request)
	{
		return view('backend.general.view_all_catdlto');
	}


	public function viewAllAddOnATI(Request $request)
	{
		return view('backend.general.view_all_addonati');
	}

	public function viewAllLpgCngRenewal(Request $request)
	{
		return view('backend.general.view_all_lpgcng_renewal');
	}

	public function viewAllCatdRenewal(Request $request)
	{
		return view('backend.general.view_all_catd_renewal');
	}

	public function viewAllLpgCngTakeover(Request $request)
	{
		return view('backend.general.view_all_lpgcng_takeover');
	}

	public function viewAllPressureTestRecords()
	{
		$pressureTestRecords = DB::table('app_doc_reviews')
			->join('pressure_test_records', 'pressure_test_records.application_id', '=', 'app_doc_reviews.application_id')
			->join('companies', 'companies.company_id', '=', 'app_doc_reviews.company_id')
			->where('sub_category', 'Pressure Testing')
			->select('app_doc_reviews.*', 'pressure_test_records.*', 'companies.*')
			->get();

		// dd($pressureTestRecords);

		return view('backend.general.view_pressure_test_records', compact('pressureTestRecords'));
	}

	public function viewDocument($application_id)
	{

		$applicationReview = AppDocReview::where('application_id', $application_id)->first();

		if ($applicationReview->sub_category == 'ATC') {
			$applicationID = AtcInspectionDocuments::where('application_id', $application_id)->first();
			// $appDocReviewed = DB::table('app_doc_reviews')
			// ->join('issued_atc_licenses', 'issued_atc_licenses.company_id', '=', 'app_doc_reviews.company_id')
			// ->join('companies', 'companies.company_id', '=', 'app_doc_reviews.company_id')
			// ->where('app_doc_reviews.application_id', $application_id)
			// ->first();    // get all application requests
		} elseif ($applicationReview->sub_category == 'LTO') {
			$applicationID = LtoInspectionDocument::where('application_id', $application_id)->first();
			// $appDocReviewed = DB::table('app_doc_reviews')
			// ->join('issued_lto_licenses', 'issued_lto_licenses.company_id', '=', 'app_doc_reviews.company_id')
			// ->join('companies', 'companies.company_id', '=', 'app_doc_reviews.company_id')
			// ->where('app_doc_reviews.application_id', $application_id)
			// ->first();    // get all application requests
		}

		return view('backend.general.view_application_docs', compact('appDocReviewed', 'applicationReview', 'applicationID'));
	}

	public function viewDocumentPOST(Request $request)
	{
		$this->documentURL = request('img');
		$this->reason = request('reason');

		dd('r');
	}

	public function assignTree(Request $request)
	{
		// dd($request);
		$staffs = Staff::where('office', Auth::user()->office)->get();
		$applicationID = request('application_id');
		$appID = request('id'); // application index from app_doc_review
		$inboxID = request('inbox_id'); // application index from inbox

		return view('backend.general.assign_tree', compact('staffs', 'applicationID', 'appID', 'inboxID'));
	}

	public function viewDocumentGET(Request $request)
	{
		// dd($request);

		$documentURL = request('pic');

		return view('backend.general.display_document', compact('documentURL'));
	}

	public function sendJob(Request $request)
	{

		// dd($request);

		Inbox::where('application_id', request('appID'))->update([
			'to_outbox' => 'true'
		]);

		// create updated job application access for the next user
		Inbox::create([
			'application_id' => request('appID'),
			'to' => request('staff_id'),
			'from' => Auth::user()->staff_id,
			'receiver_role' => request('role'),
			'sender_role' => Auth::user()->role,
			'office' => Auth::user()->office,
			'read' => 'false',
			'to_outbox' => 'false'
		]);

		Outbox::create([
			'application_id' => request('appID'),
			'to' => request('staff_id') . " (" . request('role') . ")",
			'role' => Auth::user()->role,
			'office' => Auth::user()->office
		]);

		if (Auth::user()->role == 'ZOPSCON') {
			return redirect('/zopscon');
		} elseif (Auth::user()->role == 'ADO') {
			return redirect('/ado');
		} elseif (Auth::user()->role == 'Head Gas M&G Lagos') {
			return redirect('/headgas');
		} elseif (Auth::user()->role == 'Team Lead') {

			$thisJob = JobAssignment::where('application_id', request('application_id'))->first();

			if (optional($thisJob)->job_application_status == 'Started' || optional($thisJob)->job_application_status == 'ATC Issued') {
				return redirect('/teamlead');
			} else {
				JobAssignment::updateOrCreate(
					['application_id' => request('application_id')],
					[
						'application_id' => request('application_id'),
						'assigned_by' => Auth::user()->staff_id,
						'staff_id' => request('staff_id'),
						'job_application_status' => 'Assigned'
					]
				);
			}

			return redirect('/teamlead');
		} elseif (Auth::user()->role == 'Staff') {
			return redirect('/staff');
		} elseif (Auth::user()->role == 'Manager Gas') {
			return redirect('/managergas');
		}
	}





	// public function uploadLicense(Request $request){

	// }

	public function uploadLicense(Request $request)
	{
		// dd($request);
		$license_document = "";
		// check if request has the document
		if ($request->hasFile('licenseDocument')) {
			// store the document to the company folder in company reports folder
			$request->licenseDocument->storeAs('license_docs/' . request('company_id') . '/' . request('application_id'), $request->licenseDocument->getClientOriginalName());

			$license_document = $request->licenseDocument->getClientOriginalName();

			// if this record exist, update the record else create a new record.
			// ReportDocument::updateOrCreate([
			//   'application_id' => request('application_id')
			// ],
			// [
			//   'application_id' => request('application_id'),
			//   'staff_id' => request('staff_id'),
			//   'company_id' => request('company_id'),
			//   'report_url' => $report_document,
			//   'report_type' => request('report_type'),
			//   'office' => Auth::user()->office,
			//   'date_of_inspection' => $inspectionDate
			// ]);

			if (request('sub_category') == 'ATC') {
				IssuedAtcLicense::where('application_id', request('application_id'))
					->update([
						'license_url' => $license_document
					]);
			} elseif (request('sub_category') == 'LTO') {
				IssuedLtoLicense::where('application_id', request('application_id'))
					->update([
						'license_url' => $license_document
					]);
			} elseif (request('sub_category') == 'Pressure Testing') {
				PressureTestRecords::where('application_id', request('application_id'))
					->update([
						'license_url' => $license_document
					]);
			}
			// return back
			return back();
		} else {
			// return back with errors
			return back();
		}
	}





	public function sendJobToHQ(Request $request)
	{
		// dd($request);
		// update job_assignments
		JobAssignment::where('application_id', request('application_id'))
			->update([
				'job_application_status' => 'Application Sent to HQ',
				'company_id' => request('company_id')
			]);

		// update lto_inspection_document
		LtoInspectionDocument::where('application_id', request('application_id'))
			->update([
				'company_id' => request('company_id')
			]);

		// update inbox
		Inbox::where('id', request('inboxID'))->update([
			'to_outbox' => 'true'
		]);

		// create updated job application access for the next user .......
		// we would need to grab the details of the headgas from HQ and office location in order for this application
		// to be forwared but for now we use a dummy



		$HeadGas = Staff::where([
			['office', 'HQ'],
			['role', 'Head Gas M&G Lagos']
		])->first();


		Inbox::create([
			'application_id' => request('id'),
			'to' => request('staff_id'),
			'from' => Auth::user()->staff_id,
			'receiver_role' => $HeadGas->role,
			'sender_role' => Auth::user()->role,
			'office' => $HeadGas->office,
			'read' => 'false',
			'to_outbox' => 'false'
		]);

		$headgasHQ = $HeadGas->staff_id;
		$headgasHQRole = $HeadGas->role;

		Outbox::create([
			'application_id' => request('id'),
			'to' => $headgasHQ . " (" . $headgasHQRole . ")",
			'role' => Auth::user()->role,
			'office' => Auth::user()->office
		]);

		if (Auth::user()->role == 'ZOPSCON') {
			return redirect('/zopscon');
		} elseif (Auth::user()->role == 'ADO') {
			return redirect('/ado');
		} elseif (Auth::user()->role == 'Head Gas M&G Lagos') {
			return redirect('/headgas');
		} elseif (Auth::user()->role == 'Manager Gas') {
			return redirect('/managergas');
		}
	}
















	//LPG-CNG-ROUTES
	public function lpgCngDashboard()
	{
		return view('backend.general.lpg_cng_dashboard');
	}



	//GAS-PROCESSING-FACILITIES-ROUTES
	public function gasProcessingFacilitiesDashboard()
	{
		return view('backend.general.gas_processing_facilities_dashboard');
	}
	public function custodyTransferMetersSearch()
	{
		return view('backend.general.custody_transfer_meters_search');
	}
	public function flareMetersSearch()
	{
		return view('backend.general.flare_meters_search');
	}
	public function fuelMetersSearch()
	{
		return view('backend.general.fuel_meters_search');
	}
	public function productionAllocationTransferMetersSearch()
	{
		return view('backend.general.production_allocation_transfer_meters_search');
	}




	//GAS-PIPELINES-ROUTES
	public function gasPipelinesDashboard()
	{
		return view('backend.general.gas_pipelines_dashboard');
	}
	public function gasPipelinesPTSSearch()
	{
		return view('backend.general.gas_pipelines_pts_search');
	}
	public function gasPipelinesOPLLSearch()
	{
		return view('backend.general.gas_pipelines_opll_search');
	}
	public function gasPipelinesHydroTestingSearch()
	{
		return view('backend.general.gas_pipelines_hydrotesting_search');
	}
	public function gasPipelinesPiggingSearch()
	{
		return view('backend.general.gas_pipelines_pigging_search');
	}








	//PROJECT-MONITORING-ROUTES
	public function projectMonitoringDashboard()
	{
		return view('backend.general.project_monitoring_dashboard');
	}

	public function projectMonitoringFeedCreateForm()
	{
		return view('backend.general.project_monitoring_feed_create');
	}

	public function projectMonitoringFeedEditForm()
	{
		return view('backend.general.project_monitoring_feed_edit');
	}

	public function projectMonitoringFeedSearch()
	{
		$users = factory(\App\User::class, 350)->make();
		return view('backend.general.project_monitoring_feed_search', compact('users'));
	}




	public function projectMonitoringMilestoneCreateForm()
	{
		return view('backend.general.project_monitoring_milestone_create');
	}

	public function projectMonitoringMilestoneEditForm()
	{
		return view('backend.general.project_monitoring_milestone_edit');
	}

	public function projectMonitoringMilestoneSearch()
	{
		return view('backend.general.project_monitoring_milestone_search');
	}




	public function projectMonitoringContinousCreateForm()
	{
		return view('backend.general.project_monitoring_continous_create');
	}

	public function projectMonitoringContinousEditForm()
	{
		return view('backend.general.project_monitoring_continous_edit');
	}

	public function projectMonitoringContinousSearch()
	{
		return view('backend.general.project_monitoring_continous_search');
	}




	public function projectMonitoringPermitAndConsentCreateForm()
	{
		return view('backend.general.project_monitoring_permit_and_consent_create');
	}

	public function projectMonitoringPermitAndConsentEditForm()
	{
		return view('backend.general.project_monitoring_permit_and_consent_edit');
	}

	public function projectMonitoringPermitAndConsentSearch()
	{
		return view('backend.general.project_monitoring_permit_and_consent_search');
	}

















	public function gasProductionUtilizationDashboard()
	{
		return view('backend.general.gas_production_utilization_dashboard');
	}

















	public function gasProductionExportOperationsDashboard()
	{
		return view('backend.general.gas_production_export_operations_dashboard');
	}
















	public function gasSubsurfaceDashboard()
	{
		return view('backend.general.gas_sub_surface_dashboard');
	}
















	public function gasDiaryDashboard()
	{
		return view('backend.general.gas_diary_dashboard');
	}
















	public function inspectionDashboard()
	{
		return view('backend.general.inspection_dashboard');
	}



	public function projectMonitoringFeedCreate(Request $request)
	{
		dd($request);
	}

	public function previousRecords()
	{
		return view('backend.general.previous_records_dashboard');
	}

	public function prevSSIRecordGet()
	{
		return view('backend.general.previous_ssi_records');
	}

	public function prevATCRecordGet()
	{
		return view('backend.general.previous_atc_records');
	}

	public function prevLTORecordGet()
	{
		return view('backend.general.previous_lto_records');
	}

	public function prevRenewalRecordGet()
	{
		return view('backend.general.previous_renewal_records');
	}

	public function prevTakeoverRecordGet()
	{
		return view('backend.general.previous_takeover_records');
	}

}
