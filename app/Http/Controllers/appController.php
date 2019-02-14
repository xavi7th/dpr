<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Staff;
use App\ApplicationComments;
use App\AppDocReview;
use App\LtoInspectionDocument;
use App\AtcInspectionDocuments;
use App\AddonAtiInspectionDocument;
use App\AddonLtoInspectionDocument;
use App\CompletedJobs;
use App\JobAssignment;
use App\SiteSuitabilityInspectionDocuments;
use App\CatdLtoInspectionDocument;
use App\Inbox;
use App\Outbox;
use App\Company;
use Auth;
use DB;

use Carbon\Carbon;

class appController extends Controller
{

    public function __construct(){
      $this->middleware('auth');
    }

    public function index(){
      return view('partials.settings');
    }

    public function changePassword(Request $request){

      $this->validate(request(), [
        'password' => 'required|confirmed'
      ]);

      Staff::where('id', auth()->id())
      ->update([
        'password' => bcrypt(request('password'))
      ]);

      return redirect('/logout');
    }

    public function updateStaffRecords(Request $request){
      // dd($request);

      if(request('record_name') == 'null'){
        // send back to view with error messages
        return back();
      }else{
        Staff::where('id', auth()->id())
        ->update([
          request('record_name') => request('record_value')
        ]);

        return back();
      }
    }

    public function makeReportComment(Request $request){
      ApplicationComments::create([
        'staff_id' => Auth::user()->staff_id,
        'application_id' => request('application_id'),
        'comment' => request('comment'),
      ]);
      return back();
    }

    public function documentValid(Request $request){
      // dd($request);

      $applicationID = request('applicationid');
      $subCategory = request('subcategory');
      $valid = request('valid');
      $documentCheckName = request('documentcheck');

      if($subCategory == 'Site Suitability Inspection'){
        SiteSuitabilityInspectionDocuments::where('application_id', $applicationID)
        ->update([
          $documentCheckName => $valid
        ]);
      }elseif($subCategory == 'ATC'){
        AtcInspectionDocuments::where('application_id', $applicationID)
        ->update([
          $documentCheckName => $valid
        ]);
      }elseif($subCategory == 'LTO'){
        LtoInspectionDocument::where('application_id', $applicationID)
        ->update([
          $documentCheckName => $valid
        ]);
      } elseif ($subCategory == 'ADD-ON ATI') {
        AddonAtiInspectionDocument::where('application_id', $applicationID)
        ->update([
          $documentCheckName => $valid
        ]);
      } elseif ($subCategory == 'ADD-ON LTO') {
        AddonLtoInspectionDocument::where('application_id', $applicationID)
          ->update([
            $documentCheckName => $valid
          ]);
      } elseif ($subCategory == 'CAT-D LTO') {
        CatdLtoInspectionDocument::where('application_id', $applicationID)
          ->update([
            $documentCheckName => $valid
          ]);
      }
      

      return back();
    }

    public function viewAllSSI(){
      $appDocReviewsSSI = AppDocReview::where('application_status','Site Suitable')->get();    // get all application requests
      return view('backend.general.view_all_ssi', compact('appDocReviewsSSI'));
    }

    public function viewAllATC(Request $request){
      // dd($request);

      $type = request('val');

      if($type == 'lpg_atc'){
        $appDocReviewsATC = DB::table('issued_atc_licenses')
        ->join('app_doc_reviews', 'app_doc_reviews.application_id', '=', 'issued_atc_licenses.application_id')
        ->join('companies', 'companies.company_id', '=', 'issued_atc_licenses.company_id')
        ->select('issued_atc_licenses.*', 'app_doc_reviews.*', 'companies.*')
        ->where('application_type', 'LPG Retailer Outlets')
        ->where('application_status', 'ATC Issued')
        ->get();    // get all application requests
        // dd($appDocReviewsATC);
      }elseif($type == 'cng_atc'){
        $appDocReviewsATC = DB::table('issued_atc_licenses')
        ->join('app_doc_reviews', 'app_doc_reviews.application_id', '=', 'issued_atc_licenses.application_id')
        ->join('companies', 'companies.company_id', '=', 'issued_atc_licenses.company_id')
        ->select('issued_atc_licenses.*', 'app_doc_reviews.*', 'companies.*')
        ->where('application_type', 'CNG Retailer Outlets')
        ->where('application_status', 'ATC Issued')
        ->get();    // get all application requests

        // dd($appDocReviewsATC);
      }

      return view('backend.general.view_all_atc', compact('appDocReviewsATC'));
    }

