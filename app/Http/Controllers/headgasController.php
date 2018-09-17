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

use Auth;

class headgasController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }


  public function index(){
    $appDocReviews = AppDocReview::with('job_assignment')->where('to_head_gas','true')->get();    // get all application requests
    return view('backend.headgas.headgas_dashboard', compact('appDocReviews'));
  }

  public function headGasDocumentReview($id){
    $applicationReview = AppDocReview::with('job_assignment')->where('id', $id)->first();    // retrieve application review
    $staffs = Staff::where('role', 'staff')->get();    // retrieve all staffs
    $applicationStatus = JobAssignment::where('application_id', $applicationReview->application_id)->first();    // retrieve application status
    $applicationStatus = JobAssignment::where('application_id', $applicationReview->application_id)->first();    // retrieve application status
    $applicationComments = ApplicationComments::with('staff')->where('application_id', $applicationReview->application_id)->get();
    $reportDocument = ReportDocument::where('application_id', $applicationReview->application_id)->first();    // retrieve report document

    if($applicationReview->sub_category == "Site Suitability Inspection"){
      $applicationID = SiteSuitabilityInspectionDocuments::where('application_id', $applicationReview->application_id)->first();
    }elseif($applicationReview->sub_category == "ATC") {
      $applicationID = AtcInspectionDocuments::where('application_id', $applicationReview->application_id)->first();
    }

    return view('backend.headgas.view_application_docs', compact('applicationID','applicationReview','staffs','applicationStatus','reportDocument','applicationComments'));

  }

  public function forwardApplicationToTeamLead(Request $request){
    AppDocReview::where('application_id', request('application_id'))
    ->update([
      'to_team_lead' => 'true'
    ]);

    return back();
  }

  public function headGasApproves(Request $request){
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




}
