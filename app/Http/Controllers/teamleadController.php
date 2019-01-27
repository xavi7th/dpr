<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\AppDocReview;
use App\JobAssignment;
use App\Staff;
use App\CompletedJobs;
use App\ReportDocument;
use App\ApplicationComments;
use App\SiteSuitabilityInspectionDocuments;
use App\AtcInspectionDocuments;
use App\SiteSuitabilityReports;
use App\IssuedAtcLicense;
use App\IssuedLtoLicense;
use App\LtoInspectionDocument;
use App\LtoLicenseRenewal;
use App\PressureTestRecords;
use App\JobsTimeline;
use App\teamleadInbox;
use App\staffInbox;
use App\teamleadOutbox;
use App\headgasInbox;
use Carbon\Carbon;

use Auth;
use DB;
use App\CustomHelpers;

class teamleadController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }

  public function index(){
    $inbox = teamleadInbox::with('app_doc_review')->where('to_outbox', 'false')->latest()->get();
    // dd($inbox);
    $completedCount = CompletedJobs::all();
    $inboxUnreadCount = teamleadInbox::where('read', 'false')->get();
    $outboxUnreadCount = teamleadOutbox::all();
    $appDocReviews = AppDocReview::with('job_assignment')->where('to_team_lead','true')->latest()->get();    // get all application requests
    $appDocReviewsPending = AppDocReview::with('job_assignment')->where('to_team_lead','received')->get();    // get all pending application requests
    $appDocReviewsCompleted = AppDocReview::with('job_assignment')->where('to_team_lead','completed')->get();    // get all pending application requests
    $appDocReviewsOutbox = JobsTimeline::with(['app_doc_rev','job_assignment'])->where('from', Auth::user()->staff_id)->latest()->get();

    return view('backend.teamlead.teamlead_dashboard', compact('appDocReviews','appDocReviewsPending','appDocReviewsCompleted','appDocReviewsOutbox','inbox','inboxUnreadCount','outboxUnreadCount','completedCount'));
  }

  public function teamleadPending(){
    $appDocReviews = AppDocReview::with('job_assignment')->where('to_team_lead','true')->get();    // get all application requests
    $appDocReviewsPending = AppDocReview::with('job_assignment')->where('to_team_lead','received')->get();    // get all pending application requests
    $appDocReviewsCompleted = AppDocReview::with('job_assignment')->where('to_team_lead','completed')->get();    // get all pending application requests
    $appDocReviewsOutbox = JobsTimeline::with(['app_doc_rev','job_assignment'])->where('from', Auth::user()->staff_id)->latest()->get();
    return view('backend.teamlead.teamlead_pending', compact('appDocReviews','appDocReviewsPending','appDocReviewsCompleted','appDocReviewsOutbox'));
  }

  public function teamleadOutbox(){
    $outbox = teamleadOutbox::with('app_doc_review')->latest()->get();
    // dd($outbox);
    $completedCount = CompletedJobs::all();
    $inboxUnreadCount = teamleadInbox::where('read', 'false')->get();
    $outboxUnreadCount = teamleadOutbox::all();
    $appDocReviews = AppDocReview::with('job_assignment')->where('to_team_lead','true')->get();    // get all application requests
    $appDocReviewsPending = AppDocReview::with('job_assignment')->where('to_team_lead','received')->get();    // get all pending application requests
    $appDocReviewsCompleted = AppDocReview::with('job_assignment')->where('to_team_lead','completed')->get();    // get all pending application requests
    $appDocReviewsOutbox = JobsTimeline::with(['app_doc_rev','job_assignment'])->where('from', Auth::user()->staff_id)->latest()->get();
    // dd($appDocReviewsOutbox);
    return view('backend.teamlead.teamlead_outbox', compact('appDocReviews','appDocReviewsPending','appDocReviewsCompleted','appDocReviewsOutbox','outbox','inboxUnreadCount','outboxUnreadCount','completedCount'));
  }

  public function teamleadCompleted(){

    $completedCount = CompletedJobs::all();
    $inboxUnreadCount = teamleadInbox::where('read', 'false')->get();
    $outboxUnreadCount = teamleadOutbox::all();

    $completed = CompletedJobs::with('app_doc_review')->latest()->get();

    return view('backend.teamlead.teamlead_completed', compact('outboxUnreadCount', 'inboxUnreadCount', 'completedCount', 'completed'));
  }

  public function teamleadDocumentReview($id){
    teamleadInbox::where('application_id', $id)->update([
      'read' => 'true'
    ]);
    // $applicationReview = AppDocReview::with('job_assignment')->where('application_id', $applicationID->application_id)->first();    // retrieve application review
    $applicationReview = AppDocReview::with('job_assignment')->where('id', $id)->first();    // retrieve application review
    $staffs = Staff::where('role', 'staff')->get();    // retrieve all staffs
    $applicationStatus = JobAssignment::where('application_id', $applicationReview->application_id)->first();    // retrieve application status
    $applicationComments = ApplicationComments::with('staff')->where('application_id', $applicationReview->application_id)->get();
    $reportDocument = ReportDocument::where('application_id', $applicationReview->application_id)->first();    // retrieve report document

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

    // dd($applicationStatus);
    return view('backend.teamlead.view_application_docs', compact('applicationID','applicationReview','staffs','applicationStatus','reportDocument','applicationComments'));
  }

  public function teamleadDocumentAssign(Request $request){

    // dd($request);
    $this->teamleadAssignProcess($request);
    return redirect('/teamlead');
  }

  public function teamleadApproves(Request $request){
    $verdict = "";

    if(request('approve')){
      $verdict = 'Site Suitable';
    }elseif (request('decline')) {
      $verdict = 'Site Not Suitable';
    }


    // update app_doc_review
    AppDocReview::where('application_id', request('application_id'))
    ->update([
      'application_status' => $verdict
    ]);

    // update job_assignments
    JobAssignment::where('application_id', request('application_id'))
    ->update([
      'job_application_status' => $verdict,
      'approved_by' => Auth::user()->staff_id
    ]);

    // update app_doc_review
    AppDocReview::where('application_id', request('application_id'))
      ->update([
        'application_status' => $verdict,
        'to_zopscon' => 'completed',
        'to_ADO' => 'completed',
        'to_head_gas' => 'completed',
        'to_team_lead' => 'completed',
        'to_staff' => 'completed'
      ]);

      // update teamlead inbox for this application as sent to outbox....reason is we don't want to leave the application at the teamlead inbox
    teamleadInbox::where('application_id', request('id'))->update([
      'to_outbox' => 'true'
    ]);

    // record this application inside site suitability reports
    SiteSuitabilityReports::create([
      'application_id' => request('application_id'),
      'staff_id' => request('staff_id'),
      'company_id' => request('company_id'),
      'marketer_id' => request('marketer_id'),
      'report_location' => request('report_url')
    ]);

    // send to completed jobs table
    CustomHelpers::toCompletedJobsTable($request);

    return redirect('/teamlead');
  }

  public function upToHeadGas(Request $request){

    // dd($request);

    if(request('sendToHeadGas')){

      // send this application request back to head gas
      AppDocReview::where('application_id', request('application_id'))
      ->update([
        'to_head_gas' => 'received',
        'to_team_lead' => 'forwarded'
      ]);

      $to = Staff::where('role', 'Head Gas M&G Lagos')->first();

      JobsTimeline::create([
        'application_id' => request('application_id'),
        'from' => Auth::user()->staff_id,
        'to' => $to->staff_id
      ]);

      teamleadInbox::where('application_id', request('id'))->update([
        'to_outbox' => 'true'
      ]);

      // add this application document to the teamlead outbox
      teamleadOutbox::create([
        'application_id' => request('id'),
        'to' => $to->staff_id,
        'role' => $to->role,
        'application_type' => request('application_type'),
        'sub_category' => request('sub_category')
      ]);

      // add to headgas inbox
      headgasInbox::create([
        'application_id' => request('id'),
        'from' => Auth::user()->staff_id,
        'application_type' => request('application_type'),
        'sub_category' => request('sub_category'),
        'read' => 'false',
        'to_outbox' => 'false'
      ]);

    }elseif(request('sendToStaff')) {

      // send this application request back to staff
      $this->teamleadAssignProcess($request);

    }



    return redirect('/teamlead');

  }











