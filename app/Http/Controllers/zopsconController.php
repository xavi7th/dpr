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
use App\CatdLtoInspectionDocument;
use App\AtcInspectionDocuments;
use App\SiteSuitabilityReports;
use App\LtoInspectionDocument;
use App\IssuedAtcLicense;
use App\IssuedLtoLicense;
use App\LtoLicenseRenewal;
use App\TakeoverInspectionDocuments;
use App\TakeoverReviews;
use App\PressureTestRecords;
use App\JobsTimeline;
use App\zopsconInbox;
use App\Inbox;
use App\Outbox;
use App\adoInbox;
use App\zopsconOutbox;
use App\CustomHelpers;
use App\CompletedJobs;
use Carbon\Carbon;

use Auth;
use DB;
use App\GrantAtcIssueAccess;

class zopsconController extends Controller
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

      // $inbox = Inbox::with('app_doc_review')
      // ->where([
      // ['to_outbox', 'false'],
      // ['receiver_role', Auth::user()->role],
      // ['office', Auth::user()->office]
      // ])->latest()->get();

      // dd($inbox);
      
      $this->getMailDetails();

      $completedCount = $this->completedCount;
      $inboxUnreadCount = $this->inboxUnreadCount;
      $outboxCount = $this->outboxCount;

      
      return view('backend.zopscon.zopscon_dashboard', compact('inbox', 'inboxUnreadCount', 'outboxCount', 'completedCount'));
      
    }  

    public function zopsconOutbox(){

      $outbox = Outbox::with('app_doc_review')
      ->where([
        ['role', Auth::user()->role],
        ['office', Auth::user()->office]
      ])->latest()->get();

      $this->getMailDetails();

      $completedCount = $this->completedCount;
      $inboxUnreadCount = $this->inboxUnreadCount;
      $outboxCount = $this->outboxCount;

      return view('backend.zopscon.zopscon_outbox', compact('outbox', 'inboxUnreadCount', 'outboxCount', 'completedCount'));
    }

    public function zopsconCompleted(){

      $completed = CompletedJobs::with('app_doc_review')->latest()->get();

      $this->getMailDetails();

      $completedCount = $this->completedCount;
      $inboxUnreadCount = $this->inboxUnreadCount;
      $outboxCount = $this->outboxCount;

      return view('backend.zopscon.zopscon_completed', compact('outboxCount', 'inboxUnreadCount', 'completedCount', 'completed'));
    }

    public function zopsconDocumentReview(Request $request){
      
      // dd($request);

      $id = request('inboxIndex');

      // update this document to read in zopscon inbox
      
      // retrieves the inbox value of this particular index
      $inboxItem = Inbox::where('id', $id)->first();

      if($inboxItem){
        $inboxID = $inboxItem->id; // this is the id of this application from inbox
        Inbox::where('id', $id)->update([
          'read' => 'true'
        ]);
      }

      // dd($inboxItem);

      $applicationID = request('applicationIndex'); // this is the id of this application from app_doc_review
      $applicationReview = AppDocReview::with(['job_assignment', 'company'])->where('id', $applicationID)->first();    // retrieve application review
      $staffs = Staff::where('role', 'staff')->get();    // retrieve all staffs
      $applicationStatus = JobAssignment::where('application_id', $applicationReview->application_id)->first();    // retrieve application status
      $applicationComments = ApplicationComments::with('staff')->where('application_id', $applicationReview->application_id)->get();    // retrieve all comments on this application
      $reportDocument = ReportDocument::where('application_id', $applicationReview->application_id)->first();    // retrieve report document

      if($applicationReview->sub_category == "Site Suitability Inspection"){
        $applicationID = SiteSuitabilityInspectionDocuments::where('application_id', $applicationReview->application_id)->first();
      }elseif($applicationReview->sub_category == "ATC") {
        $applicationID = AtcInspectionDocuments::where('application_id', $applicationReview->application_id)->first();
        $AtcGrantAccess = GrantAtcIssueAccess::where('application_id', $applicationReview->application_id)->first();
        // dd($AtcGrantAccess);
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
      } elseif ($applicationReview->sub_category == "ADD-ON ATI") {
        $applicationID = AddonAtiInspectionDocument::where('application_id', $applicationReview->application_id)->first();
      } elseif ($applicationReview->sub_category == "ADD-ON LTO") {
        $applicationID = AddonLtoInspectionDocument::where('application_id', $applicationReview->application_id)->first();
      } elseif ($applicationReview->sub_category == "CAT-D LTO") {
        $applicationID = CatdLtoInspectionDocument::with('catdLtoApplicationExtention')->where('application_id', $applicationReview->application_id)->first();
      }
      $role = Auth::user()->role;
      return view('backend.zopscon.view_application_docs', compact('role', 'inboxID','applicationID','applicationReview','staffs','applicationStatus','reportDocument','applicationComments','inboxItem','AtcGrantAccess'));

    }

    // public function forwardApplicationToADO(Request $request){
    //   // dd($request);
    //   AppDocReview::where('application_id', request('application_id'))
    //   ->update([
    //     'to_zopscon' => 'forwarded',
    //     'to_ADO' => 'true'
    //   ]);

    //   $to = Staff::where('role', 'ADO')->first();

    //   JobsTimeline::create([
    //     'application_id' => request('application_id'),
    //     'from' => Auth::user()->staff_id,
    //     'to' => $to->staff_id
    //   ]);

    //   // update this document to_outbox => true inside zopscon inbox

    //   zopsconInbox::where('application_id', request('id'))->update([
    //     'to_outbox' => 'true'
    //   ]);

    //   // add this application document to the zopscon outbox
    //   zopsconOutbox::create([
    //     'application_id' => request('id'),
    //     'to' => $to->staff_id,
    //     'role' => $to->role,
    //     'application_type' => request('application_type'),
    //     'sub_category' => request('sub_category')
    //   ]);

    //   // add to ado inbox
    //   adoInbox::create([
    //     'application_id' => request('id'),
    //     'from' => Auth::user()->staff_id,
    //     'application_type' => request('application_type'),
    //     'sub_category' => request('sub_category'),
    //     'read' => 'false',
    //     'to_outbox' => 'false'
    //   ]);


    //   return redirect('/zopscon');
    //   // return redirect('/zopscon_job_timeline');
    // }

    public function grantIssuePriviledge(Request $request){
      // dd($request);
      GrantAtcIssueAccess::create([
        'application_id' => request('application_id'),
        'granted' => 'true',
      ]);

      return back();
    }

    public function zopsconApproves(Request $request){
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

        // if(request('sub_category') == 'Site Suitability Inspection'){
        //   if(request('approve')){
        //     $verdict = 'Site Suitable';
        //     // record this application inside site suitability reports
        //     SiteSuitabilityReports::create([
        //       'application_id' => request('application_id'),
        //       'staff_id' => request('staff_id'),
        //       'company_id' => request('company_id'),
        //       'marketer_id' => request('marketer_id'),
        //       'report_location' => request('report_url')
        //     ]);
        //   }elseif (request('decline')) {
        //     $verdict = 'Site Not Suitable';
        //   }

        //   // update app_doc_review
        //   AppDocReview::where('application_id', request('application_id'))
        //   ->update([
        //     'application_status' => $verdict,
        //     'to_zopscon' => 'completed',
        //     'to_ADO' => 'completed',
        //     'to_head_gas' => 'completed',
        //     'to_team_lead' => 'completed',
        //     'to_staff' => 'completed'
        //   ]);

        //   // update job_assignments
        //   JobAssignment::where('application_id', request('application_id'))
        //   ->update([
        //     'job_application_status' => $verdict,
        //     'approved_by' => Auth::user()->staff_id
        //   ]);

        //   // update completed job table
        //   CustomHelpers::toCompletedJobsTable($request);
          

        // zopsconInbox::where('application_id', request('id'))->update([
        //   'to_outbox' => 'true'
        // ]);

        // }elseif (request('sub_category') == 'ATC') {
        //   $dateIssued = Carbon::now();
        //   $expiryDate = Carbon::now()->addMonths(6);
        //   if(request('approve')){
        //     $verdict = 'ATC Issued';
        //     // update or create a record for this application inside issued atc_licences table
        //     IssuedAtcLicense::create([
        //       'application_id' => request('application_id'),
        //       'company_id' => request('company_id'),
        //       'staff_id' => request('staff_id'),
        //       'date_issued' => $dateIssued->toDateTimeString(),
        //       'expiry_date' => $expiryDate->toDateTimeString(),
        //     ]);
        //   }elseif (request('decline')) {
        //     $verdict = 'ATC Not Issued';
        //   }

        //   // update app_doc_review
        //   AppDocReview::where('application_id', request('application_id'))
        //   ->update([
        //     'application_status' => $verdict,
        //     'to_zopscon' => 'completed',
        //     'to_ADO' => 'completed',
        //     'to_head_gas' => 'completed',
        //     'to_team_lead' => 'completed',
        //     'to_staff' => 'completed'
        //   ]);

        //   // update job_assignments
        //   JobAssignment::where('application_id', request('application_id'))
        //   ->update([
        //     'job_application_status' => $verdict,
        //     'company_id' => request('company_id'),
        //     'approved_by' => Auth::user()->staff_id
        //   ]);

        //   // update completed job table
        // CustomHelpers::toCompletedJobsTable($request);

        // zopsconInbox::where('application_id', request('id'))->update([
        //   'to_outbox' => 'true'
        // ]);


        // }elseif (request('sub_category') == 'LTO') {
        //   $dateIssued = Carbon::now();
        //   $expiryDate = Carbon::now()->addYears(2);
        //   if(request('approve')){
        //     $verdict = 'LTO Issued';

        //     // update or create a record for this application inside issued atc_licences table
        //     IssuedLtoLicense::create([
        //       'application_id' => request('application_id'),
        //       'company_id' => request('company_id'),
        //       'staff_id' => request('staff_id'),
        //       'date_issued' => $dateIssued->toDateTimeString(),
        //       'expiry_date' => $expiryDate->toDateTimeString(),
        //       'report_url' => request('report_url')
        //     ]);

        //     // lto inspection document
        //     LtoInspectionDocument::where('application_id', request('application_id'))
        //     ->update([
        //       'company_id' => request('company_id')
        //     ]);
        //   }elseif (request('decline')) {
        //     $verdict = 'LTO Not Issued';
        //   }

        //   // update app_doc_review
        //   AppDocReview::where('application_id', request('application_id'))
        //   ->update([
        //     'application_status' => $verdict,
        //     'to_zopscon' => 'completed',
        //     'to_ADO' => 'completed',
        //     'to_head_gas' => 'completed',
        //     'to_team_lead' => 'completed',
        //     'to_staff' => 'completed'
        //   ]);

        //   // update job_assignments
        //   JobAssignment::where('application_id', request('application_id'))
        //   ->update([
        //     'job_application_status' => $verdict,
        //     'company_id' => request('company_id'),
        //     'approved_by' => Auth::user()->staff_id
        //   ]);

        //   // update completed job table
        // CustomHelpers::toCompletedJobsTable($request);

        // zopsconInbox::where('application_id', request('id'))->update([
        //   'to_outbox' => 'true'
        // ]);

        // }elseif (request('sub_category') == 'Renewal') {
        //   $dateIssued = Carbon::now();
        //   $dateEx = Carbon::now()->addYear();

        //   if(request('approve')){
        //     $verdict = 'Renewal Approved';
        //     $ltolicenseRenDetails = DB::table('lto_license_renewals')
        //     ->leftJoin('issued_lto_licenses', 'issued_lto_licenses.application_id', '=', 'lto_license_renewals.comp_license_id')
        //     ->first();

        //     // dd($ltolicenseRenDetails->comp_license_id);

        //     $k = 12 - $dateEx->month; // where k = the number of months remaining for that particular year

        //     $dateEx = $dateEx->addMonth($k);

        //     RenewedLtoLicense::create([
        //       'comp_license_id' => $ltolicenseRenDetails->comp_license_id,
        //       'company_id' => $ltolicenseRenDetails->company_id,
        //       'previous_date_issued' => $ltolicenseRenDetails->date_issued,
        //       'previous_expiry_date' => $ltolicenseRenDetails->expiry_date,
        //       'current_date_issued' => $dateIssued->toDateTimeString(),
        //       'current_expiry_date' => $dateEx->toDateTimeString()
        //     ]);


        //     // Update The current dates inside issued lto license
        //     IssuedLtoLicense::where('application_id', $ltolicenseRenDetails->comp_license_id)
        //     ->update([
        //       'date_issued' => $dateIssued->toDateTimeString(),
        //       'expiry_date' => $dateEx->toDateTimeString()
        //     ]);
        //   }elseif (request('decline')) {
        //     $verdict = 'Renewal Not Approved';
        //   }

        //   // update app_doc_review
        //   AppDocReview::where('application_id', request('application_id'))
        //   ->update([
        //     'application_status' => $verdict,
        //     'to_zopscon' => 'completed',
        //     'to_ADO' => 'completed',
        //     'to_head_gas' => 'completed',
        //     'to_team_lead' => 'completed',
        //     'to_staff' => 'completed'
        //   ]);

        //   // update job_assignments
        //   JobAssignment::where('application_id', request('application_id'))
        //   ->update([
        //     'job_application_status' => $verdict,
        //     'company_id' => request('company_id'),
        //     'approved_by' => Auth::user()->staff_id
        //   ]);

        //   // update completed job table
        // CustomHelpers::toCompletedJobsTable($request);

        // zopsconInbox::where('application_id', request('id'))->update([
        //   'to_outbox' => 'true'
        // ]);

        // }elseif (request('sub_category') == 'Take Over') {

        //   if(request('approve')){
        //     $verdict = 'Take Over Approved';
        //   }elseif (request('decline')) {
        //     $verdict = 'Take Over Not Issued';
        //   }

        //   $takeOverRev = TakeoverReviews::where('company_id', request('company_id'))->first();

        //   // update app_doc_review
        //   AppDocReview::where('application_id', request('application_id'))
        //   ->update([
        //     'application_status' => $verdict,
        //     'to_zopscon' => 'completed',
        //     'to_ADO' => 'completed',
        //     'to_head_gas' => 'completed',
        //     'to_team_lead' => 'completed',
        //     'to_staff' => 'completed'
        //   ]);

        //   // update app_doc_review new identities of gas plant
        //   AppDocReview::where('company_id', request('company_id'))
        //   ->update([
        //     'marketer_id' => $takeOverRev->marketer_id,
        //     'name_of_gas_plant' => $takeOverRev->new_name_of_gas_plant
        //   ]);

        //   // update company new identities
        //   Company::where('company_id', request('company_id'))
        //   ->update([
        //     'company_name' => $takeOverRev->new_name_of_gas_plant,
        //     'company_alias' => $takeOverRev->company_alias
        //   ]);

        //   // update job_assignments
        //   JobAssignment::where('application_id', request('application_id'))
        //   ->update([
        //     'job_application_status' => $verdict,
        //     'company_id' => request('company_id'),
        //     'approved_by' => Auth::user()->staff_id
        //   ]);

        //   // update take over inspection documents
        //   TakeoverInspectionDocuments::where('application_id', request('application_id'))
        //   ->update([
        //     'company_id' => request('company_id')
        //   ]);

        //   // update take over reviews
        //   TakeoverReviews::where('application_id', request('application_id'))
        //   ->update([
        //     'company_id' => request('company_id')
        //   ]);

        //   // update completed job table
        // CustomHelpers::toCompletedJobsTable($request);

        // zopsconInbox::where('application_id', request('id'))->update([
        //   'to_outbox' => 'true'
        // ]);
        // }

      return back();
    }


}


// $appDocReviewsLTO = DB::table('app_doc_reviews')
// ->rightJoin('issued_lto_licenses', 'issued_lto_licenses.company_id', '=', 'app_doc_reviews.company_id')
// ->select('app_doc_reviews.*','issued_lto_licenses.expiry_date')
// ->where([['application_status','LTO Issued'],['marketer_id', Auth::user()->staff_id]])
// ->get();    // get all application requests
