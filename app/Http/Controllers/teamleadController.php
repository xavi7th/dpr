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
use App\AddonAtiInspectionDocument;
use App\AddonLtoInspectionDocument;
use App\CatdLtoInspectionDocument;
use App\AtcInspectionDocuments;
use App\SiteSuitabilityReports;
use App\IssuedAtcLicense;
use App\IssuedLtoLicense;
use App\LtoInspectionDocument;
use App\LtoLicenseRenewal;
use App\PressureTestRecords;
use App\JobsTimeline;
use App\teamleadInbox;
use App\Inbox;
use App\Outbox;
use App\headgasInbox;
use Carbon\Carbon;

use Auth;
use DB;
use App\CustomHelpers;

class teamleadController extends Controller
{

  private $completedCount = '';
  private $inboxUnreadCount = '';
  private $outboxCount = '';

  public function __construct(){
    $this->middleware('auth');
  }

  private function getMailDetails()
  {

    $this->completedCount = CompletedJobs::all()->count();

    $this->inboxUnreadCount = Inbox::where([
      ['read', 'false'],
      ['receiver_role', Auth::user()->role],
      ['office', Auth::user()->office]
    ])->get()->count();

    $this->outboxCount = Inbox::where([
      ['to_outbox', 'true'],
      ['receiver_role', Auth::user()->role],
      ['office', Auth::user()->office]
    ])->get()->count();

  }

  public function index(){

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

    return view('backend.teamlead.teamlead_dashboard', compact('inbox', 'inboxUnreadCount', 'outboxCount', 'completedCount'));
  }

  public function teamleadOutbox(){

    $outbox = Outbox::with('app_doc_review')
      ->where([
        ['role', Auth::user()->role],
        ['office', Auth::user()->office]
      ])->latest()->get();

    $this->getMailDetails();

    $completedCount = $this->completedCount;
    $inboxUnreadCount = $this->inboxUnreadCount;
    $outboxCount = $this->outboxCount;

    return view('backend.teamlead.teamlead_outbox', compact('outbox', 'inboxUnreadCount', 'outboxCount', 'completedCount'));
  }

  public function teamleadCompleted(Request $request){

    $completed = CompletedJobs::with('app_doc_review')->latest()->get();

    $this->getMailDetails();

    $completedCount = $this->completedCount;
    $inboxUnreadCount = $this->inboxUnreadCount;
    $outboxCount = $this->outboxCount;

    return view('backend.teamlead.teamlead_completed', compact('outboxCount', 'inboxUnreadCount', 'completedCount', 'completed'));
  }

  public function teamleadDocumentReview(Request $request){
    $id = request('inboxIndex');

    $inboxItem = Inbox::where('id', $id)->first();

    if ($inboxItem) {
      $inboxID = $inboxItem->id; // this is the id of this application from inbox
      Inbox::where('id', $id)->update([
        'read' => 'true'
      ]);
    }

    $applicationID = request('applicationIndex'); // this is the id of this application from app_doc_review
    $applicationReview = AppDocReview::with(['job_assignment', 'company'])->where('id', $applicationID)->first();    // retrieve application review
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
    } elseif ($applicationReview->sub_category == "ADD-ON ATI") {
      $applicationID = AddonAtiInspectionDocument::where('application_id', $applicationReview->application_id)->first();
    } elseif ($applicationReview->sub_category == "ADD-ON LTO") {
      $applicationID = AddonLtoInspectionDocument::where('application_id', $applicationReview->application_id)->first();
    } elseif ($applicationReview->sub_category == "CAT-D LTO") {
      $applicationID = CatdLtoInspectionDocument::with('catdLtoApplicationExtention')->where('application_id', $applicationReview->application_id)->first();
    }
    $role = Auth::user()->role;
    return view('backend.teamlead.view_application_docs', compact('role', 'inboxID', 'applicationID', 'applicationReview', 'staffs', 'applicationStatus', 'reportDocument', 'applicationComments', 'inboxItem'));
  }

  public function teamleadApproves(Request $request){
    
    // dd($request);

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
      // 'job_application_status' => $verdict
    ]);

    Inbox::where('id', request('inboxID'))->update([
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

  // public function upToHeadGas(Request $request){

  //   // dd($request);

  //   if(request('sendToHeadGas')){

  //     // send this application request back to head gas
  //     AppDocReview::where('application_id', request('application_id'))
  //     ->update([
  //       'to_head_gas' => 'received',
  //       'to_team_lead' => 'forwarded'
  //     ]);

  //     $to = Staff::where('role', 'Head Gas M&G Lagos')->first();

  //     JobsTimeline::create([
  //       'application_id' => request('application_id'),
  //       'from' => Auth::user()->staff_id,
  //       'to' => $to->staff_id
  //     ]);

  //     teamleadInbox::where('application_id', request('id'))->update([
  //       'to_outbox' => 'true'
  //     ]);

  //     // add this application document to the teamlead outbox
  //     teamleadOutbox::create([
  //       'application_id' => request('id'),
  //       'to' => $to->staff_id,
  //       'role' => $to->role,
  //       'application_type' => request('application_type'),
  //       'sub_category' => request('sub_category')
  //     ]);

  //     // add to headgas inbox
  //     headgasInbox::create([
  //       'application_id' => request('id'),
  //       'from' => Auth::user()->staff_id,
  //       'application_type' => request('application_type'),
  //       'sub_category' => request('sub_category'),
  //       'read' => 'false',
  //       'to_outbox' => 'false'
  //     ]);

  //   }elseif(request('sendToStaff')) {

  //     // send this application request back to staff
  //     $this->teamleadAssignProcess($request);

  //   }



  //   return redirect('/teamlead');

  // }











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
