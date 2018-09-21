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
use App\LtoInspectionDocument;
use Carbon\Carbon;

use Auth;

class zopsconController extends Controller
{

    public function __construct(){
      $this->middleware('auth');
    }


    public function index(){
      $appDocReviews = AppDocReview::with('job_assignment')->where('to_zopscon','true')->get();    // get all application requests
      return view('backend.zopscon.zopscon_dashboard', compact('appDocReviews'));
    }

    public function zopsconDocumentReview($id){
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
      }elseif($applicationReview->sub_category == "LTO") {
        $applicationID = LtoInspectionDocument::where('application_id', $applicationReview->application_id)->first();
      }

      return view('backend.zopscon.view_application_docs', compact('applicationID','applicationReview','staffs','applicationStatus','reportDocument','applicationComments'));

    }

    public function forwardApplicationToADO(Request $request){
      AppDocReview::where('application_id', request('application_id'))
      ->update([
        'to_ADO' => 'true'
      ]);

      return back();
    }

    public function zopsconApproves(Request $request){
      // dd($request);
      $verdict = "";

      if(request('approve')){
        $verdict = 'Site Suitable';
      }elseif (request('decline')) {
        $verdict = 'Site Not Suitable';
      }

      if(request('sub_category') == 'Site Suitability Inspection'){
        if(request('approve')){
          $verdict = 'Site Suitable';
        }elseif (request('decline')) {
          $verdict = 'Site Not Suitable';
        }

        // record this application inside site suitability reports
        SiteSuitabilityReports::create([
          'application_id' => request('application_id'),
          'staff_id' => request('staff_id'),
          'company_id' => request('company_id'),
          'marketer_id' => request('marketer_id'),
          'report_location' => request('report_url')
        ]);
      }elseif (request('sub_category') == 'ATC') {
        $dateIssued = Carbon::now();
        $expiryDate = Carbon::now()->addMonths(6);
        if(request('approve')){
          $verdict = 'ATC Issued';
        }elseif (request('decline')) {
          $verdict = 'ATC Not Issued';
        }

        // update or create a record for this application inside issued atc_licences table
        IssuedAtcLicense::create([
          'application_id' => request('application_id'),
          'company_id' => request('company_id'),
          'staff_id' => request('staff_id'),
          'date_issued' => $dateIssued->toDateTimeString(),
          'expiry_date' => $expiryDate->toDateTimeString(),
        ]);
      }elseif (request('sub_category') == 'LTO') {
        $dateIssued = Carbon::now();
        $expiryDate = Carbon::now()->addYears(2);
        if(request('approve')){
          $verdict = 'LTO Issued';
        }elseif (request('decline')) {
          $verdict = 'LTO Not Issued';
        }
        // update or create a record for this application inside issued atc_licences table
        IssuedLtoLicense::create([
          'application_id' => request('application_id'),
          'company_id' => request('company_id'),
          'staff_id' => request('staff_id'),
          'date_issued' => $dateIssued->toDateTimeString(),
          'expiry_date' => $expiryDate->toDateTimeString(),
        ]);

        // lto inspection document
        LtoInspectionDocument::where('application_id', request('application_id'))
        ->update([
          'company_id' => request('company_id')
        ]);
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



      return back();
    }


}
