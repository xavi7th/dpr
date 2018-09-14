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
use DB;

use Auth;

class staffController extends Controller
{

  public function __construct(){
    $this->middleware('auth');
  }

  public function index(){
    // $appDocReviews = JobAssignment::where('staff_id', Auth::user()->staff_id)->get();    // Retrieve all application documents

    $appDocReviews = DB::table('job_assignments')
    ->join('app_doc_reviews', 'job_assignments.application_id', '=', 'app_doc_reviews.application_id')
    ->where('job_assignments.staff_id', Auth::user()->staff_id)
    ->get();

    // dd($appDocReviews);

    // Retrieve all assigned application documents
    $assignedApplications = JobAssignment::where([
      ['staff_id', Auth::user()->staff_id],
      ['job_application_status', 'Assigned']])->get();

    // Retrieve all pending application documents
    $pendingApplications = JobAssignment::where([
      ['staff_id', Auth::user()->staff_id],
      ['job_application_status', 'Pending']])->get();

    // Retrieve all approved application documents
    $approvedApplications = JobAssignment::where([
      ['staff_id', Auth::user()->staff_id],
      ['job_application_status', 'Approved']])->get();

    return view('backend.staff.staff_dashboard', compact('appDocReviews','pendingApplications','assignedApplications','approvedApplications'));
  }

  public function showCreateCompany(SiteSuitabilityInspectionDocuments $applicationID){
    return view('backend.staff.create_company', compact('applicationID'));
  }

  public function staffDocumentReview(SiteSuitabilityInspectionDocuments $applicationID){
    $applicationReview = AppDocReview::where('application_id', $applicationID->application_id)->first();    // retrieve application review
    $applicationStatus = JobAssignment::where('application_id', $applicationID->application_id)->first();    // retrieve application status
    $reportDocument = ReportDocument::where('application_id', $applicationID->application_id)->first();    // retrieve report document
    $applicationComments = ApplicationComments::with('staff')->where('application_id', $applicationID->application_id)->get();

    // check if the company that has this application has been registered into the system
    if($applicationReview->company_id != null){
      // redirect the staff to the document review area
      return view('backend.staff.view_application_docs', compact('applicationReview','applicationID','applicationStatus','reportDocument','applicationComments'));
    }else{
      // redirect the staff to register this company
      return view('backend.staff.create_company', compact('applicationReview','applicationStatus'));
      // return redirect('/create_company/'.$applicationID->id);
    }
  }

  public function createCompany(Request $request){

    // validate this form
    $this->validate(request(), [
      'comp_name' => 'required',
      'contract_type' => 'required',
      // 'state' => 'required',
      // 'lga' => 'required',
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
    || (request('town') == 'Select LGA')
  ){
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
        'job_application_status' => 'Started'
      ]);

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

      // update job assignment for this current application as document uploaded
      JobAssignment::where('application_id', request('application_id'))
      ->update([
        'job_application_status' => 'Report Submitted'
      ]);

      // return back
      return back();
    }else{
      // return back with errors
      return back();
    }
  }


}