    public function viewAllLTO(Request $request){
      // dd($request);

      $type = request('val');

      if($type == 'lpg_lto'){
        $appDocReviewsLTO = DB::table('app_doc_reviews')
        ->join('job_assignments', 'job_assignments.application_id', '=', 'app_doc_reviews.application_id')
          // ->join('issued_lto_licenses', 'issued_lto_licenses.company_id', '=', 'app_doc_reviews.company_id') // maybe this would be uncommented when we receive the license tatus From HQ
        ->where('application_type', 'LPG Retailer Outlets')
        ->where('sub_category', 'LTO')
        ->get();    // get all application requests

        // dd($appDocReviewsLTO);
      } elseif ($type == 'cng_lto'){
        $appDocReviewsLTO = DB::table('app_doc_reviews')
        ->join('job_assignments', 'job_assignments.application_id', '=', 'app_doc_reviews.application_id')
          // ->join('issued_lto_licenses', 'issued_lto_licenses.company_id', '=', 'app_doc_reviews.company_id') // maybe this would be uncommented when we receive the license tatus From HQ
        ->where('application_type', 'CNG Retailer Outlets')
        ->where('sub_category', 'LTO')
        ->get();    // get all application requests

        // dd($appDocReviewsLTO);
      }
    // this code below might still be important when license status are back from HQ
    
      // $appDocReviewsLTO = DB::table('issued_lto_licenses')
      // ->join('app_doc_reviews', 'app_doc_reviews.company_id', '=', 'issued_lto_licenses.company_id')
      // ->join('companies', 'companies.company_id', '=', 'app_doc_reviews.company_id')
      // ->where('application_status','LTO Issued')
      // ->get();    // get all application requests

      // dd($appDocReviewsLTO);
      return view('backend.general.view_all_lto', compact('appDocReviewsLTO'));
    }


    public function viewAllAddonLTO(Request $request){
      return view('backend.general.view_all_addonlto');
    }


    public function viewAllCatDLTO(Request $request){
      return view('backend.general.view_all_catdlto');
    }


    public function viewAllAddOnATI(Request $request){
      return view('backend.general.view_all_addonati');
    }

    public function viewAllLpgCngRenewal(Request $request){
      return view('backend.general.view_all_lpgcng_renewal');
    }

    public function viewAllCatdRenewal(Request $request){
      return view('backend.general.view_all_catd_renewal');
    }

    public function viewAllLpgCngTakeover(Request $request){
      return view('backend.general.view_all_lpgcng_takeover');
    }

    public function viewAllPressureTestRecords(){
      $pressureTestRecords = DB::table('app_doc_reviews')
      ->join('pressure_test_records', 'pressure_test_records.application_id', '=', 'app_doc_reviews.application_id')
      ->join('companies', 'companies.company_id', '=', 'app_doc_reviews.company_id')
      ->where('sub_category', 'Pressure Testing')
      ->select('app_doc_reviews.*', 'pressure_test_records.*', 'companies.*')
      ->get();

      // dd($pressureTestRecords);

      return view('backend.general.view_pressure_test_records', compact('pressureTestRecords'));
    }

    public function viewDocument($application_id){

      $applicationReview = AppDocReview::where('application_id', $application_id)->first();

      if($applicationReview->sub_category == 'ATC'){
        $applicationID = AtcInspectionDocuments::where('application_id', $application_id)->first();
        // $appDocReviewed = DB::table('app_doc_reviews')
        // ->join('issued_atc_licenses', 'issued_atc_licenses.company_id', '=', 'app_doc_reviews.company_id')
        // ->join('companies', 'companies.company_id', '=', 'app_doc_reviews.company_id')
        // ->where('app_doc_reviews.application_id', $application_id)
        // ->first();    // get all application requests
      }elseif ($applicationReview->sub_category == 'LTO') {
        $applicationID = LtoInspectionDocument::where('application_id', $application_id)->first();
        // $appDocReviewed = DB::table('app_doc_reviews')
        // ->join('issued_lto_licenses', 'issued_lto_licenses.company_id', '=', 'app_doc_reviews.company_id')
        // ->join('companies', 'companies.company_id', '=', 'app_doc_reviews.company_id')
        // ->where('app_doc_reviews.application_id', $application_id)
        // ->first();    // get all application requests
      }
      
      return view('backend.general.view_application_docs', compact('appDocReviewed','applicationReview','applicationID'));
    }

