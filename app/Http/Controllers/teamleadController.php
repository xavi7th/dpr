<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\AppDocReview;
use App\JobAssignment;
use App\Staff;
use App\ReportDocument;
use App\ApplicationComments;
use App\SiteSuitabilityInspectionDocuments;
use App\SiteSuitabilityReports;

class teamleadController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }

  public function index(){
    $appDocReviews = AppDocReview::with('job_assignment')->get();    // Retrieve all application documents
    $pendingApplications = AppDocReview::where('application_status', 'Application Pending')->get();   // Retrieve all pending application documents
    $assignedApplications = JobAssignment::where('job_application_status', 'Assigned')->get();   // Retrieve all assigned application documents
    $startedApplications = JobAssignment::where('job_application_status', 'Started')->get();   // Retrieve all started application documents
    // $approvedApplications = JobAssignment::where('job_application_status', 'Approved')->get();   // Retrieve all approved application documents
    return view('backend.teamlead.teamlead_dashboard', compact('appDocReviews','pendingApplications','assignedApplications','approvedApplications','startedApplications'));
  }

  public function teamleadDocumentReview(SiteSuitabilityInspectionDocuments $applicationID){
    $applicationReview = AppDocReview::with('job_assignment')->where('application_id', $applicationID->application_id)->first();    // retrieve application review
    $applicationStatus = JobAssignment::where('application_id', $applicationID->application_id)->first();    // retrieve application status
    $applicationComments = ApplicationComments::with('staff')->where('application_id', $applicationID->application_id)->get();
    $reportDocument = ReportDocument::where('application_id', $applicationID->application_id)->first();    // retrieve report document
    $staffs = Staff::where('role', 'staff')->get();    // retrieve all staffs

    // dd($applicationStatus);
    return view('backend.teamlead.view_application_docs', compact('applicationID','applicationReview','staffs','applicationStatus','reportDocument','applicationComments'));
  }

  public function teamleadDocumentAssign(Request $request){

    JobAssignment::updateOrCreate([
      'application_id' => request('application_id')
    ],
    [
      'application_id' => request('application_id'),
      'staff_id' => request('staff_id'),
      'job_application_status' => 'Assigned'
    ]);

    return redirect('/teamlead');
  }

  public function teamleadDecideSSI(Request $request){
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
      'job_application_status' => $verdict
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
