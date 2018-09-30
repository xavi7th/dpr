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
use Carbon\Carbon;

use Auth;
use DB;

class teamleadController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }

  public function index(){
    $appDocReviews = AppDocReview::with('job_assignment')->where('to_team_lead','true')->get();    // get all application requests
    $appDocReviewsPending = AppDocReview::with('job_assignment')->where('to_team_lead','received')->get();    // get all pending application requests
    return view('backend.teamlead.teamlead_dashboard', compact('appDocReviews','appDocReviewsPending'));
  }

  public function teamleadPending(){
    $appDocReviews = AppDocReview::with('job_assignment')->where('to_team_lead','true')->get();    // get all application requests
    $appDocReviewsPending = AppDocReview::with('job_assignment')->where('to_team_lead','received')->get();    // get all pending application requests
    return view('backend.teamlead.teamlead_pending', compact('appDocReviews','appDocReviewsPending'));
  }

  public function teamleadDocumentReview($id){
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
    }

    // dd($applicationStatus);
    return view('backend.teamlead.view_application_docs', compact('applicationID','applicationReview','staffs','applicationStatus','reportDocument','applicationComments'));
  }

  public function teamleadDocumentAssign(Request $request){

    AppDocReview::where('application_id', request('application_id'))
    ->update([
      'to_team_Lead' => 'forwarded',
      'to_staff' => 'true'
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

    JobsTimeline::create([
      'application_id' => request('application_id'),
      'from' => Auth::user()->staff_id,
      'to' => request('staff_id')
    ]);

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

    // record this application inside site suitability reports
    SiteSuitabilityReports::create([
      'application_id' => request('application_id'),
      'staff_id' => request('staff_id'),
      'company_id' => request('company_id'),
      'marketer_id' => request('marketer_id'),
      'report_location' => request('report_url')
    ]);


    return redirect('/teamlead');
  }

  public function upToHeadGas(Request $request){

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

    }elseif(request('sendToStaff')) {

      // send this application request back to staff
      AppDocReview::where('application_id', request('application_id'))
      ->update([
        'to_staff' => 'received',
        'to_team_lead' => 'forwarded'
      ]);

      JobAssignment::updateOrCreate([
        'application_id' => request('application_id')
      ],
      [
        'job_application_status' => 'Assigned'
      ]);

      JobsTimeline::create([
        'application_id' => request('application_id'),
        'from' => Auth::user()->staff_id,
        'to' => request('staff_id')
      ]);

    }



    return redirect('/teamlead');

  }

}
