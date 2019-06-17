<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\AppDocReview;
use App\JobAssignment;
use App\Staff;
use App\ReportDocument;
use App\ApplicationComments;
use App\SiteSuitabilityInspectionDocuments;
use App\AddonAtiInspectionDocument;
use App\AddonLtoInspectionDocument;
use App\AtcInspectionDocuments;
use App\CatdLtoInspectionDocument;
use App\SiteSuitabilityReports;
use App\IssuedAtcLicense;
use App\IssuedLtoLicense;
use App\LtoInspectionDocument;
use App\LtoLicenseRenewal;
use App\JobsTimeline;
use App\PressureTestRecords;
use App\Company;
use App\CompletedJobs;
use App\teamleadInbox;
use App\Inbox;
use App\Outbox;
use App\staffInbox;
use App\staffOutbox;
use Carbon\Carbon;

use Auth;
use DB;

class staffController extends Controller
{

	private $completedCount = '';
	private $inboxUnreadCount = '';
	private $outboxCount = '';

	public function __construct()
	{
		$this->middleware('auth');
	}

	private function getMailDetails()
	{

		$this->completedCount = CompletedJobs::count();

		$this->inboxUnreadCount = Inbox::where([
			['read', 'false'],
			['receiver_role', Auth::user()->role],
			['office', Auth::user()->office]
		])->count();

		$this->outboxCount = Inbox::where([
			['to_outbox', 'true'],
			['receiver_role', Auth::user()->role],
			['office', Auth::user()->office]
		])->count();
	}

	public function index()
	{

		$inbox = Inbox::with('app_doc_review.company')
			->where([
				['to_outbox', 'false'],
				['receiver_role', Auth::user()->role],
				['office', Auth::user()->office]
			])->latest()->get();

		$this->getMailDetails();

		$completedCount = $this->completedCount;
		$inboxUnreadCount = $this->inboxUnreadCount;
		$outboxCount = $this->outboxCount;

		return view('backend.staff.staff_dashboard', compact('inbox', 'inboxUnreadCount', 'outboxCount', 'completedCount'));
	}

	public function staffOutbox()
	{

		$outbox = Outbox::with('app_doc_review')
			->where([
				['role', Auth::user()->role],
				['office', Auth::user()->office]
			])->latest()->get();

		// dd($outbox);

		$this->getMailDetails();

		$completedCount = $this->completedCount;
		$inboxUnreadCount = $this->inboxUnreadCount;
		$outboxCount = $this->outboxCount;

		return view('backend.staff.staff_outbox', compact('outbox', 'inboxUnreadCount', 'outboxCount', 'completedCount'));
	}

	public function staffCompleted()
	{
		$completed = CompletedJobs::with('app_doc_review')->latest()->get();

		$this->getMailDetails();

		$completedCount = $this->completedCount;
		$inboxUnreadCount = $this->inboxUnreadCount;
		$outboxCount = $this->outboxCount;

		return view('backend.staff.staff_completed', compact('outboxCount', 'inboxUnreadCount', 'completedCount', 'completed'));
	}

	public function showCreateCompany(SiteSuitabilityInspectionDocuments $applicationID)
	{
		return view('backend.staff.create_company', compact('applicationID'));
	}