    public function viewDocumentPOST(Request $request){
      $this->documentURL = request('img');
      $this->reason = request('reason');

      dd('r');
    }

    public function assignTree(Request $request){
      // dd($request);
      $staffs = Staff::where('office', Auth::user()->office)->get();
      $applicationID = request('application_id');
      $appID = request('id'); // application index from app_doc_review
      $inboxID = request('inbox_id'); // application index from inbox
      
      return view('backend.general.assign_tree', compact('staffs','applicationID', 'appID', 'inboxID'));
    }

    public function viewDocumentGET(Request $request){
      // dd($request);

      $documentURL = request('pic');

      return view('backend.general.display_document', compact('documentURL'));
    }

    public function sendJob(Request $request){

      // dd($request);

      Inbox::where('application_id', request('appID'))->update([
        'to_outbox' => 'true'
      ]);

      // create updated job application access for the next user
      Inbox::create([
        'application_id' => request('appID'),
        'to' => request('staff_id'),
        'from' => Auth::user()->staff_id,
        'receiver_role' => request('role'),
        'sender_role' => Auth::user()->role,
        'office' => Auth::user()->office,
        'read' => 'false',
        'to_outbox' => 'false'
      ]);

      Outbox::create([
        'application_id' => request('appID'),
        'to' => request('staff_id')." (". request('role').")",
        'role' => Auth::user()->role,
        'office' => Auth::user()->office
      ]);

      if(Auth::user()->role == 'ZOPSCON'){
        return redirect('/zopscon');
      }elseif(Auth::user()->role == 'ADO'){
        return redirect('/ado');
      }elseif(Auth::user()->role == 'Head Gas M&G Lagos'){
        return redirect('/headgas');
      }elseif(Auth::user()->role == 'Team Lead'){

        $thisJob = JobAssignment::where('application_id', request('application_id'))->first();

        if(optional($thisJob)->job_application_status == 'Started'){
          return redirect('/teamlead');
        }else{
          JobAssignment::updateOrCreate(
            ['application_id' => request('application_id')],
            [
              'application_id' => request('application_id'),
              'assigned_by' => Auth::user()->staff_id,
              'staff_id' => request('staff_id'),
              'job_application_status' => 'Assigned'
            ]
          );
        }

        return redirect('/teamlead');

      }elseif(Auth::user()->role == 'Staff'){
        return redirect('/staff');
      }elseif (Auth::user()->role == 'Manager Gas') {
        return redirect('/managergas');
      }
    }











