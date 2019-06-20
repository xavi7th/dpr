<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\AppDocReview;
use App\JobAssignment;
use App\Staff;
use App\Company;
use App\ReportDocument;
use App\ApplicationComments;
use App\SiteSuitabilityInspectionDocuments;
use App\AddonAtiInspectionDocument;
use App\AddonLtoInspectionDocument;
use App\AtcInspectionDocuments;
use App\GrantAtcIssueAccess;
use App\CatdLtoInspectionDocument;
use App\SiteSuitabilityReports;
use App\LtoInspectionDocument;
use App\IssuedAtcLicense;
use App\IssuedLtoLicense;
use App\LtoLicenseRenewal;
use App\TakeoverInspectionDocuments;
use App\TakeoverReviews;
use App\PressureTestRecords;
use App\JobsTimeline;
use App\adoInbox;
use App\Inbox;
use App\Outbox;
use App\headgasInbox;
use App\zopsconInbox;
use App\adoOutbox;
use Carbon\Carbon;
use App\CustomHelpers;
use App\CompletedJobs;


use Auth;
use DB;

class adoController extends Controller
{

    private $completedCount = '';
    private $inboxUnreadCount = '';
    private $outboxCount = '';

  public function __construct(){
    $this->middleware('auth');
  }

  private function getMailDetails(){

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


    return view('backend.ado.ado_dashboard', compact('inbox', 'inboxUnreadCount', 'outboxCount', 'completedCount'));
  }

  public function adoOutbox(){

    $outbox = Outbox::with('app_doc_review')
      ->where([
        ['role', Auth::user()->role],
        ['office', Auth::user()->office]
      ])->latest()->get();

    $this->getMailDetails();

    $completedCount = $this->completedCount;
    $inboxUnreadCount = $this->inboxUnreadCount;
    $outboxCount = $this->outboxCount;

    return view('backend.ado.ado_outbox', compact('outbox', 'inboxUnreadCount', 'outboxCount', 'completedCount'));
  }

  public function adoCompleted(){

    $completed = CompletedJobs::with('app_doc_review')->latest()->get();

    $this->getMailDetails();

    $completedCount = $this->completedCount;
    $inboxUnreadCount = $this->inboxUnreadCount;
    $outboxCount = $this->outboxCount;

    return view('backend.ado.ado_completed', compact('outboxCount', 'inboxUnreadCount', 'completedCount', 'completed'));
  }

  public function adoDocumentReview(Request $request){

    $id = request('inboxIndex');

    $inboxItem = Inbox::where('id', $id)->first();

    if ($inboxItem) {
      $inboxID = $inboxItem->id; // this is the id of this application from inbox
      Inbox::where('id', $id)->update([
        'read' => 'true'
      ]);
    }

    $applicationID = request('applicationIndex'); // this is the id of this application from app_doc_review
    $applicationReview = AppDocReview::with(['job_assignment','company'])->where('id', $applicationID)->first();    // retrieve application review
    $staffs = Staff::where('role', 'staff')->get();    // retrieve all staffs
    $applicationStatus = JobAssignment::where('application_id', $applicationReview->application_id)->first();    // retrieve application status
    // dd($applicationReview);
    $applicationComments = ApplicationComments::with('staff')->where('application_id', $applicationReview->application_id)->get();
    $reportDocument = ReportDocument::where('application_id', $applicationReview->application_id)->first();    // retrieve report document

    if($applicationReview->sub_category == "Site Suitability Inspection"){
      $applicationID = SiteSuitabilityInspectionDocuments::where('application_id', $applicationReview->application_id)->first();
    }elseif($applicationReview->sub_category == "ATC") {
      $applicationID = AtcInspectionDocuments::where('application_id', $applicationReview->application_id)->first();
      $AtcGrantAccess = GrantAtcIssueAccess::where('application_id', $applicationReview->application_id)->first();
    }elseif($applicationReview->sub_category == "LTO") {
      $applicationID = LtoInspectionDocument::where('application_id', $applicationReview->application_id)->first();
    }elseif($applicationReview->sub_category == "Renewal") {
      // $applicationID = DB::table('lto_inspection_documents')
      // ->Join('lto_license_renewals', 'lto_license_renewals.comp_license_id', '=', 'lto_inspection_documents.application_id')
      // // ->where()
      // ->first();
      $thisApplicationRenewalDetails = LtoLicenseRenewal::where('application_id', $applicationReview->application_id)->first();

      $applicationID = LtoInspectionDocument::where('application_id', $applicationReview->application_id)->first();
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
    }elseif($applicationReview->sub_category == "ADD-ON LTO") {
      $applicationID = AddonLtoInspectionDocument::where('application_id', $applicationReview->application_id)->first();
    } elseif ($applicationReview->sub_category == "CAT-D LTO") {
      $applicationID = CatdLtoInspectionDocument::with('catdLtoApplicationExtention')->where('application_id', $applicationReview->application_id)->first();
    }
    $role = Auth::user()->role;
    return view('backend.ado.view_application_docs', compact('role', 'inboxID','applicationID','applicationReview','staffs','applicationStatus','reportDocument','applicationComments','inboxItem', 'thisApplicationRenewalDetails','AtcGrantAccess'));

  }

  public function adoApproves(Request $request){

      // dd($request);
    $verdict = "";

    if (request('sub_category') == 'ATC') {
      $dateIssued = Carbon::now();
      $expiryDate = Carbon::now()->addMonths(6);
      if (request('approve')) {
        $verdict = 'ATC Issued';
        // update or create a record for this application inside issued atc_licences table
        IssuedAtcLicense::create([
          'application_id' => request('application_id'),
          'company_id' => request('company_id'),
          'staff_id' => request('staff_id'),
          'date_issued' => $dateIssued->toDateTimeString(),
          'expiry_date' => $expiryDate->toDateTimeString(),
        ]);
      } elseif (request('decline')) {
        $verdict = 'ATC Not Issued';
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
          'company_id' => request('company_id'),
          'approved_by' => Auth::user()->staff_id
        ]);
      // update completed job table
      CustomHelpers::toCompletedJobsTable($request);
      // update inbox table
      Inbox::where('id', request('inboxID'))->update([
        'to_outbox' => 'true'
      ]);
    }

    return back();
  }

}