	public function staffDocumentReview(Request $request)
	{

		$id = request('inboxIndex');

		$inboxItem = Inbox::where('id', $id)->first();
		$inboxID = $inboxItem->id; // this is the id of this application from inbox

		if ($inboxItem && $inboxItem->read !== 'true') {
			Inbox::where('id', $id)->update([
				'read' => 'true'
			]);
		}

		$applicationID = request('applicationIndex'); // this is the id of this application from app_doc_review
		$applicationReview = AppDocReview::with(['job_assignment', 'company'])->where('id', $applicationID)->first();    // retrieve application review

		/**
		 * No need for a new query. The job is already in the $applicationReview variable as a relationship
		 */
		$thisJob = $applicationReview->job_assignment;   //JobAssignment::where('application_id', $applicationReview->application_id)->first();

		if ($thisJob->job_assignment_status == 'Assigned') {
			JobAssignment::where('application_id', $applicationReview->application_id)->update([
				'job_application_status' => 'Started'
			]);
			$applicationStatus = JobAssignment::where('application_id', $applicationReview->application_id)->first();    // retrieve the new application status
		} else {
			$applicationStatus = $thisJob;    // retrieve application status
		}

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

			// dd($activePressureTest);
			// redirect the staff to the document review area
			// check the pplication that is being assigned to this staff
			if ($applicationReview->sub_category == "Site Suitability Inspection") {
				$applicationID = SiteSuitabilityInspectionDocuments::where('application_id', $applicationReview->application_id)->first();

				// dd($applicationID);
			} elseif ($applicationReview->sub_category == "ATC") {
				$applicationID = AtcInspectionDocuments::where('application_id', $applicationReview->application_id)->first();
			} elseif ($applicationReview->sub_category == "LTO") {
				$applicationID = LtoInspectionDocument::where('application_id', $applicationReview->application_id)->first();
			} elseif ($applicationReview->sub_category == "Renewal") {
				// $applicationID = DB::table('lto_inspection_documents')
				// ->Join('lto_license_renewals', 'lto_license_renewals.comp_license_id', '=', 'lto_inspection_documents.application_id')
				// // ->where()
				// ->first();

				$thisApplicationRenewalDetails = LtoLicenseRenewal::where('application_id', $applicationReview->application_id)->first();

				$applicationID = LtoInspectionDocument::where('application_id', $applicationReview->application_id)->first();
			} elseif ($applicationReview->sub_category == "Take Over") {
				$applicationID = DB::table('takeover_inspection_documents')
					->Join('takeover_reviews', 'takeover_reviews.application_id', '=', 'takeover_inspection_documents.application_id')
					// ->where()
					->first();
			} elseif ($applicationReview->sub_category == "Pressure Testing") {
				$applicationID = PressureTestRecords::where('application_id', $applicationReview->application_id)->first();
				// dd($applicationID);
			} elseif ($applicationReview->sub_category == "ADD-ON ATI") {
				$applicationID = AddonAtiInspectionDocument::where('application_id', $applicationReview->application_id)->first();
			} elseif ($applicationReview->sub_category == "ADD-ON LTO") {
				$applicationID = AddonLtoInspectionDocument::where('application_id', $applicationReview->application_id)->first();
			} elseif ($applicationReview->sub_category == "CAT-D LTO") {
				$applicationID = CatdLtoInspectionDocument::with('catdLtoApplicationExtention')->where('application_id', $applicationReview->application_id)->first();
			}
			$role = Auth::user()->role;

			// debug(
			// $applicationReview->toArray()
			// $applicationID
			// $applicationStatus->toArray()
			// $reportDocument->toArray(),
			// $applicationComments->toArray(),
			// $inboxItem->toArray(),
			// $inboxID,
			// $role,
			// $activePressureTest->toArray(),
			// $issuedAtcLicense
			// );
			return view('backend.staff.view_application_docs', compact('applicationReview', 'applicationID', 'applicationStatus', 'reportDocument', 'applicationComments', 'inboxItem', 'inboxID', 'role', 'thisApplicationRenewalDetails', 'activePressureTest', 'issuedAtcLicense'));
		} else {
			// redirect the staff to register this company
			return view('backend.staff.create_company', compact('applicationReview', 'applicationStatus'));
			// return redirect('/create_company/'.$applicationID->id);
		}
	}

	public function createCompany(Request $request)
	{

		// dd($request);

		// validate this form
		$this->validate(request(), [
			'comp_name' => 'required',
			'contract_type' => 'required',
			'state' => 'required',
			'lga' => 'required',
			'town' => 'required',
			'address' => 'required',
			'mobile_number' => 'required',
			'email' => 'required'
		]);

		// getting the current number of created companies
		$companyCount = DB::table('companies')->get();

		// adding 1 to that number
		$indexIncremented = $companyCount->count() + 1;

		// padding the number to 4 leading zeros
		$newCompanyIndex = sprintf('%05d', $indexIncremented);

		//appending the new company index to DPRCOMP to create the company's ID
		$companyID = "DPRCOMP" . $newCompanyIndex;

		// Verification process to make sure contract_type, state, town all have values
		if ((request('contract_type') == 'Select Contract Type')
			|| (request('state') == 'Select State')
			|| (request('town') == 'Select LGA')
		) {
			return back();
		} else {
			// create and save the company
			Company::create([
				'company_id' => $companyID,
				'company_name' => request('comp_name'),
				'company_alias' => request('comp_alias'),
				'contract_type' => request('contract_type'),
				'state' => request('state'),
				'lga' => request('lga'),
				'town' => request('town'),
				'address' => request('address'),
				'mobile_number' => request('mobile_number'),
				'email_address' => request('email')
			]);

			// update the application to contain the company idea
			AppDocReview::where('application_id', request('application_id'))
				->update([
					'company_id' => $companyID
				]);

			// update application status in Job Assignments Table to STARTED
			JobAssignment::where('application_id', request('application_id'))
				->update([
					'job_application_status' => 'Started',
					'company_id' => $companyID
				]);

			$currentApplication = AppDocReview::where('application_id', request('application_id'))->first();

			if ($currentApplication->sub_category == 'Site Suitability Inspection') {
				SiteSuitabilityInspectionDocuments::where('application_id', request('application_id'))
					->update([
						'company_id' => $companyID
					]);
			} elseif ($currentApplication->sub_category == 'ATC') {
				AtcInspectionDocuments::where('application_id', request('application_id'))
					->update([
						'company_id' => $companyID
					]);
			} elseif ($currentApplication->sub_category == 'LTO') {
				// code...
			}

			// redirect to staff view document
			return redirect('/stDocument_review/' . request('id'));
		}
	}

	public function setDateTested(Request $request)
	{
		// dd($request);
		$currentYear = Carbon::now()->year;
		$manufactureYear = request('manufacture_year');

		$tankAge = $currentYear - $manufactureYear;
		$dateLastTested = date('Y-m-d', strtotime(request('date_tested')));  // this is in javascript time.....converted to PHP datetime

		if ($tankAge < 20) {
			// if the year of manufacture is not up to 20 years, pressure test should be carried out every 5 years
			$dueDate = Carbon::createFromFormat('Y-m-d', $dateLastTested)->addYears(5);  // set due date to 5 years upfront of date last tested
			$dueDate = date('Y-m-d', strtotime($dueDate));
		} elseif ($tankAge >= 20) {
			// if the year of manufacture is up to 20 years and above, pressure test should be carried out every 30 months
			$dueDate = Carbon::createFromFormat('Y-m-d', $dateLastTested)->addMonths(30);  // set due date to 30 months upfront of date last tested
			$dueDate = date('Y-m-d', strtotime($dueDate));
		}

		// dd($dateLastTested);

		PressureTestRecords::where('application_id', request('application_id'))->update([
			'date_last_tested' => $dateLastTested,
			'due_date' => $dueDate
		]);

		$verdict = "Pressure Test Succesful";

		// update app_doc_review
		AppDocReview::where('application_id', request('application_id'))
			->update([
				'application_status' => $verdict
			]);
		// update job_assignments
		JobAssignment::where('application_id', request('application_id'))
			->update([
				'job_application_status' => $verdict,
				'company_id' => request('company_id'),
				'approved_by' => Auth::user()->staff_id
			]);

		// update completed job table
		// CustomHelpers::toCompletedJobsTable($request);
		// update inbox table
		// Inbox::where('id', request('inboxID'))->update([
		//   'to_outbox' => 'true'
		//   ]);

		return back();
	}

	public function uploadReport(Request $request)
	{
		// dd($request);
		$report_document = "";
		// check if request has the document
		if ($request->hasFile('reportDocument')) {
			// dd($request);
			// store the document to the company folder in company reports folder
			$request->reportDocument->storeAs('comp_reports/' . request('company_id') . '/' . request('staff_id') . '/' . request('application_id'), $request->reportDocument->getClientOriginalName());

			$report_document = $request->reportDocument->getClientOriginalName();

			$inspectionDate = date('Y-m-d', strtotime(request('date_of_inspection')));

			if (request('report_type') == 'Implementation Schedule Report') {
				ReportDocument::Create(
					[
						'application_id' => request('application_id'),
						'staff_id' => request('staff_id'),
						'company_id' => request('company_id'),
						'report_url' => $report_document,
						'report_type' => request('report_type'),
						'office' => Auth::user()->office,
						'date_of_inspection' => $inspectionDate
					]
				);
			} else {
				// if this record exist, update the record else create a new record.
				ReportDocument::updateOrCreate(
					[
						'application_id' => request('application_id')
					],
					[
						'application_id' => request('application_id'),
						'staff_id' => request('staff_id'),
						'company_id' => request('company_id'),
						'report_url' => $report_document,
						'report_type' => request('report_type'),
						'office' => Auth::user()->office,
						'date_of_inspection' => $inspectionDate
					]
				);

				JobAssignment::where('application_id', request('application_id'))
					->update([
						'job_application_status' => 'Started'
					]);
			}
			// return back
			return back();
		} else {
			// return back with errors
			return back();
		}
	}

	public function constructionStarted(Request $request)
	{
		// dd($request);
		// $expiryDate = Carbon::now()->addMonths(18);

		/**
		 * Refactor using MySQL add date function
		 * DATE_ADD(date, INTERVAL value addunit)
		 */
		IssuedAtcLicense::where('application_id', request('application_id'))
			->update([
				'expiry_date' => DB::raw('DATE_ADD(expiry_date, INTERVAL 18 MONTH)')
			]);

		Inbox::where('id', request('inbox_id'))->update([
			'to_outbox' => 'true'
		]);

		return redirect('/staff');
	}

	public function upToTeamlead(Request $request)
	{
		// dd($request);
		// update job assignment for this current application as document uploaded
		JobAssignment::where('application_id', request('application_id'))
			->update([
				'job_application_status' => 'Report Submitted'
			]);

		AppDocReview::where('application_id', request('application_id'))
			->update([
				'to_team_lead' => 'received',
				'to_staff' => 'forwarded'
			]);

		$to = Staff::where('role', 'Team Lead')->first(); // remember to find a way to get a specific user and not reneralize with the role

		staffInbox::where('application_id', request('id'))->update([
			'to_outbox' => 'true'
		]);

		// add this application document to the staff outbox
		staffOutbox::create([
			'application_id' => request('id'),
			'to' => $to->staff_id,
			'role' => $to->role,
			'application_type' => request('application_type'),
			'sub_category' => request('sub_category')
		]);

		// add to teamlead inbox
		teamleadInbox::create([
			'application_id' => request('id'),
			'from' => Auth::user()->staff_id,
			'application_type' => request('application_type'),
			'sub_category' => request('sub_category'),
			'read' => 'false',
			'to_outbox' => 'false'
		]);

		$teamlead = JobAssignment::where('application_id', request('application_id'))->first();

		// Add to job timeline
		JobsTimeline::create([
			'application_id' => request('application_id'),
			'from' => Auth::user()->staff_id,
			'to' => $teamlead->assigned_by
		]);

		// return back
		return redirect('/staff');
	}

	public function uploadContructionReportATC(Request $request)
	{
		$report_document = "";
		// check if request has the document
		if ($request->hasFile('reportDocument')) {
			// store the document to the company folder in company reports folder
			$request->reportDocument->storeAs('atc_construction_reports/' . request('company_id') . '/' . request('staff_id') . '/' . request('application_id'), $request->reportDocument->getClientOriginalName());

			$report_document = $request->reportDocument->getClientOriginalName();

			$expiryDate = Carbon::now()->addYears(2);

			// if this record exist, update the record else create a new record.
			IssuedAtcLicense::updateOrCreate(
				[
					'application_id' => request('application_id')
				],
				[
					'application_id' => request('application_id'),
					'staff_id' => request('staff_id'),
					'company_id' => request('company_id'),
					'construction_report' => $report_document,
					'expiry_date' => $expiryDate
				]
			);

			// return back
			return back();
		} else {
			// return back with errors
			return back();
		}
	}
}