    public function sendJobToHQ(Request $request){
      // dd($request);
      // update job_assignments
      JobAssignment::where('application_id', request('application_id'))
      ->update([
        'job_application_status' => 'Application Sent to HQ',
        'company_id' => request('company_id')
      ]);

      // update lto_inspection_document
      LtoInspectionDocument::where('application_id', request('application_id'))
      ->update([
        'company_id' => request('company_id')
      ]);

      // update inbox
      Inbox::where('id', request('inboxID'))->update([
        'to_outbox' => 'true'
      ]);

      // create updated job application access for the next user .......
      // we would need to grab the details of the headgas from HQ and office location in order for this application
      // to be forwared but for now we use a dummy

      

      $HeadGas = Staff::where([
        ['office', 'HQ'],
        ['role', 'Head Gas M&G Lagos']
      ])->first();


      Inbox::create([
        'application_id' => request('id'),
        'to' => request('staff_id'),
        'from' => Auth::user()->staff_id,
        'receiver_role' => $HeadGas->role,
        'sender_role' => Auth::user()->role,
        'office' => $HeadGas->office,
        'read' => 'false',
        'to_outbox' => 'false'
      ]);

      $headgasHQ = $HeadGas->staff_id;
      $headgasHQRole = $HeadGas->role;

      Outbox::create([
        'application_id' => request('id'),
        'to' => $headgasHQ . " (" . $headgasHQRole . ")",
        'role' => Auth::user()->role,
        'office' => Auth::user()->office
      ]);

      if (Auth::user()->role == 'ZOPSCON') {
        return redirect('/zopscon');
      } elseif (Auth::user()->role == 'ADO') {
        return redirect('/ado');
      } elseif (Auth::user()->role == 'Head Gas M&G Lagos') {
        return redirect('/headgas');
      } elseif (Auth::user()->role == 'Manager Gas') {
        return redirect('/managergas');
      }
      
    }
















//LPG-CNG-ROUTES
    public function lpgCngDashboard(){return view('backend.general.lpg_cng_dashboard');}



//GAS-PROCESSING-FACILITIES-ROUTES
    public function gasProcessingFacilitiesDashboard(){return view('backend.general.gas_processing_facilities_dashboard');}
    public function custodyTransferMetersSearch(){return view('backend.general.custody_transfer_meters_search');}
    public function flareMetersSearch(){return view('backend.general.flare_meters_search');}
    public function fuelMetersSearch(){return view('backend.general.fuel_meters_search');}
    public function productionAllocationTransferMetersSearch(){return view('backend.general.production_allocation_transfer_meters_search');}




//GAS-PIPELINES-ROUTES
    public function gasPipelinesDashboard(){return view('backend.general.gas_pipelines_dashboard');}
    public function gasPipelinesPTSSearch(){return view('backend.general.gas_pipelines_pts_search');}
    public function gasPipelinesOPLLSearch(){return view('backend.general.gas_pipelines_opll_search');}
    public function gasPipelinesHydroTestingSearch(){return view('backend.general.gas_pipelines_hydrotesting_search');}
    public function gasPipelinesPiggingSearch(){return view('backend.general.gas_pipelines_pigging_search');}

    






//PROJECT-MONITORING-ROUTES
    public function projectMonitoringDashboard(){return view('backend.general.project_monitoring_dashboard');}

    public function projectMonitoringFeedCreateForm(){return view('backend.general.project_monitoring_feed_create');}

    public function projectMonitoringFeedEditForm(){return view('backend.general.project_monitoring_feed_edit');}

    public function projectMonitoringFeedSearch(){
      $users = factory(\App\User::class, 350)->make();
      return view('backend.general.project_monitoring_feed_search', compact('users'));
    }




    public function projectMonitoringMilestoneCreateForm(){return view('backend.general.project_monitoring_milestone_create');}

    public function projectMonitoringMilestoneEditForm(){return view('backend.general.project_monitoring_milestone_edit');}

    public function projectMonitoringMilestoneSearch(){return view('backend.general.project_monitoring_milestone_search');}




    public function projectMonitoringContinousCreateForm(){return view('backend.general.project_monitoring_continous_create');}

    public function projectMonitoringContinousEditForm(){return view('backend.general.project_monitoring_continous_edit');}

    public function projectMonitoringContinousSearch(){return view('backend.general.project_monitoring_continous_search');}




    public function projectMonitoringPermitAndConsentCreateForm(){return view('backend.general.project_monitoring_permit_and_consent_create');}

    public function projectMonitoringPermitAndConsentEditForm(){return view('backend.general.project_monitoring_permit_and_consent_edit');}

    public function projectMonitoringPermitAndConsentSearch(){return view('backend.general.project_monitoring_permit_and_consent_search');}

















    public function gasProductionUtilizationDashboard(){return view('backend.general.gas_production_utilization_dashboard');}

















    public function gasProductionExportOperationsDashboard(){return view('backend.general.gas_production_export_operations_dashboard');}
















    public function gasSubsurfaceDashboard(){return view('backend.general.gas_sub_surface_dashboard');}
















    public function gasDiaryDashboard(){return view('backend.general.gas_diary_dashboard');}
















    public function inspectionDashboard(){return view('backend.general.inspection_dashboard');}



    public function projectMonitoringFeedCreate(Request $request){
      dd($request);
    }


}