#######################################################################################################
#######################################################################################################
#######################################################################################################
#######################################################################################################
#######################################################################################################
#######################################################################################################



  private function teamleadAssignProcess(Request $request){
    AppDocReview::where('application_id', request('application_id'))
    ->update([
      'to_team_Lead' => 'forwarded',
      'to_staff' => 'true'
    ]);

    $to = Staff::where('staff_id', request('staff_id'))->first();

    JobsTimeline::create([
      'application_id' => request('application_id'),
      'from' => Auth::user()->staff_id,
      'to' => $to->staff_id
    ]);

    teamleadInbox::where('application_id', request('id'))->update([
      'to_outbox' => 'true'
    ]);

    // add this application document to the teamlead outbox
    teamleadOutbox::create([
      'application_id' => request('id'),
      'to' => $to->staff_id,
      'role' => $to->role,
      'application_type' => request('application_type'),
      'sub_category' => request('sub_category')
    ]);

    // add to staff inbox
    staffInbox::create([
      'application_id' => request('id'),
      'from' => Auth::user()->staff_id,
      'application_type' => request('application_type'),
      'sub_category' => request('sub_category'),
      'read' => 'false',
      'to_outbox' => 'false'
    ]);

    JobAssignment::updateOrCreate([
      'application_id' => request('application_id')
    ],
    [
      'application_id' => request('application_id'),
      'assigned_by' => Auth::user()->staff_id,
      'staff_id' => request('staff_id'),
      'job_application_status' => 'Assigned'
    ]);
  }

}
































