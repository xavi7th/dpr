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
use App\LocalGovt;
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

	// public function viewAllSSI()
	// {
	// 	$appDocReviewsSSI = AppDocReview::where('application_status', 'Site Suitable')->get();    // get all application requests
	// 	return view('backend.general.view_all_ssi', compact('appDocReviewsSSI'));
	// }

	public function viewAllSSI(Request $request)
	{
		// dd($request);

		$appDocReviewsSSI = AppDocReview::with(['issued_atc_licenses', 'company', 'job_assignment'])
			->where('application_type', 'LPG Retailer Outlets')
			->where('sub_category', 'Site Suitability Inspection')
			// ->where('application_status', '!=', 'Not Submitted')
			->latest()
			->get();
		// dd($appDocReviewsSSI);

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



	public function reportsDashboard()
	{
		return view('backend.general.reports_dashboard');
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
		return back()->withAlert(['title' => 'OOPS', 'text' => 'Page still under development', 'type' => 'info']);
		return view('backend.general.previous_ssi_records');
	}

	public function prevATCRecordGet()
	{
		$companies = Company::all();
		return view('backend.general.previous_atc_records', compact('companies'));
	}

	public function prevLTORecordGet()
	{
		$companies = Company::all();
		return view('backend.general.previous_lto_records', compact('companies'));
	}

	public function prevRenewalRecordGet()
	{
		return view('backend.general.previous_renewal_records');
	}

	public function prevTakeoverRecordGet()
	{
		return back()->withAlert(['title' => 'OOPS', 'text' => 'Page still under development', 'type' => 'info']);
		$companies = Company::all();
		return view('backend.general.previous_takeover_records', compact('companies'));
	}

	public function sendAtcOldRecords(Request $request)
	{
		$response = customValidator([
			'lga' => 'required'
		]);

		if ($response) {
			if ($request->ajax()) {
				return response()->json(['status' => 'Validation errors'], 422);
			} else {
				return $response;
			}
		}
		// return 'here';

		$companyID = request('company_id');
		$gasPlantName = request('gas_plant_name');
		$applicationType = request('application_type');
		$subCategory = request('sub_category');
		$plantType = request('plant_type');
		$state = request('state');
		$lga = request('lga');
		$town = request('town');
		$address = request('address');
		$applicationDate = date('Y-m-d', strtotime(request('application_date')));
		// $dateToHq = date('Y-m-d', strtotime(request('date_to_hq')));
		$dateIssued = date('Y-m-d', strtotime(request('date_issued')));
		// $expiryDate = date('Y-m-d', strtotime(request('expiry_date')));

		// create the application id
		$applicationCount = DB::table('app_doc_reviews')->count(); //get the count directly from SQL to speed up the process instead of ->get()
		$indexIncremented = $applicationCount + 1;  // adding 1 to that number
		$newApplicationIndex = sprintf('%05d', $indexIncremented);  // padding the number to 4 leading zeros
		$applicationID = "DPRAPPLICATION" . $newApplicationIndex;

		// grab the state_id and LGA id
		$localGovt = LocalGovt::where('name', $lga)->first();
		$state_id = $localGovt->state_id;
		$lga_id = $localGovt->id;

		// application status
		$applicationStatus = 'ATC Issued';

		// dd($localGovt);



		// insert into app doc rev
		AppDocReview::create([
			'application_id' => $applicationID,
			'state_id' => $state_id,
			'local_govt_id' => $lga_id,
			'company_id' => $companyID,
			'name_of_gas_plant' => $gasPlantName,
			'application_type' => $applicationType,
			'sub_category' => $subCategory,
			'plant_type' => $plantType,
			'state' => $state,
			'lga' => $lga,
			'town' => $town,
			'address' => $address,
			'application_status' => $applicationStatus,
		]);

		// insert into job assignments
		JobAssignment::create([
			'application_id' => $applicationID,
			'assigned_by' => 'old record',
			'staff_id' => Auth::user()->staff_id,
			'company_id' => $companyID,
			'job_application_status' => $applicationStatus,
			'approved_by' => 'old record'
		]);

		// To get expiry date, check if ATC issued date is greater than 2years ago or less than 2years ago
		// If greater than 2 yaers...set expiry date to 2 years from date issued
		// If less than 2 years...set expiry date to 6months from date issued

		if (Carbon::parse(request('date_issued'))->gte(Carbon::now()->subMonths(24))) {
			// dd('greater');
			$expiryDate = Carbon::parse(request('date_issued'))->addYear();

			$k = 12 - $expiryDate->month; // where k = the number of months remaining for that particular year

			$expiryDate = $expiryDate->addMonth($k);
		} else {
			// dd('lesser');
			$expiryDate = Carbon::parse(request('date_issued'))->addMonths(6);
		}

		// insert into issued act licenses
		IssuedAtcLicense::create([
			'application_id' => $applicationID,
			'staff_id' => Auth::user()->staff_id,
			'company_id' => $companyID,
			'date_issued' => $dateIssued,
			'expiry_date' => $expiryDate
		]);

		// If implementation shedule is uploaded...set expiry date to 2 years from date issued

		$implementation_schedule = "";
		// check if request has the document
		if ($request->hasFile('implementationScheduleDoc')) {
			// store the document to the company folder in company reports folder
			$request->implementationScheduleDoc->storeAs('implementation_schedules/' . request('company_id') . '/' . request('application_id'), $request->implementationScheduleDoc->getClientOriginalName());

			$implementation_schedule = $request->implementationScheduleDoc->getClientOriginalName();

			$expiryDate = Carbon::parse(request('date_issued'))->addYear();

			$k = 12 - $expiryDate->month; // where k = the number of months remaining for that particular year

			$expiryDate = $expiryDate->addMonth($k);

			// upload the implementation schedule
			IssuedAtcLicense::where('application_id', request('application_id'))
				->update([
					'implementation_schedule' => $implementation_schedule,
					'expiry_date' => $expiryDate
				]);
		}



		// clear any exisiting application ID from the session
		$request->session()->forget('application_id');

		// save application_id to session
		session(['application_id' => $applicationID]);

		// redirect to page for uploading ATC old data files
		if ($request->ajax()) {
			return response()->json(['success' => '/old_atc_requirement'], 201);
		}
		return redirect('/old_atc_requirement');
	}

	public function oldATCRequirementGet()
	{
		return view('backend.general.old_atc_requirement');
	}

	public function oldATCRequirementPOST(Request $request)
	{
		// dd($request);
		$alfsiDoc = $amaDoc = $ctcDoc = $ciDoc = $fcDoc = $prcDoc = $cafDoc = $abpDoc = $spDoc = $dcDoc = $pidDoc = $eiaDoc = $bsfpDoc = $lcmlsDoc = $csatdDoc = $alacdDoc = 'null';
		$marketerID = Auth::user()->staff_id;

		// Below are just decision statements to check if actually a file has been uploaded and can be stored to the specified destination
		if ($request->hasFile('ALFSI_doc')) {
			$request->ALFSI_doc->storeAs('comp_docs/' . $marketerID . '/' . session('application_id'), $request->ALFSI_doc->getClientOriginalName());
			$ALFSIDoc = $request->ALFSI_doc->getClientOriginalName();
		}

		if ($request->hasFile('AMA_doc')) {
			$request->AMA_doc->storeAs('comp_docs/' . $marketerID . '/' . session('application_id'), $request->AMA_doc->getClientOriginalName());
			$amaDoc = $request->AMA_doc->getClientOriginalName();
		}

		if ($request->hasFile('CTC_doc')) {
			$request->CTC_doc->storeAs('comp_docs/' . $marketerID . '/' . session('application_id'), $request->CTC_doc->getClientOriginalName());
			$ctcDoc = $request->CTC_doc->getClientOriginalName();
		}

		if ($request->hasFile('CI_doc')) {
			$request->CI_doc->storeAs('comp_docs/' . $marketerID . '/' . session('application_id'), $request->CI_doc->getClientOriginalName());
			$ciDoc = $request->CI_doc->getClientOriginalName();
		}

		if ($request->hasFile('FC_doc')) {
			$request->FC_doc->storeAs('comp_docs/' . $marketerID . '/' . session('application_id'), $request->FC_doc->getClientOriginalName());
			$fcDoc = $request->FC_doc->getClientOriginalName();
		}

		if ($request->hasFile('PRC_doc')) {
			$request->PRC_doc->storeAs('comp_docs/' . $marketerID . '/' . session('application_id'), $request->PRC_doc->getClientOriginalName());
			$prcDoc = $request->PRC_doc->getClientOriginalName();
		}

		if ($request->hasFile('CAF_doc')) {
			$request->CAF_doc->storeAs('comp_docs/' . $marketerID . '/' . session('application_id'), $request->CAF_doc->getClientOriginalName());
			$cafDoc = $request->CAF_doc->getClientOriginalName();
		}

		if ($request->hasFile('ABP_doc')) {
			$request->ABP_doc->storeAs('comp_docs/' . $marketerID . '/' . session('application_id'), $request->ABP_doc->getClientOriginalName());
			$abpDoc = $request->ABP_doc->getClientOriginalName();
		}

		if ($request->hasFile('SP_doc')) {
			$request->SP_doc->storeAs('comp_docs/' . $marketerID . '/' . session('application_id'), $request->SP_doc->getClientOriginalName());
			$spDoc = $request->SP_doc->getClientOriginalName();
		}

		if ($request->hasFile('DC_doc')) {
			$request->DC_doc->storeAs('comp_docs/' . $marketerID . '/' . session('application_id'), $request->DC_doc->getClientOriginalName());
			$dcDoc = $request->DC_doc->getClientOriginalName();
		}

		if ($request->hasFile('PID_doc')) {
			$request->PID_doc->storeAs('comp_docs/' . $marketerID . '/' . session('application_id'), $request->PID_doc->getClientOriginalName());
			$pidDoc = $request->PID_doc->getClientOriginalName();
		}

		if ($request->hasFile('EIA_doc')) {
			$request->EIA_doc->storeAs('comp_docs/' . $marketerID . '/' . session('application_id'), $request->EIA_doc->getClientOriginalName());
			$eiaDoc = $request->EIA_doc->getClientOriginalName();
		}

		if ($request->hasFile('BSFP_doc')) {
			$request->BSFP_doc->storeAs('comp_docs/' . $marketerID . '/' . session('application_id'), $request->BSFP_doc->getClientOriginalName());
			$bsfpDoc = $request->BSFP_doc->getClientOriginalName();
		}

		if ($request->hasFile('LCMLS_doc')) {
			$request->LCMLS_doc->storeAs('comp_docs/' . $marketerID . '/' . session('application_id'), $request->LCMLS_doc->getClientOriginalName());
			$lcmlsDoc = $request->LCMLS_doc->getClientOriginalName();
		}

		if ($request->hasFile('CSATD_doc')) {
			$request->CSATD_doc->storeAs('comp_docs/' . $marketerID . '/' . session('application_id'), $request->CSATD_doc->getClientOriginalName());
			$csatdDoc = $request->CSATD_doc->getClientOriginalName();
		}

		if ($request->hasFile('ALACD_doc')) {
			$request->ALACD_doc->storeAs('comp_docs/' . $marketerID . '/' . session('application_id'), $request->ALACD_doc->getClientOriginalName());
			$alacdDoc = $request->ALACD_doc->getClientOriginalName();
		}




		AtcInspectionDocuments::create([
			'application_id' => session('application_id'),
			'marketer_id' => $marketerID,
			'applications_letter_for_suitability_inspection' => request('ALFSI'),
			'article_and_memorandum_of_association' => request('AMA'),
			'current_tax_clearance' => request('CTC'),
			'certificate_of_incorporation' => request('CI'),
			'fire_certificate' => request('FC'),
			'police_report' => request('PRC'),
			'completed_application_form' => request('CAF'),
			'approved_building_plan' => request('ABP'),
			'survey_plan' => request('SP'),
			'deed_of_conveyance' => request('DC'),
			'piping_and_instrumentation_diagram' => request('PID'),
			'environmental_impact_accessment' => request('EIA'),
			'bankdraft_of_statutory_fees' => request('BSFP'),
			'letter_confirmation_ministry_of_lands_and_survey' => request('LCMLS'),
			'codes_and_standard_adopted_in_the_tank_design' => request('CSATD'),
			'application_letter_addressed_to_the_controller' => request('ALACD'),
			'applications_letter_for_suitability_inspection_location_url' => $alfsiDoc,
			'article_and_memorandum_of_association_location_url' => $amaDoc,
			'current_tax_clearance_location_url' => $ctcDoc,
			'certificate_of_incorporation_location_url' => $ciDoc,
			'fire_certificate_location_url' => $fcDoc,
			'police_report_location_url' => $prcDoc,
			'completed_application_form_location_url' => $cafDoc,
			'approved_building_plan_location_url' => $abpDoc,
			'survey_plan_location_url' => $spDoc,
			'deed_of_conveyance_location_url' => $dcDoc,
			'piping_and_instrumentation_diagram_location_url' => $pidDoc,
			'environmental_impact_accessment_location_url' => $eiaDoc,
			'bankdraft_of_statutory_fees_location_url' => $bsfpDoc,
			'letter_confirmation_ministry_of_lands_and_survey_location_url' => $lcmlsDoc,
			'codes_and_standard_adopted_in_the_tank_design_location_url' => $csatdDoc,
			'application_letter_addressed_to_the_controller_location_url' => $alacdDoc,
			'applications_letter_for_suitability_inspection_reason' => request('ALFSI_reason'),
			'article_and_memorandum_of_association_reason' => request('AMA_reason'),
			'current_tax_clearance_reason' => request('CTC_reason'),
			'certificate_of_incorporation_reason' => request('CI_reason'),
			'fire_certificate_reason' => request('FC_reason'),
			'police_report_reason' => request('PRC_reason'),
			'completed_application_form_reason' => request('CAF_reason'),
			'approved_building_plan_reason' => request('ABP_reason'),
			'survey_plan_reason' => request('SP_reason'),
			'deed_of_conveyance_reason' => request('DC_reason'),
			'piping_and_instrumentation_diagram_reason' => request('PID_reason'),
			'environmental_impact_accessment_reason' => request('EIA_reason'),
			'bankdraft_of_statutory_fees_reason' => request('BSFP_reason'),
			'letter_confirmation_ministry_of_lands_and_survey_reason' => request('LCMLS_reason'),
			'codes_and_standard_adopted_in_the_tank_design_reason' => request('CSATD_reason'),
			'application_letter_addressed_to_the_controller_reason' => request('ALACD_reason')
		]);

		// clear the application ID from the session
		$request->session()->forget('application_id');

		// supposed to do some type of decisional redirections here either to input ATC again or Just go straight to input LTO records

		// redirect the user to old record LTO
		return redirect('/prev_lto_record_get');
	}

	public function sendLtoOldRecords(Request $request)
	{
		// dd($request);

		$companyID = request('company_id');
		$gasPlantName = request('gas_plant_name');
		$applicationType = request('application_type');
		$subCategory = request('sub_category');
		$plantType = request('plant_type');
		$state = request('state');
		$lga = request('lga');
		$town = request('town');
		$address = request('address');
		$applicationDate = date('Y-m-d', strtotime(request('application_date')));
		// $dateToHq = date('Y-m-d', strtotime(request('date_to_hq')));
		$dateIssued = date('Y-m-d', strtotime(request('date_issued')));
		// $expiryDate = date('Y-m-d', strtotime(request('expiry_date')));

		// create the application id
		$applicationCount = DB::table('app_doc_reviews')->count(); //get the count directly from SQL to speed up the process instead of ->get()
		$indexIncremented = $applicationCount + 1;  // adding 1 to that number
		$newApplicationIndex = sprintf('%05d', $indexIncremented);  // padding the number to 4 leading zeros
		$applicationID = "DPRAPPLICATION" . $newApplicationIndex;

		// grab the state_id and LGA id
		$localGovt = LocalGovt::where('name', $lga)->first();
		$state_id = $localGovt->state_id;
		$lga_id = $localGovt->id;

		// application status
		$applicationStatus = 'LTO Issued';

		// insert into app doc rev
		AppDocReview::create([
			'application_id' => $applicationID,
			'state_id' => $state_id,
			'local_govt_id' => $lga_id,
			'company_id' => $companyID,
			'name_of_gas_plant' => $gasPlantName,
			'application_type' => $applicationType,
			'sub_category' => $subCategory,
			'plant_type' => $plantType,
			'state' => $state,
			'lga' => $lga,
			'town' => $town,
			'address' => $address,
			'application_status' => $applicationStatus,
		]);

		// insert into job assignments
		JobAssignment::create([
			'application_id' => $applicationID,
			'assigned_by' => 'old record',
			'staff_id' => Auth::user()->staff_id,
			'company_id' => $companyID,
			'job_application_status' => $applicationStatus,
			'approved_by' => 'old record'
		]);

		$expiryDate = Carbon::parse(request('date_issued'))->addYear();

		$k = 12 - $expiryDate->month; // where k = the number of months remaining for that particular year

		$expiryDate = $expiryDate->addMonth($k);

		// insert into issued act licenses
		IssuedLtoLicense::create([
			'application_id' => $applicationID,
			'staff_id' => Auth::user()->staff_id,
			'company_id' => $companyID,
			'date_issued' => $dateIssued,
			'expiry_date' => $expiryDate
		]);

		// clear any exisiting application ID from the session
		$request->session()->forget('application_id');

		// save application_id to session
		session(['application_id' => $applicationID]);

		// redirect to page for uploading LTO old data files
		return redirect('/old_lto_requirement');
	}

	public function oldLTORequirementGet()
	{
		return view('backend.general.old_lto_requirement');
	}

	public function oldLTORequirementPOST(Request $request)
	{
		// dd($request);
		$cafDoc = $bsfpDoc = $paclpgDoc = $cwmcvDoc = $alacdDoc = $frcDoc = $cptrcDoc = $ctyitcDoc = $appDoc = $sopDoc = 'null';
		$marketerID = Auth::user()->staff_id;

		// Below are just decision statements to check if actually a file has been uploaded and can be stored to the specified destination
		if ($request->hasFile('CAF_doc')) {
			$request->CAF_doc->storeAs('comp_docs/' . $marketerID . '/' . session('application_id'), $request->CAF_doc->getClientOriginalName());
			$cafDoc = $request->CAF_doc->getClientOriginalName();
		}

		if ($request->hasFile('BSFP_doc')) {
			$request->BSFP_doc->storeAs('comp_docs/' . $marketerID . '/' . session('application_id'), $request->BSFP_doc->getClientOriginalName());
			$bsfpDoc = $request->BSFP_doc->getClientOriginalName();
		}

		if ($request->hasFile('PACLPG_doc')) {
			$request->PACLPG_doc->storeAs('comp_docs/' . $marketerID . '/' . session('application_id'), $request->PACLPG_doc->getClientOriginalName());
			$paclpgDoc = $request->PACLPG_doc->getClientOriginalName();
		}

		if ($request->hasFile('CWMCV_doc')) {
			$request->CWMCV_doc->storeAs('comp_docs/' . $marketerID . '/' . session('application_id'), $request->CWMCV_doc->getClientOriginalName());
			$cwmcvDoc = $request->CWMCV_doc->getClientOriginalName();
		}

		if ($request->hasFile('ALACD_doc')) {
			$request->ALACD_doc->storeAs('comp_docs/' . $marketerID . '/' . session('application_id'), $request->ALACD_doc->getClientOriginalName());
			$alacdDoc = $request->ALACD_doc->getClientOriginalName();
		}

		if ($request->hasFile('FRC_doc')) {
			$request->FRC_doc->storeAs('comp_docs/' . $marketerID . '/' . session('application_id'), $request->FRC_doc->getClientOriginalName());
			$frcDoc = $request->FRC_doc->getClientOriginalName();
		}

		if ($request->hasFile('CPTRC_doc')) {
			$request->CPTRC_doc->storeAs('comp_docs/' . $marketerID . '/' . session('application_id'), $request->CPTRC_doc->getClientOriginalName());
			$cptrcDoc = $request->CPTRC_doc->getClientOriginalName();
		}

		if ($request->hasFile('CTYITC_doc')) {
			$request->CTYITC_doc->storeAs('comp_docs/' . $marketerID . '/' . session('application_id'), $request->CTYITC_doc->getClientOriginalName());
			$ctyitcDoc = $request->CTYITC_doc->getClientOriginalName();
		}

		if ($request->hasFile('APP_doc')) {
			$request->APP_doc->storeAs('comp_docs/' . $marketerID . '/' . session('application_id'), $request->APP_doc->getClientOriginalName());
			$appDoc = $request->APP_doc->getClientOriginalName();
		}

		if ($request->hasFile('SOP_doc')) {
			$request->SOP_doc->storeAs('comp_docs/' . $marketerID . '/' . session('application_id'), $request->SOP_doc->getClientOriginalName());
			$sopDoc = $request->SOP_doc->getClientOriginalName();
		}


		LtoInspectionDocument::create([
			'application_id' => session('application_id'),
			'marketer_id' => $marketerID,
			'completed_application_form' => request('CAF'),
			'bankdraft_of_statutory_fees' => request('BSFP'),
			'photocopy_of_approval_to_construct_lpg' => request('PACLPG'),
			'current_weight_measures_cert_of_verification' => request('CWMCV'),
			'application_letter_addressed_to_the_controller' => request('ALACD'),
			'fire_report_certificate' => request('FRC'),
			'current_pressure_test_report_certificate' => request('CPTRC'),
			'current_three_years_income_tax_clearance' => request('CTYITC'),
			'appropriate_plant_photography' => request('APP'),
			'standard_operating_procedure' => request('SOP'),
			'completed_application_form_location_url' => $cafDoc,
			'bankdraft_of_statutory_fees_location_url' => $bsfpDoc,
			'photocopy_of_approval_to_construct_lpg_location_url' => $paclpgDoc,
			'current_weight_measures_cert_of_verification_location_url' => $cwmcvDoc,
			'application_letter_addressed_to_the_controller_location_url' => $alacdDoc,
			'fire_report_certificate_location_url' => $frcDoc,
			'current_pressure_test_report_certificate_location_url' => $cptrcDoc,
			'current_three_years_income_tax_clearance_location_url' => $ctyitcDoc,
			'appropriate_plant_photography_location_url' => $appDoc,
			'standard_operating_procedure_location_url' => $sopDoc,
			'completed_application_form_reason' => request('CAF_reason'),
			'bankdraft_of_statutory_fees_reason' => request('BSFP_reason'),
			'photocopy_of_approval_to_construct_lpg_reason' => request('PACLPG_reason'),
			'current_weight_measures_cert_of_verification_reason' => request('CWMCV_reason'),
			'application_letter_addressed_to_the_controller_reason' => request('ALACD_reason'),
			'fire_report_certificate_reason' => request('FRC_reason'),
			'current_pressure_test_report_certificate_reason' => request('CPTRC_reason'),
			'current_three_years_income_tax_clearance_reason' => request('CTYITC_reason'),
			'appropriate_plant_photography_reason' => request('APP_reason'),
			'standard_operating_procedure_reason' => request('SOP_reason')
		]);

		// clear the application ID from the session
		$request->session()->forget('application_id');

		// supposed to do some type of decisional redirections here either to input LTO again or Just go straight to input takeover records

		// redirect the user to old record takeover
		return redirect('/previous_records');
	}

	public function sendTakeoverOldRecords(Request $request)
	{
		dd($request);

		// clear any exisiting application ID from the session
		$request->session()->forget('application_id');

		// save application_id to session
		session(['application_id' => $applicationID]);

		// redirect to page for uploading LTO old data files
		return redirect('/old_lto_requirement');
	}
}
