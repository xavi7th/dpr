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
use App\headgasInbox;
use App\teamleadInbox;
use App\headgasOutbox;
use App\adoInbox;
use Carbon\Carbon;

use Auth;
use DB;

class headgasController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }


  public function index(){
    $inbox = headgasInbox::with('app_doc_review')->where('to_outbox', 'false')->latest()->get();
    // dd($inbox);
    $inboxUnreadCount = headgasInbox::where('read', 'false')->get();
    $outboxUnreadCount = headgasOutbox::all();
    $appDocReviews = AppDocReview::with('job_assignment')->where('to_head_gas','true')->latest()->get();    // get all application request
    $appDocReviewsPending = AppDocReview::with('job_assignment')->where('to_head_gas','received')->get();    // get all pending application requestss
    $appDocReviewsCompleted = AppDocReview::with('job_assignment')->where('to_head_gas','completed')->get();    // get all pending application requests
    $appDocReviewsOutbox = JobsTimeline::with(['app_doc_rev','job_assignment'])->where('from', Auth::user()->staff_id)->latest()->get();
    return view('backend.headgas.headgas_dashboard', compact('appDocReviews','appDocReviewsPending','appDocReviewsCompleted','appDocReviewsOutbox','inbox','inboxUnreadCount','outboxUnreadCount'));
  }

  public function headgasPending(){
    $appDocReviews = AppDocReview::with('job_assignment')->where('to_head_gas','true')->get();    // get all application requests
    $appDocReviewsPending = AppDocReview::with('job_assignment')->where('to_head_gas','received')->latest()->get();    // get all pending application requests
    $appDocReviewsCompleted = AppDocReview::with('job_assignment')->where('to_head_gas','completed')->get();    // get all pending application requests
    $appDocReviewsOutbox = JobsTimeline::with(['app_doc_rev','job_assignment'])->where('from', Auth::user()->staff_id)->latest()->get();
    return view('backend.headgas.headgas_pending', compact('appDocReviews','appDocReviewsPending','appDocReviewsCompleted','appDocReviewsOutbox'));
  }

  public function headgasOutbox(){
    $outbox = headgasOutbox::with('app_doc_review')->latest()->get();
    // dd($outbox);
    $inboxUnreadCount = headgasInbox::where('read', 'false')->get();
    $outboxUnreadCount = headgasOutbox::all();
    $appDocReviews = AppDocReview::with('job_assignment')->where('to_head_gas','true')->get();    // get all application requests
    $appDocReviewsPending = AppDocReview::with('job_assignment')->where('to_head_gas','received')->get();    // get all pending application requests
    $appDocReviewsCompleted = AppDocReview::with('job_assignment')->where('to_head_gas','completed')->get();    // get all pending application requests
    $appDocReviewsOutbox = JobsTimeline::with(['app_doc_rev','job_assignment'])->where('from', Auth::user()->staff_id)->latest()->get();

    return view('backend.headgas.headgas_outbox', compact('appDocReviews','appDocReviewsPending','appDocReviewsCompleted','appDocReviewsOutbox','outbox','inboxUnreadCount','outboxUnreadCount'));
  }

  public function headgasCompleted(){
    $appDocReviews = AppDocReview::with('job_assignment')->where('to_head_gas','true')->get();    // get all application requests
    $appDocReviewsPending = AppDocReview::with('job_assignment')->where('to_head_gas','received')->latest()->get();    // get all pending application requests
    $appDocReviewsCompleted = AppDocReview::with('job_assignment')->where('to_head_gas','completed')->latest()->get();    // get all pending application requests
    $appDocReviewsOutbox = JobsTimeline::with(['app_doc_rev','job_assignment'])->where('from', Auth::user()->staff_id)->latest()->get();
    return view('backend.headgas.headgas_completed', compact('appDocReviews','appDocReviewsPending','appDocReviewsCompleted','appDocReviewsOutbox'));
  }

  public function headGasDocumentReview($id){
    headgasInbox::where('application_id', $id)->update([
      'read' => 'true'
    ]);
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

    return view('backend.headgas.view_application_docs', compact('applicationID','applicationReview','staffs','applicationStatus','reportDocument','applicationComments'));

  }

  public function forwardApplicationToTeamLead(Request $request){
    AppDocReview::where('application_id', request('application_id'))
    ->update([
      'to_head_gas' => 'forwarded',
      'to_team_lead' => 'true'
    ]);

    $to = Staff::where('role', 'Team Lead')->first();

    JobsTimeline::create([
      'application_id' => request('application_id'),
      'from' => Auth::user()->staff_id,
      'to' => $to->staff_id
    ]);

    headgasInbox::where('application_id', request('id'))->update([
      'to_outbox' => 'true'
    ]);

    // add this application document to the headgas outbox
    headgasOutbox::create([
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

    return redirect('/headgas');
  }

  public function headGasApproves(Request $request){
    // dd($request);
    $verdict = "";

    if(request('sendToADO')){
      // send this application request to ADO
      AppDocReview::where('application_id', request('application_id'))
      ->update([
        'to_ADO' => 'received',
        'to_head_gas' => 'forwarded'
      ]);

      $to = Staff::where('role', 'ADO')->first();

      JobsTimeline::create([
        'application_id' => request('application_id'),
        'from' => Auth::user()->staff_id,
        'to' => $to->staff_id
      ]);
    }elseif(request('sendToTeamLead')){
      // send this application request back to team lead
      AppDocReview::where('application_id', request('application_id'))
      ->update([
        'to_team_lead' => 'received',
        'to_head_gas' => 'forwarded'
      ]);

      $to = Staff::where('role', 'Team Lead')->first();

      JobsTimeline::create([
        'application_id' => request('application_id'),
        'from' => Auth::user()->staff_id,
        'to' => $to->staff_id
      ]);
    }else{
      if(request('sub_category') == 'Site Suitability Inspection'){
        if(request('approve')){
          $verdict = 'Site Suitable';
          // record this application inside site suitability reports
          SiteSuitabilityReports::create([
            'application_id' => request('application_id'),
            'staff_id' => request('staff_id'),
            'company_id' => request('company_id'),
            'marketer_id' => request('marketer_id'),
            'report_location' => request('report_url')
          ]);
        }elseif (request('decline')) {
          $verdict = 'Site Not Suitable';
        }

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

        // update job_assignments
        JobAssignment::where('application_id', request('application_id'))
        ->update([
          'job_application_status' => $verdict,
          'approved_by' => Auth::user()->staff_id
        ]);




      }elseif (request('sub_category') == 'ATC') {
        $dateIssued = Carbon::now();
        $expiryDate = Carbon::now()->addMonths(6);
        if(request('approve')){
          $verdict = 'ATC Issued';
          // update or create a record for this application inside issued atc_licences table
          IssuedAtcLicense::create([
            'application_id' => request('application_id'),
            'company_id' => request('company_id'),
            'staff_id' => request('staff_id'),
            'date_issued' => $dateIssued->toDateTimeString(),
            'expiry_date' => $expiryDate->toDateTimeString(),
          ]);
        }elseif (request('decline')) {
          $verdict = 'ATC Not Issued';
        }

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

        // update job_assignments
        JobAssignment::where('application_id', request('application_id'))
        ->update([
          'job_application_status' => $verdict,
          'company_id' => request('company_id'),
          'approved_by' => Auth::user()->staff_id
        ]);


      }elseif (request('sub_category') == 'LTO') {
        $dateIssued = Carbon::now();
        $expiryDate = Carbon::now()->addYears(2);
        if(request('approve')){
          $verdict = 'LTO Issued';

          // update or create a record for this application inside issued atc_licences table
          IssuedLtoLicense::create([
            'application_id' => request('application_id'),
            'company_id' => request('company_id'),
            'staff_id' => request('staff_id'),
            'date_issued' => $dateIssued->toDateTimeString(),
            'expiry_date' => $expiryDate->toDateTimeString(),
            'report_url' => request('report_url')
          ]);

          // lto inspection document
          LtoInspectionDocument::where('application_id', request('application_id'))
          ->update([
            'company_id' => request('company_id')
          ]);
        }elseif (request('decline')) {
          $verdict = 'LTO Not Issued';
        }

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

        // update job_assignments
        JobAssignment::where('application_id', request('application_id'))
        ->update([
          'job_application_status' => $verdict,
          'company_id' => request('company_id'),
          'approved_by' => Auth::user()->staff_id
        ]);

      }elseif (request('sub_category') == 'Renewal') {
        $dateIssued = Carbon::now();
        $dateEx = Carbon::now()->addYear();

        if(request('approve')){
          $verdict = 'Renewal Approved';
          $ltolicenseRenDetails = DB::table('lto_license_renewals')
          ->leftJoin('issued_lto_licenses', 'issued_lto_licenses.application_id', '=', 'lto_license_renewals.comp_license_id')
          ->first();

          // dd($ltolicenseRenDetails->comp_license_id);

          $k = 12 - $dateEx->month; // where k = the number of months remaining for that particular year

          $dateEx = $dateEx->addMonth($k);

          RenewedLtoLicense::create([
            'comp_license_id' => $ltolicenseRenDetails->comp_license_id,
            'company_id' => $ltolicenseRenDetails->company_id,
            'previous_date_issued' => $ltolicenseRenDetails->date_issued,
            'previous_expiry_date' => $ltolicenseRenDetails->expiry_date,
            'current_date_issued' => $dateIssued->toDateTimeString(),
            'current_expiry_date' => $dateEx->toDateTimeString()
          ]);


          // Update The current dates inside issued lto license
          IssuedLtoLicense::where('application_id', $ltolicenseRenDetails->comp_license_id)
          ->update([
            'date_issued' => $dateIssued->toDateTimeString(),
            'expiry_date' => $dateEx->toDateTimeString()
          ]);
        }elseif (request('decline')) {
          $verdict = 'Renewal Not Approved';
        }

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

        // update job_assignments
        JobAssignment::where('application_id', request('application_id'))
        ->update([
          'job_application_status' => $verdict,
          'company_id' => request('company_id'),
          'approved_by' => Auth::user()->staff_id
        ]);

      }elseif (request('sub_category') == 'Take Over') {

        if(request('approve')){
          $verdict = 'Take Over Approved';
        }elseif (request('decline')) {
          $verdict = 'Take Over Not Issued';
        }

        $takeOverRev = TakeoverReviews::where('company_id', request('company_id'))->first();

        // update app_doc_review verdict for this application
        AppDocReview::where('application_id', request('application_id'))
        ->update([
          'application_status' => $verdict,
          'to_zopscon' => 'completed',
          'to_ADO' => 'completed',
          'to_head_gas' => 'completed',
          'to_team_lead' => 'completed',
          'to_staff' => 'completed'
        ]);

        // update app_doc_review new identities of gas plant
        AppDocReview::where('company_id', request('company_id'))
        ->update([
          'marketer_id' => $takeOverRev->marketer_id,
          'name_of_gas_plant' => $takeOverRev->new_name_of_gas_plant
        ]);

        // update company new identities
        Company::where('company_id', request('company_id'))
        ->update([
          'company_name' => $takeOverRev->new_name_of_gas_plant,
          'company_alias' => $takeOverRev->company_alias
        ]);

        // update job_assignments
        JobAssignment::where('application_id', request('application_id'))
        ->update([
          'job_application_status' => $verdict,
          'company_id' => request('company_id'),
          'approved_by' => Auth::user()->staff_id
        ]);

        // update take over inspection documents
        TakeoverInspectionDocuments::where('application_id', request('application_id'))
        ->update([
          'company_id' => request('company_id')
        ]);

        // update take over reviews
        TakeoverReviews::where('application_id', request('application_id'))
        ->update([
          'company_id' => request('company_id')
        ]);
      }
    }
    return redirect('/headgas');
  }

  public function upToAdo(Request $request){

    // dd($request);

    if(request('sendToHeadGas')){

      // send this application request back to head gas
      AppDocReview::where('application_id', request('application_id'))
      ->update([
        'to_head_gas' => 'received',
        'to_team_lead' => 'forwarded'
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




}
