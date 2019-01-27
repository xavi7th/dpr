<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\AppDocReview;
use App\JobAssignment;
use App\Staff;
use App\ReportDocument;
use App\ApplicationComments;
use App\SiteSuitabilityInspectionDocuments;
use App\AtcInspectionDocuments;
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
use App\staffInbox;
use App\staffOutbox;
use Carbon\Carbon;

use Auth;
use DB;

class staffController extends Controller
{

  public function __construct(){
    $this->middleware('auth');
  }

  public function index(){
    $inbox = staffInbox::with('app_doc_review')->where('to_outbox', 'false')->latest()->get();
    $completedCount = CompletedJobs::all();
    $inboxUnreadCount = staffInbox::where('read', 'false')->get();
    $outboxUnreadCount = staffOutbox::all();
    // Retrieve all assigned application documents
    $appDocReviews = DB::table('job_assignments')
    ->join('app_doc_reviews', 'job_assignments.application_id', '=', 'app_doc_reviews.application_id')
    ->where([['job_assignments.staff_id', Auth::user()->staff_id],['app_doc_reviews.to_staff','true']])
    ->orderBy('job_assignments.created_at')
    ->get();
    $appDocReviewsPending = AppDocReview::with('job_assignment')->where('to_staff','received')->get();
    $appDocReviewsCompleted = AppDocReview::with('job_assignment')->where('to_staff','completed')->get();    // get all pending application requests
    $appDocReviewsOutbox = JobsTimeline::with(['app_doc_rev','job_assignment'])->where('from', Auth::user()->staff_id)->latest()->get();

    return view('backend.staff.staff_dashboard', compact('appDocReviews','appDocReviewsPending','appDocReviewsCompleted','appDocReviewsOutbox','inbox','inboxUnreadCount','outboxUnreadCount', 'completedCount'));
  }

  public function staffPending(){
    // Retrieve all assigned application documents
    $appDocReviews = DB::table('job_assignments')
    ->join('app_doc_reviews', 'job_assignments.application_id', '=', 'app_doc_reviews.application_id')
    ->where([['job_assignments.staff_id', Auth::user()->staff_id],['app_doc_reviews.to_staff','true']])
    ->orderBy('job_assignments.created_at')
    ->get();
    $appDocReviewsPending = AppDocReview::with('job_assignment')->where('to_staff','received')->latest()->get();
    $appDocReviewsCompleted = AppDocReview::with('job_assignment')->where('to_staff','completed')->get();    // get all pending application requests
    $appDocReviewsOutbox = JobsTimeline::with(['app_doc_rev','job_assignment'])->where('from', Auth::user()->staff_id)->latest()->get();

    return view('backend.staff.staff_pending', compact('appDocReviews','appDocReviewsPending','appDocReviewsCompleted','appDocReviewsOutbox'));
  }

  public function staffOutbox(){
    $outbox = staffOutbox::with('app_doc_review')->latest()->get();
    $completedCount = CompletedJobs::all();
    $inboxUnreadCount = staffInbox::where('read', 'false')->get();
    $outboxUnreadCount = staffOutbox::all();
    // Retrieve all assigned application documents
    $appDocReviews = DB::table('job_assignments')
    ->join('app_doc_reviews', 'job_assignments.application_id', '=', 'app_doc_reviews.application_id')
    ->where([['job_assignments.staff_id', Auth::user()->staff_id],['app_doc_reviews.to_staff','true']])
    ->orderBy('job_assignments.created_at')
    ->get();
    $appDocReviewsPending = AppDocReview::with('job_assignment')->where('to_staff','received')->get();
    $appDocReviewsCompleted = AppDocReview::with('job_assignment')->where('to_staff','completed')->get();    // get all pending application requests
    $appDocReviewsOutbox = JobsTimeline::with(['app_doc_rev','job_assignment'])->where('from', Auth::user()->staff_id)->latest()->get();

    // dd($appDocReviewsOutbox);

    return view('backend.staff.staff_outbox', compact('appDocReviews','appDocReviewsPending','appDocReviewsCompleted','appDocReviewsOutbox','outbox','inboxUnreadCount','outboxUnreadCount', 'completedCount'));
  }

  public function staffCompleted(){
    // Retrieve all assigned application documents
    $completedCount = CompletedJobs::all();
    $inboxUnreadCount = staffInbox::where('read', 'false')->get();
    $outboxUnreadCount = staffOutbox::all();

    $completed = CompletedJobs::with('app_doc_review')->latest()->get();
    
    return view('backend.staff.staff_completed', compact('outboxUnreadCount', 'inboxUnreadCount', 'completedCount','completed'));
  }

  public function showCreateCompany(SiteSuitabilityInspectionDocuments $applicationID){
    return view('backend.staff.create_company', compact('applicationID'));
  }