// public function teamleadDocumentAssign(Request $request){
//
//   dd($request);
//
//   AppDocReview::where('application_id', request('application_id'))
//   ->update([
//     'to_team_Lead' => 'forwarded',
//     'to_staff' => 'true'
//   ]);
//
//   $to = Staff::where('role', 'Staff')->first();
//
//   JobsTimeline::create([
//     'application_id' => request('application_id'),
//     'from' => Auth::user()->staff_id,
//     'to' => $to->staff_id
//   ]);
//
//   teamleadInbox::where('application_id', request('id'))->update([
//     'to_outbox' => 'true'
//   ]);
//
//   // add this application document to the teamlead outbox
//   teamleadOutbox::create([
//     'application_id' => request('id'),
//     'to' => $to->staff_id,
//     'role' => $to->role,
//     'application_type' => request('application_type'),
//     'sub_category' => request('sub_category')
//   ]);
//
//   // add to staff inbox
//   staffInbox::create([
//     'application_id' => request('id'),
//     'from' => Auth::user()->staff_id,
//     'application_type' => request('application_type'),
//     'sub_category' => request('sub_category'),
//     'read' => 'false',
//     'to_outbox' => 'false'
//   ]);
//
//   JobAssignment::updateOrCreate([
//     'application_id' => request('application_id')
//   ],
//   [
//     'application_id' => request('application_id'),
//     'assigned_by' => Auth::user()->staff_id,
//     'staff_id' => request('staff_id'),
//     'job_application_status' => 'Assigned'
//   ]);
//
//   JobsTimeline::create([
//     'application_id' => request('application_id'),
//     'from' => Auth::user()->staff_id,
//     'to' => request('staff_id')
//   ]);
//
//   return redirect('/teamlead');
// }
