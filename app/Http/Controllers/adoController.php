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

class adoController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }


  public function index(){
    $appDocReviews = AppDocReview::with('job_assignment')->where('to_ado','true')->get();    // get all application requests
    return view('backend.ado.ado_dashboard', compact('appDocReviews'));
  }

  public function adoDocumentReview($id){
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

    return view('backend.ado.view_application_docs', compact('applicationID','applicationReview','staffs','applicationStatus','reportDocument','applicationComments'));

  }
}