  public function staffDocumentReview($id){
    staffInbox::where('application_id', $id)->update([
      'read' => 'true'
    ]);

    $applicationReview = AppDocReview::where('id', $id)->first();    // retrieve application review

    $applicationStatus = JobAssignment::where('application_id', $applicationReview->application_id)->first();    // retrieve application status
    $reportDocument = ReportDocument::where('application_id', $applicationReview->application_id)->first();    // retrieve report document
    $applicationComments = ApplicationComments::with('staff')->where('application_id', $applicationReview->application_id)->get();

    // check if the company that has this application has been registered into the system
    if($applicationReview->company_id != null){
      // redirect the staff to the document review area
      // check the pplication that is being assigned to this staff
      if($applicationReview->sub_category == "Site Suitability Inspection"){
        $applicationID = SiteSuitabilityInspectionDocuments::where('application_id', $applicationReview->application_id)->first();
      }elseif($applicationReview->sub_category == "ATC") {
        $applicationID = AtcInspectionDocuments::where('application_id', $applicationReview->application_id)->first();
      }elseif($applicationReview->sub_category == "LTO") {
        $applicationID = LtoInspectionDocument::where('application_id', $applicationReview->application_id)->first();
      }elseif($applicationReview->sub_category == "Renewal") {
        $applicationID = DB::table('lto_inspection_documents')
        ->Join('lto_license_renewals', 'lto_license_renewals.comp_license_id', '=', 'lto_inspection_documents.application_id')
        // ->where()
        ->first();
      }elseif($applicationReview->sub_category == "Take Over") {
        $applicationID = DB::table('takeover_inspection_documents')
        ->Join('takeover_reviews', 'takeover_reviews.application_id', '=', 'takeover_inspection_documents.application_id')
        // ->where()
        ->first();
      }elseif($applicationReview->sub_category == "Pressure Testing") {
        $applicationID = PressureTestRecords::where('application_id', $applicationReview->application_id)->first();
        // dd($applicationID);
      }
      return view('backend.staff.view_application_docs', compact('applicationReview','applicationID','applicationStatus','reportDocument','applicationComments'));
    }else{
      // redirect the staff to register this company
      return view('backend.staff.create_company', compact('applicationReview','applicationStatus'));
      // return redirect('/create_company/'.$applicationID->id);
    }
  }

  public function createCompany(Request $request){

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
    $companyID = "DPRCOMP".$newCompanyIndex;

    // Verification process to make sure contract_type, state, town all have values
    if((request('contract_type') == 'Select Contract Type')
    || (request('state') == 'Select State')
    || (request('town') == 'Select LGA')){
      return back();
    }else{
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

      if($currentApplication->sub_category == 'Site Suitability Inspection'){
        SiteSuitabilityInspectionDocuments::where('application_id', request('application_id'))
        ->update([
          'company_id' => $companyID
        ]);
      }elseif($currentApplication->sub_category == 'ATC') {
        AtcInspectionDocuments::where('application_id', request('application_id'))
        ->update([
          'company_id' => $companyID
        ]);
      }elseif ($currentApplication->sub_category == 'LTO') {
        // code...
      }

      // redirect to staff view document
      return redirect('/stDocument_review/'.request('id'));
    }
  }

  public function uploadReport(Request $request){
    $report_document = "";
    // check if request has the document
    if($request->hasFile('reportDocument')){
      // store the document to the company folder in company reports folder
      $request->reportDocument->storeAs('comp_reports/'.request('company_id').'/'.request('staff_id').'/'.request('application_id'), $request->reportDocument->getClientOriginalName());

      $report_document = $request->reportDocument->getClientOriginalName();

      // if this record exist, update the record else create a new record.
      ReportDocument::updateOrCreate([
        'application_id' => request('application_id')
      ],
      [
        'application_id' => request('application_id'),
        'staff_id' => request('staff_id'),
        'company_id' => request('company_id'),
        'report_url' => $report_document
      ]);

      JobAssignment::where('application_id', request('application_id'))
      ->update([
        'job_application_status' => 'Started'
      ]);

      // return back
      return back();
    }else{
      // return back with errors
      return back();
    }
  }

  public function upToTeamlead(Request $request){
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

  public function uploadContructionReportATC(Request $request){
    $report_document = "";
    // check if request has the document
    if($request->hasFile('reportDocument')){
      // store the document to the company folder in company reports folder
      $request->reportDocument->storeAs('atc_construction_reports/'.request('company_id').'/'.request('staff_id').'/'.request('application_id'), $request->reportDocument->getClientOriginalName());

      $report_document = $request->reportDocument->getClientOriginalName();

      $expiryDate = Carbon::now()->addYears(2);

      // if this record exist, update the record else create a new record.
      IssuedAtcLicense::updateOrCreate([
        'application_id' => request('application_id')
      ],
      [
        'application_id' => request('application_id'),
        'staff_id' => request('staff_id'),
        'company_id' => request('company_id'),
        'construction_report' => $report_document,
        'expiry_date' => $expiryDate
      ]);

      // return back
      return back();
    }else{
      // return back with errors
      return back();
    }
  }


}
