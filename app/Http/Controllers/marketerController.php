<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\AppDocReview;
use DB;
use App\Staff;
use Auth;
use App\SiteSuitabilityInspectionDocuments;
use App\AtcInspectionDocuments;
use App\LtoInspectionDocument;
use App\CatdLtoApplicationExtention;
use App\IssuedLtoLicense;
use App\LtoLicenseRenewal;
use App\TakeoverReviews;
use App\PressureTestRecords;
use App\Company;
use App\TakeoverInspectionDocuments;
use App\AddonAtiInspectionDocument;
use App\AddonLtoInspectionDocument;
use App\CatdLtoInspectionDocument;
use App\IssuedAtcLicense;
use App\Inbox;
use Storage;
use Carbon\Carbon;

class marketerController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }




  public function index(){
    // $appDocReviews = AppDocReview::where('marketer_id', Auth::user()->staff_id)->get();
    return view('backend.marketer.marketer_dashboard');
  }




  public function marketerAppDocReview(){
    $appDocReviews = AppDocReview::with(['company','issued_lto_licenses'])->where('marketer_id', Auth::user()->staff_id)
    // ->where('application_status', 'Application Pending')
    // ->orWhere('application_status', 'Not Submitted')
    // ->orWhere('application_status', 'ATC Not Issued')
    // ->orWhere('application_status', 'LTO Not Issued')
    // $applicationComments = ApplicationComments::with('staff')->where('application_id', $applicationReview->application_id)->get();
    ->latest()->get();

    // dd($appDocReviews);
    return view('backend.marketer.marketer_app_doc_review', compact('appDocReviews'));
  }



  public function applicationDocumentReview(){
    return view('backend.marketer.application_document_review');
  }




  public function LPGRetailerOutletView(){
    return view('backend.marketer.lpg_retailer_outlet_applications');
  }




  public function applyForSSIGet(){
    $companies = Company::where('marketer_id', Auth::user()->staff_id)->get();

    return view('backend.marketer.apply_for_site_suitability_inspection', compact('companies'));
  }


  public function applyForATCGet(){
    $companies = Company::where('marketer_id', Auth::user()->staff_id)->get();
    return view('backend.marketer.apply_for_atc_get', compact('companies'));
  }

  public function applyForATIGet(){
    $companies = Company::where('marketer_id', Auth::user()->staff_id)->get();
    return view('backend.marketer.apply_for_ati_get', compact('companies'));
  }

  public function applyForAddonLTOGet(){
    $companies = Company::where('marketer_id', Auth::user()->staff_id)->get();
    return view('backend.marketer.apply_for_addon_lto_get', compact('companies'));
  }

  public function applyForCatDLTOGet(){
    $companies = Company::where('marketer_id', Auth::user()->staff_id)->get();
    return view('backend.marketer.apply_for_catd_lto_get', compact('companies'));
  }


  public function applyForLTOGet(){
    $companies = Company::where('marketer_id', Auth::user()->staff_id)->get();
    return view('backend.marketer.apply_for_lto_get', compact('companies'));
  }


  public function applyForLTORenewalGet(){
    $companies = Company::where('marketer_id', Auth::user()->staff_id)->get();
    return view('backend.marketer.apply_for_lto_renewal_get', compact('companies'));
  }


  public function applyForTakeOverGet(){
    $companies = Company::where('marketer_id', Auth::user()->staff_id)->get();
    return view('backend.marketer.apply_for_takeover_get', compact('companies'));
  }



  public function applyForPressureTestGet(){
    $companies = Company::where('marketer_id', Auth::user()->staff_id)->get();
    return view('backend.marketer.apply_for_pressure_test_get', compact('companies'));
  }


  public function applyForPTS(){
    $companies = Company::where('marketer_id', Auth::user()->staff_id)->get();
    return view('backend.marketer.gas_pipelines_pts_create', compact('companies'));
  }

  
  public function applyForOPLL(){
    $companies = Company::where('marketer_id', Auth::user()->staff_id)->get();
    return view('backend.marketer.gas_pipelines_opll_create', compact('companies'));
  }


  public function applyForHydroTesting(){
    $companies = Company::where('marketer_id', Auth::user()->staff_id)->get();
    return view('backend.marketer.apply_for_hydrotesting', compact('companies'));
  }



  public function applyForPigging(){
    $companies = Company::where('marketer_id', Auth::user()->staff_id)->get();
    return view('backend.marketer.apply_for_pigging', compact('companies'));
  }


  public function custodyTransferMeters(){
    $companies = Company::where('marketer_id', Auth::user()->staff_id)->get();
    return view('backend.marketer.custody_transfer_meters_create', compact('companies'));
  }


  public function flareMeters(){
    $companies = Company::where('marketer_id', Auth::user()->staff_id)->get();
    return view('backend.marketer.flare_meters_create', compact('companies'));
  }


  public function fuelMeters(){
    $companies = Company::where('marketer_id', Auth::user()->staff_id)->get();
    return view('backend.marketer.fuel_meters_create', compact('companies'));
  }


  public function productionAllocationTransferMeters(){
    $companies = Company::where('marketer_id', Auth::user()->staff_id)->get();
    return view('backend.marketer.production_allocation_transfer_meters_create', compact('companies'));
  }





  public function getSiteSuitablityInspectionView(){
    return view('backend.marketer.requirement_site_suitability_inspection');
  }



  public function getATCRequirementView(){
    return view('backend.marketer.requirement_atc');
  }



  public function getATIRequirementView(){
    return view('backend.marketer.requirement_ati');
  }



  public function getLTORequirementView(){
    return view('backend.marketer.requirement_lto');
  }



  public function getAddonLTORequirementView(){
    return view('backend.marketer.requirement_addon_lto');
  }


  public function getCatDLTORequirementView(){
    return view('backend.marketer.requirement_catd_lto');
  }



  public function getTakeoverRequirementView(){
    return view('backend.marketer.requirement_takeover');
  }




  public function showDocumentsRequirement($id){
    $applicationReview = AppDocReview::with('company')->where('id', $id)->first();

    $theCompany = Company::where('company_id', $applicationReview->company_id)->first();

    $licenseDetail = IssuedLtoLicense::where('application_id', $applicationReview->application_id)->first();
    $licenseRenewalDetail = AppDocReview::where([['company_id', $applicationReview->company_id],['sub_category','Renewal'],['application_status','Application Pending']])
    ->first();

    

    //get pressure test record to check if it has been done for this facility

    $pressureTestRecord = PressureTestRecords::where([
      ['facility_name', $applicationReview->name_of_gas_plant],
      ['company_name', $applicationReview->company_id],
      ['due_date', '>', Carbon::now()]
      ])->first();

    // $pressureTestRecord = PressureTestRecords::where([
    //   ['facility_name', 'ages gas'],
    //   ['company_name', 'DPRCOMP00003'],
    //   ['due_date', '>', Carbon::now()]
    // ])->first();

    // dd($pressureTestRecord);

    if($applicationReview->sub_category == "Site Suitability Inspection"){
      $applicationID = SiteSuitabilityInspectionDocuments::where('application_id', $applicationReview->application_id)->first();
    }
    elseif($applicationReview->sub_category == "ATC") {
      $applicationID = AtcInspectionDocuments::where('application_id', $applicationReview->application_id)->first();
    }
    elseif($applicationReview->sub_category == "ADD-ON ATI") {
      $applicationID = AddonAtiInspectionDocument::where('application_id', $applicationReview->application_id)->first();
    }
    elseif($applicationReview->sub_category == "ADD-ON LTO") {
      $applicationID = AddonLtoInspectionDocument::where('application_id', $applicationReview->application_id)->first();
    }
    elseif($applicationReview->sub_category == "LTO") {
      $applicationID = LtoInspectionDocument::where('application_id', $applicationReview->application_id)->first();
    }
    elseif($applicationReview->sub_category == "CAT-D LTO") {
      $applicationID = CatdLtoInspectionDocument::with('catdLtoApplicationExtention')->where('application_id', $applicationReview->application_id)->first();
    }elseif($applicationReview->sub_category == "Renewal") {
      // $applicationID = DB::table('lto_inspection_documents')
      // ->Join('lto_license_renewals', 'lto_license_renewals.comp_license_id', '=', 'lto_inspection_documents.application_id')
      // // ->where()
      // ->first();

      $thisApplicationRenewalDetails = LtoLicenseRenewal::where('application_id', $applicationReview->application_id)->first();

      $applicationID = LtoInspectionDocument::where('application_id', $applicationReview->application_id)->first();

      // dd($thisApplicationRenewalDetails);
    }elseif($applicationReview->sub_category == "Take Over") {
      $applicationID = DB::table('takeover_inspection_documents')
      ->Join('takeover_reviews', 'takeover_reviews.application_id', '=', 'takeover_inspection_documents.application_id')
      // ->where()
      ->first();
    } elseif ($applicationReview->sub_category == "Pressure Testing") {
      $applicationID = PressureTestRecords::where('application_id', $applicationReview->application_id)->first();
    }

    // dd($applicationID);

    $role = Auth::user()->role;

    return view('backend.marketer.view_application_docs', compact('applicationID','applicationReview','licenseDetail','licenseRenewalDetail', 'role', 'theCompany', 'thisApplicationRenewalDetails', 'pressureTestRecord'));
  }


  public function showDocumentsRequirementDocEdit($id){
    $applicationReview = AppDocReview::where('id', $id)->first();

    if($applicationReview->sub_category == "Site Suitability Inspection"){
      $applicationID = SiteSuitabilityInspectionDocuments::where('application_id', $applicationReview->application_id)->first();
    }elseif($applicationReview->sub_category == "ATC") {
      $applicationID = AtcInspectionDocuments::where('application_id', $applicationReview->application_id)->first();
    }

    return view('backend.marketer.edit_application_docs', compact('applicationID','applicationReview'));
  }



  public function getDocs(Request $request){
    $docs = SiteSuitabilityInspectionDocuments::where('application_id', $request->applicationID)->get();
    return response()->json($docs);
  }


  public function showMarketerRecords(){
    $appDocReviews = AppDocReview::where('marketer_id', Auth::user()->staff_id)->get();
    return view('backend.marketer.marketer_records', compact('appDocReviews'));
  }


  public function showCreateCompany()
  {
    return view('backend.marketer.create_company');
  }

  public function createCompany(Request $request)
  {

    // dd($request);

    // validate this form
    $this->validate(request(), [
      'comp_name' => 'required',
      'contract_type' => 'required',
      'state' => 'required',
      'lga' => 'required',
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
    $companyID = "DPRCOMP" . $newCompanyIndex;

    // Verification process to make sure contract_type, state, town all have values
    if ((request('contract_type') == 'Select Contract Type')
      || (request('state') == 'Select State')
      || (request('town') == 'Select LGA')) {
      return back();
    } else {
      // create and save the company
      Company::create([
        'company_id' => $companyID,
        'marketer_id' => Auth::user()->staff_id,
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
      // AppDocReview::where('application_id', request('application_id'))
      //   ->update([
      //     'company_id' => $companyID
      //   ]);

      // update application status in Job Assignments Table to STARTED
      // JobAssignment::where('application_id', request('application_id'))
      //   ->update([
      //     'job_application_status' => 'Started',
      //     'company_id' => $companyID
      //   ]);

      // $currentApplication = AppDocReview::where('application_id', request('application_id'))->first();

      // if ($currentApplication->sub_category == 'Site Suitability Inspection') {
      //   SiteSuitabilityInspectionDocuments::where('application_id', request('application_id'))
      //     ->update([
      //       'company_id' => $companyID
      //     ]);
      // } elseif ($currentApplication->sub_category == 'ATC') {
      //   AtcInspectionDocuments::where('application_id', request('application_id'))
      //     ->update([
      //       'company_id' => $companyID
      //     ]);
      // } elseif ($currentApplication->sub_category == 'LTO') {
      //   // code...
      // }

      // redirect to staff view document
      return redirect('/marketer');
    }
  }



  public function applicationDocumentReviewPhase(Request $request){
    //
    $this->validate(request(), [
      'gas_plant_name' => 'required'
    ]);

    // getting the current number of created applications
    $applicationCount = DB::table('app_doc_reviews')->get();

    // adding 1 to that number
    $indexIncremented = $applicationCount->count() + 1;

    // padding the number to 4 leading zeros
    $newApplicationIndex = sprintf('%05d', $indexIncremented);

    //appending the new application index to DPRCOMP to create the applications's ID
    $applicationID = "DPRAPPLICATION".$newApplicationIndex;

    // add the application ID to session
    session(['application_id'=>$applicationID]);

    // +++++ might need to do some custom verification here with decision statements
    AppDocReview::create([
      'application_id' => $applicationID,
      'marketer_id' => Auth::user()->staff_id,
      'name_of_gas_plant' => request('gas_plant_name'),
      'application_type' => request('application_type'),
      'sub_category' => request('sub_category'),
      'plant_type' => request('plant_type'),
      'capacity_of_tank' => request('capacity_of_tank'),
      'state' => request('state'),
      'lga' => request('lga'),
      'town' => request('town'),
      'address' => request('address'),
      'application_status' => 'Not Submitted'
    ]);

    // check to see which application ths marketer is applying for

    $application_type = request('application_type');
    $sub_category = request('sub_category');

    if($application_type == "LPG/CNG Retailer Outlets"){

      if($sub_category == "Site Suitability Inspection"){
        // return $this->handleSSI();
        return redirect('/site_suitability_requirement');
      }elseif ($sub_category == "ATC") {
        // return $this->handleATC();
        return redirect('/atc_requirement');
      }elseif ($sub_category == "LTO" || $sub_category == "Renewal" || $sub_category == "Take-Over") {
        // return $this->handleLTO();
        return redirect('/lto_requirement');
      }

    }else{
      // there is supposed to be another else if statement to check for other modules
      // but we would just skipt that for Now
      return back(); // with errors
    }


  }


  public function handleSiteSuitablityInspectionPhase1(Request $request){
    // dd($request);

    $this->validate(request(), [
      'gas_plant_name' => 'required'
    ]);

    // getting the current number of created applications
    $applicationCount = DB::table('app_doc_reviews')->get();

    // adding 1 to that number
    $indexIncremented = $applicationCount->count() + 1;

    // padding the number to 4 leading zeros
    $newApplicationIndex = sprintf('%05d', $indexIncremented);

    //appending the new application index to DPRCOMP to create the applications's ID
    $applicationID = "DPRAPPLICATION".$newApplicationIndex;

    // add the application ID to session
    session(['application_id'=>$applicationID]);

    // +++++ might need to do some custom verification here with decision statements
    AppDocReview::create([
      'application_id' => $applicationID,
      'marketer_id' => Auth::user()->staff_id,
      'company_id' => request('company_id'), // do not to forget to do a validation for this field....this marketer should be the registrar of the company
      'name_of_gas_plant' => request('gas_plant_name'),
      'application_type' => request('application_type'),
      'sub_category' => request('sub_category'),
      'plant_type' => request('plant_type'),
      'state' => request('state'),
      'lga' => request('lga'),
      'town' => request('town'),
      'address' => request('address'),
      'application_status' => 'Not Submitted'
    ]);


    return redirect('/site_suitability_requirement');

    // check to see which application ths marketer is applying for

    // $application_type = request('application_type');
    // $sub_category = request('sub_category');
    // // dd($sub_category);
    //
    // if($sub_category == "Site Suitability Inspection"){
    //
    //   // return $this->handleSSI();
    //   return redirect('/site_suitability_requirement');
    // }elseif ($sub_category == "ATC") {
    //   // return $this->handleATC();
    //   return redirect('/atc_requirement');
    // }elseif ($sub_category == "LTO" || $sub_category == "Renewal" || $sub_category == "Take-Over") {
    //   // return $this->handleLTO();
    //   return redirect('/lto_requirement');
    // }


  }

  public function handleSiteSuitablityInspection(Request $request){
    $alfsiDoc = $amaDoc = $ctcDoc = $ciDoc = $fcDoc = $prcDoc = $cafDoc = $abpDoc = $spDoc = $dcDoc = $pidDoc = $eiaDoc = $bsfpDoc = $lcmlsDoc = $csatdDoc = $alacdDoc = 'null';

    $marketerID = Auth::user()->staff_id;

    // Below are just decision statements to check if actually a file has been uploaded and can be stored to the specified destination
    if($request->hasFile('ALFSI_doc')){
      $request->ALFSI_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->ALFSI_doc->getClientOriginalName());
      $ALFSIDoc = $request->ALFSI_doc->getClientOriginalName();
    }else{
      // go back with error message
    }

    if($request->hasFile('AMA_doc')){
      $request->AMA_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->AMA_doc->getClientOriginalName());
      $amaDoc = $request->AMA_doc->getClientOriginalName();
    }else{
      // go back with error message
    }

    if($request->hasFile('CTC_doc')){
      $request->CTC_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->CTC_doc->getClientOriginalName());
      $ctcDoc = $request->CTC_doc->getClientOriginalName();
    }

    if($request->hasFile('CI_doc')){
      $request->CI_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->CI_doc->getClientOriginalName());
      $ciDoc = $request->CI_doc->getClientOriginalName();
    }

    if($request->hasFile('FC_doc')){
      $request->FC_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->FC_doc->getClientOriginalName());
      $fcDoc = $request->FC_doc->getClientOriginalName();
    }

    if($request->hasFile('PRC_doc')){
      $request->PRC_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->PRC_doc->getClientOriginalName());
      $prcDoc = $request->PRC_doc->getClientOriginalName();
    }

    if($request->hasFile('CAF_doc')){
      $request->CAF_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->CAF_doc->getClientOriginalName());
      $cafDoc = $request->CAF_doc->getClientOriginalName();
    }

    if($request->hasFile('ABP_doc')){
      $request->ABP_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->ABP_doc->getClientOriginalName());
      $abpDoc = $request->ABP_doc->getClientOriginalName();
    }

    if($request->hasFile('SP_doc')){
      $request->SP_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->SP_doc->getClientOriginalName());
      $spDoc = $request->SP_doc->getClientOriginalName();
    }else{
      // go back with error message
    }

    if($request->hasFile('DC_doc')){
      $request->DC_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->DC_doc->getClientOriginalName());
      $dcDoc = $request->DC_doc->getClientOriginalName();
    }

    if($request->hasFile('PID_doc')){
      $request->PID_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->PID_doc->getClientOriginalName());
      $pidDoc = $request->PID_doc->getClientOriginalName();
    }

    if($request->hasFile('EIA_doc')){
      $request->EIA_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->EIA_doc->getClientOriginalName());
      $eiaDoc = $request->EIA_doc->getClientOriginalName();
    }

    if($request->hasFile('BSFP_doc')){
      $request->BSFP_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->BSFP_doc->getClientOriginalName());
      $bsfpDoc = $request->BSFP_doc->getClientOriginalName();
    }

    if($request->hasFile('LCMLS_doc')){
      $request->LCMLS_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->LCMLS_doc->getClientOriginalName());
      $lcmlsDoc = $request->LCMLS_doc->getClientOriginalName();
    }

    if($request->hasFile('CSATD_doc')){
      $request->CSATD_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->CSATD_doc->getClientOriginalName());
      $csatdDoc = $request->CSATD_doc->getClientOriginalName();
    }

    if($request->hasFile('ALACD_doc')){
      $request->ALACD_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->ALACD_doc->getClientOriginalName());
      $alacdDoc = $request->ALACD_doc->getClientOriginalName();
    }

    SiteSuitabilityInspectionDocuments::create([
      'application_id' => session('application_id'),
      'marketer_id' => $marketerID,
      'applications_letter_for_suitability_inspection' => request('ALFSI'),
      'article_and_memorandum_of_association' => request('AMA'),
      'current_tax_clearance' => request('CTC'),
      'certificate_of_incorporation' => request('CI'),
      'fire_certificate' => request('FC'),
      'police_report' => request('PRC'),
      'completed_application_form' => request('CAF'),
      'approved_building_plan' => request('ABP'),
      'survey_plan' => request('SP'),
      'deed_of_conveyance' => request('DC'),
      'piping_and_instrumentation_diagram' => request('PID'),
      'environmental_impact_accessment' => request('EIA'),
      'bankdraft_of_statutory_fees' => request('BSFP'),
      'letter_confirmation_ministry_of_lands_and_survey' => request('LCMLS'),
      'codes_and_standard_adopted_in_the_tank_design' => request('CSATD'),
      'application_letter_addressed_to_the_controller' => request('ALACD'),
      'applications_letter_for_suitability_inspection_location_url' => $alfsiDoc,
      'article_and_memorandum_of_association_location_url' => $amaDoc,
      'current_tax_clearance_location_url' => $ctcDoc,
      'certificate_of_incorporation_location_url' => $ciDoc,
      'fire_certificate_location_url' => $fcDoc,
      'police_report_location_url' => $prcDoc,
      'completed_application_form_location_url' => $cafDoc,
      'approved_building_plan_location_url' => $abpDoc,
      'survey_plan_location_url' => $spDoc,
      'deed_of_conveyance_location_url' => $dcDoc,
      'piping_and_instrumentation_diagram_location_url' => $pidDoc,
      'environmental_impact_accessment_location_url' => $eiaDoc,
      'bankdraft_of_statutory_fees_location_url' => $bsfpDoc,
      'letter_confirmation_ministry_of_lands_and_survey_location_url' => $lcmlsDoc,
      'codes_and_standard_adopted_in_the_tank_design_location_url' => $csatdDoc,
      'application_letter_addressed_to_the_controller_location_url' => $alacdDoc
    ]);

    // clear the application ID from the session
    $request->session()->forget('application_id');

    return redirect('/marketer');


  }





  public function handleATCPhase1(Request $request){
    // dd($request);
    $this->validate(request(), [
      'gas_plant_name' => 'required'
    ]);

    // getting the current number of created applications
    $applicationCount = DB::table('app_doc_reviews')->get();

    // adding 1 to that number
    $indexIncremented = $applicationCount->count() + 1;

    // padding the number to 4 leading zeros
    $newApplicationIndex = sprintf('%05d', $indexIncremented);

    //appending the new application index to DPRCOMP to create the applications's ID
    $applicationID = "DPRAPPLICATION".$newApplicationIndex;

    // add the application ID to session
    session(['application_id'=>$applicationID]);

    // +++++ might need to do some custom verification here with decision statements
    AppDocReview::create([
      'application_id' => $applicationID,
      'marketer_id' => Auth::user()->staff_id,
      'company_id' => request('company_id'), // do not to forget to do a validation for this field....this marketer should be the registrar of the company
      'name_of_gas_plant' => request('gas_plant_name'),
      'application_type' => request('application_type'),
      'sub_category' => request('sub_category'),
      'plant_type' => request('plant_type'),
      'state' => request('state'),
      'lga' => request('lga'),
      'town' => request('town'),
      'address' => request('address'),
      'application_status' => 'Not Submitted'
    ]);


    return redirect('/atc_requirement');

    // check to see which application ths marketer is applying for

    // $application_type = request('application_type');
    // $sub_category = request('sub_category');
    // // dd($sub_category);
    //
    // if($sub_category == "Site Suitability Inspection"){
    //
    //   // return $this->handleSSI();
    //   return redirect('/site_suitability_requirement');
    // }elseif ($sub_category == "ATC") {
    //   // return $this->handleATC();
    //   return redirect('/atc_requirement');
    // }elseif ($sub_category == "LTO" || $sub_category == "Renewal" || $sub_category == "Take-Over") {
    //   // return $this->handleLTO();
    //   return redirect('/lto_requirement');
    // }


  }




  public function handleAddonATIPhase1(Request $request){
    // dd($request);
    $this->validate(request(), [
      'gas_plant_name' => 'required'
    ]);

    // getting the current number of created applications
    $applicationCount = DB::table('app_doc_reviews')->get();

    // adding 1 to that number
    $indexIncremented = $applicationCount->count() + 1;

    // padding the number to 4 leading zeros
    $newApplicationIndex = sprintf('%05d', $indexIncremented);

    //appending the new application index to DPRCOMP to create the applications's ID
    $applicationID = "DPRAPPLICATION".$newApplicationIndex;

    // add the application ID to session
    session(['application_id'=>$applicationID]);

    // +++++ might need to do some custom verification here with decision statements
    AppDocReview::create([
      'application_id' => $applicationID,
      'office' => 'Warri', // This is very key and needs to be updated.....it cannot be left hardcoded like this
      'marketer_id' => Auth::user()->staff_id,
      'company_id' => request('company_id'), // do not to forget to do a validation for this field....this marketer should be the registrar of the company
      'name_of_gas_plant' => request('gas_plant_name'),
      'application_type' => request('application_type'),
      'sub_category' => request('sub_category'),
      'plant_type' => request('plant_type'),
      'state' => request('state'),
      'lga' => request('lga'),
      'town' => request('town'),
      'address' => request('address'),
      'application_status' => 'Not Submitted'
    ]);


    return redirect('/ati_requirement');

  }






  public function handleATC(Request $request){
    // dd($request);
    $alfsiDoc = $amaDoc = $ctcDoc = $ciDoc = $fcDoc = $prcDoc = $cafDoc = $abpDoc = $spDoc = $dcDoc = $pidDoc = $eiaDoc = $bsfpDoc = $lcmlsDoc = $csatdDoc = $alacdDoc = 'null';
    $marketerID = Auth::user()->staff_id;

    // Below are just decision statements to check if actually a file has been uploaded and can be stored to the specified destination
    if($request->hasFile('ALFSI_doc')){
      $request->ALFSI_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->ALFSI_doc->getClientOriginalName());
      $ALFSIDoc = $request->ALFSI_doc->getClientOriginalName();
    }

    if($request->hasFile('AMA_doc')){
      $request->AMA_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->AMA_doc->getClientOriginalName());
      $amaDoc = $request->AMA_doc->getClientOriginalName();
    }

    if($request->hasFile('CTC_doc')){
      $request->CTC_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->CTC_doc->getClientOriginalName());
      $ctcDoc = $request->CTC_doc->getClientOriginalName();
    }

    if($request->hasFile('CI_doc')){
      $request->CI_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->CI_doc->getClientOriginalName());
      $ciDoc = $request->CI_doc->getClientOriginalName();
    }

    if($request->hasFile('FC_doc')){
      $request->FC_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->FC_doc->getClientOriginalName());
      $fcDoc = $request->FC_doc->getClientOriginalName();
    }

    if($request->hasFile('PRC_doc')){
      $request->PRC_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->PRC_doc->getClientOriginalName());
      $prcDoc = $request->PRC_doc->getClientOriginalName();
    }

    if($request->hasFile('CAF_doc')){
      $request->CAF_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->CAF_doc->getClientOriginalName());
      $cafDoc = $request->CAF_doc->getClientOriginalName();
    }

    if($request->hasFile('ABP_doc')){
      $request->ABP_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->ABP_doc->getClientOriginalName());
      $abpDoc = $request->ABP_doc->getClientOriginalName();
    }

    if($request->hasFile('SP_doc')){
      $request->SP_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->SP_doc->getClientOriginalName());
      $spDoc = $request->SP_doc->getClientOriginalName();
    }

    if($request->hasFile('DC_doc')){
      $request->DC_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->DC_doc->getClientOriginalName());
      $dcDoc = $request->DC_doc->getClientOriginalName();
    }

    if($request->hasFile('PID_doc')){
      $request->PID_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->PID_doc->getClientOriginalName());
      $pidDoc = $request->PID_doc->getClientOriginalName();
    }

    if($request->hasFile('EIA_doc')){
      $request->EIA_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->EIA_doc->getClientOriginalName());
      $eiaDoc = $request->EIA_doc->getClientOriginalName();
    }

    if($request->hasFile('BSFP_doc')){
      $request->BSFP_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->BSFP_doc->getClientOriginalName());
      $bsfpDoc = $request->BSFP_doc->getClientOriginalName();
    }

    if($request->hasFile('LCMLS_doc')){
      $request->LCMLS_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->LCMLS_doc->getClientOriginalName());
      $lcmlsDoc = $request->LCMLS_doc->getClientOriginalName();
    }

    if($request->hasFile('CSATD_doc')){
      $request->CSATD_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->CSATD_doc->getClientOriginalName());
      $csatdDoc = $request->CSATD_doc->getClientOriginalName();
    }

    if($request->hasFile('ALACD_doc')){
      $request->ALACD_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->ALACD_doc->getClientOriginalName());
      $alacdDoc = $request->ALACD_doc->getClientOriginalName();
    }




    AtcInspectionDocuments::create([
      'application_id' => session('application_id'),
      'marketer_id' => $marketerID,
      'applications_letter_for_suitability_inspection' => request('ALFSI'),
      'article_and_memorandum_of_association' => request('AMA'),
      'current_tax_clearance' => request('CTC'),
      'certificate_of_incorporation' => request('CI'),
      'fire_certificate' => request('FC'),
      'police_report' => request('PRC'),
      'completed_application_form' => request('CAF'),
      'approved_building_plan' => request('ABP'),
      'survey_plan' => request('SP'),
      'deed_of_conveyance' => request('DC'),
      'piping_and_instrumentation_diagram' => request('PID'),
      'environmental_impact_accessment' => request('EIA'),
      'bankdraft_of_statutory_fees' => request('BSFP'),
      'letter_confirmation_ministry_of_lands_and_survey' => request('LCMLS'),
      'codes_and_standard_adopted_in_the_tank_design' => request('CSATD'),
      'application_letter_addressed_to_the_controller' => request('ALACD'),
      'applications_letter_for_suitability_inspection_location_url' => $alfsiDoc,
      'article_and_memorandum_of_association_location_url' => $amaDoc,
      'current_tax_clearance_location_url' => $ctcDoc,
      'certificate_of_incorporation_location_url' => $ciDoc,
      'fire_certificate_location_url' => $fcDoc,
      'police_report_location_url' => $prcDoc,
      'completed_application_form_location_url' => $cafDoc,
      'approved_building_plan_location_url' => $abpDoc,
      'survey_plan_location_url' => $spDoc,
      'deed_of_conveyance_location_url' => $dcDoc,
      'piping_and_instrumentation_diagram_location_url' => $pidDoc,
      'environmental_impact_accessment_location_url' => $eiaDoc,
      'bankdraft_of_statutory_fees_location_url' => $bsfpDoc,
      'letter_confirmation_ministry_of_lands_and_survey_location_url' => $lcmlsDoc,
      'codes_and_standard_adopted_in_the_tank_design_location_url' => $csatdDoc,
      'application_letter_addressed_to_the_controller_location_url' => $alacdDoc,
      'applications_letter_for_suitability_inspection_reason' => request('ALFSI_reason'),
      'article_and_memorandum_of_association_reason' => request('AMA_reason'),
      'current_tax_clearance_reason' => request('CTC_reason'),
      'certificate_of_incorporation_reason' => request('CI_reason'),
      'fire_certificate_reason' => request('FC_reason'),
      'police_report_reason' => request('PRC_reason'),
      'completed_application_form_reason' => request('CAF_reason'),
      'approved_building_plan_reason' => request('ABP_reason'),
      'survey_plan_reason' => request('SP_reason'),
      'deed_of_conveyance_reason' => request('DC_reason'),
      'piping_and_instrumentation_diagram_reason' => request('PID_reason'),
      'environmental_impact_accessment_reason' => request('EIA_reason'),
      'bankdraft_of_statutory_fees_reason' => request('BSFP_reason'),
      'letter_confirmation_ministry_of_lands_and_survey_reason' => request('LCMLS_reason'),
      'codes_and_standard_adopted_in_the_tank_design_reason' => request('CSATD_reason'),
      'application_letter_addressed_to_the_controller_reason' => request('ALACD_reason')
    ]);

    // clear the application ID from the session
    $request->session()->forget('application_id');

     // redirect to the current AUTH USER

    if (Auth::user()->role == 'Marketer') {
      return redirect('/marketer');
    }elseif(Auth::user()->role == 'Staff'){
      return redirect('/staff');
    }

  }



  public function handleAddonATI(Request $request){
    // dd($request);
    $sipsDoc = $ccsslDoc = $robldDoc = $pldlpgaDoc = $fsrilpgaDoc = $eerDoc = $rtpaDoc = $alacdDoc = 'null';
    $marketerID = Auth::user()->staff_id;

    // Below are just decision statements to check if actually a file has been uploaded and can be stored to the specified destination
    if($request->hasFile('SIPS_doc')){
      $request->SIPS_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->SIPS_doc->getClientOriginalName());
      $sipsDoc = $request->SIPS_doc->getClientOriginalName();
    }

    if($request->hasFile('CCSSL_doc')){
      $request->CCSSL_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->CCSSL_doc->getClientOriginalName());
      $ccsslDoc = $request->CCSSL_doc->getClientOriginalName();
    }

    if($request->hasFile('ROBLD_doc')){
      $request->ROBLD_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->ROBLD_doc->getClientOriginalName());
      $robldDoc = $request->ROBLD_doc->getClientOriginalName();
    }

    if($request->hasFile('PLDLPGA_doc')){
      $request->PLDLPGA_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->PLDLPGA_doc->getClientOriginalName());
      $pldlpgaDoc = $request->PLDLPGA_doc->getClientOriginalName();
    }

    if($request->hasFile('FSRILPGA_doc')){
      $request->FSRILPGA_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->FSRILPGA_doc->getClientOriginalName());
      $fsrilpgaDoc = $request->FSRILPGA_doc->getClientOriginalName();
    }

    if($request->hasFile('EER_doc')){
      $request->EER_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->EER_doc->getClientOriginalName());
      $eerDoc = $request->EER_doc->getClientOriginalName();
    }

    if($request->hasFile('RTPA_doc')){
      $request->RTPA_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->RTPA_doc->getClientOriginalName());
      $rtpaDoc = $request->RTPA_doc->getClientOriginalName();
    }

    if($request->hasFile('ALACD_doc')){
      $request->ALACD_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->ALACD_doc->getClientOriginalName());
      $alacdDoc = $request->ALACD_doc->getClientOriginalName();
    }


    // $sipsDoc = $ccsslDoc = $robldDoc = $pldlpgaDoc = $fsrilpgaDoc = $eerDoc = $rtpaDoc = $alacdDoc = 'null';

    AddonAtiInspectionDocument::create([
      'application_id' => session('application_id'),
      'marketer_id' => $marketerID,

      'suitability_inspection_of_proposed_site' => request('SIPS'),
      'copy_of_current_storage_and_sales_license' => request('CCSSL'),
      'retail_outlet_as_built_layout_drawing' => request('ROBLD'),
      'proposed_layout_drawing_for_the_lpg_addon' => request('PLDLPGA'),
      'fire_services_report_indicating_the_lpg_addon' => request('FSRILPGA'),
      'environmental_evaluation_report' => request('EER'),
      'relevant_town_planning_approval' => request('RTPA'),
      'application_letter_addressed_to_the_controller' => request('ALACD'),

      'suitability_inspection_of_proposed_site_location_url' => $sipsDoc,
      'copy_of_current_storage_and_sales_license_location_url' => $ccsslDoc,
      'retail_outlet_as_built_layout_drawing_location_url' => $robldDoc,
      'proposed_layout_drawing_for_the_lpg_addon_location_url' => $pldlpgaDoc,
      'fire_services_report_indicating_the_lpg_addon_location_url' => $fsrilpgaDoc,
      'environmental_evaluation_report_location_url' => $eerDoc,
      'relevant_town_planning_approval_location_url' => $rtpaDoc,
      'application_letter_addressed_to_the_controller_location_url' => $alacdDoc,

      'suitability_inspection_of_proposed_site_reason' => request('SIPS_reason'),
      'copy_of_current_storage_and_sales_license_reason' => request('CCSSL_reason'),
      'retail_outlet_as_built_layout_drawing_reason' => request('ROBLD_reason'),
      'proposed_layout_drawing_for_the_lpg_addon_reason' => request('PLDLPGA_reason'),
      'fire_services_report_indicating_the_lpg_addon_reason' => request('FSRILPGA_reason'),
      'environmental_evaluation_report_reason' => request('EER_reason'),
      'relevant_town_planning_approval_reason' => request('RTPA_reason'),
      'application_letter_addressed_to_the_controller_reason' => request('ALACD_reason')
    ]);

    // clear the application ID from the session
    $request->session()->forget('application_id');

     // redirect to the current AUTH USER

    if (Auth::user()->role == 'Marketer') {
      return redirect('/marketer');
    }elseif(Auth::user()->role == 'Staff'){
      return redirect('/staff');
    }

  }



  public function handleAddonLTOPhase1(Request $request){
    // dd($request);

    $this->validate(request(), [
      'gas_plant_name' => 'required'
    ]);

    // getting the current number of created applications
    $applicationCount = DB::table('app_doc_reviews')->get();

    // adding 1 to that number
    $indexIncremented = $applicationCount->count() + 1;

    // padding the number to 4 leading zeros
    $newApplicationIndex = sprintf('%05d', $indexIncremented);

    //appending the new application index to DPRCOMP to create the applications's ID
    $applicationID = "DPRAPPLICATION".$newApplicationIndex;

    // add the application ID to session
    session(['application_id'=>$applicationID]);

    AppDocReview::create([
      'application_id' => $applicationID,
      'office' => 'Warri', // This is very key and needs to be updated.....it cannot be left hardcoded like this
      'marketer_id' => Auth::user()->staff_id,
      'company_id' => request('company_id'), // do not to forget to do a validation for this field....this marketer should be the registrar of the company
      'name_of_gas_plant' => request('gas_plant_name'),
      'application_type' => request('application_type'),
      'sub_category' => request('sub_category'),
      'plant_type' => request('plant_type'),
      'state' => request('state'),
      'lga' => request('lga'),
      'town' => request('town'),
      'address' => request('address'),
      'application_status' => 'Not Submitted'
    ]);


    return redirect('/addon_lto_requirement');

  }


  public function handleCAtDLTOPhase1(Request $request){
    // dd($request);

    // $this->validate(request(), [
    //   'gas_plant_name' => 'required'
    // ]);

    // getting the current number of created applications
    $applicationCount = DB::table('app_doc_reviews')->get();

    // adding 1 to that number
    $indexIncremented = $applicationCount->count() + 1;

    // padding the number to 4 leading zeros
    $newApplicationIndex = sprintf('%05d', $indexIncremented);

    //appending the new application index to DPRCOMP to create the applications's ID
    $applicationID = "DPRAPPLICATION".$newApplicationIndex;

    // add the application ID to session
    session(['application_id'=>$applicationID]);

    // get the company

    $company = Company::where('company_id', request('company_id'))->first();

    AppDocReview::create([
      'application_id' => $applicationID,
      'office' => 'Warri', // This is very key and needs to be updated.....it cannot be left hardcoded like this
      'marketer_id' => Auth::user()->staff_id,
      'company_id' => request('company_id'), // do not to forget to do a validation for this field....this marketer should be the registrar of the company
      'application_type' => request('application_type'),
      'sub_category' => request('sub_category'),
      'capacity_of_tank' => request('capacity_of_tank'),
      'state' => $company->state,
      'lga' => $company->lga,
      'town' => $company->town,
      'address' => $company->address,
      'application_status' => 'Not Submitted'
    ]);

    CatdLtoApplicationExtention::create([
      'application_id' => $applicationID,
      'company_id' => request('company_id'), // do not to forget to do a validation for this field....this marketer should be the registrar of the company
      'sponsoring_company' => request('name_of_sponsoring_company'),
      'no_of_bottles' => request('no_of_bottles')
    ]);


    return redirect('/catd_lto_requirement');

  }


  public function handleLTOPhase1(Request $request){
    // dd($request);

    $this->validate(request(), [
      'gas_plant_name' => 'required'
    ]);

    // getting the current number of created applications
    $applicationCount = DB::table('app_doc_reviews')->get();

    // adding 1 to that number
    $indexIncremented = $applicationCount->count() + 1;

    // padding the number to 4 leading zeros
    $newApplicationIndex = sprintf('%05d', $indexIncremented);

    //appending the new application index to DPRCOMP to create the applications's ID
    $applicationID = "DPRAPPLICATION".$newApplicationIndex;

    // add the application ID to session
    session(['application_id'=>$applicationID]);

    // +++++ might need to do some custom verification here with decision statements
    AppDocReview::create([
      'application_id' => $applicationID,
      'marketer_id' => Auth::user()->staff_id,
      'name_of_gas_plant' => request('gas_plant_name'),
      'application_type' => request('application_type'),
      'sub_category' => request('sub_category'),
      'plant_type' => request('plant_type'),
      'capacity_of_tank' => request('capacity_of_tank'),
      'state' => request('state'),
      'lga' => request('lga'),
      'town' => request('town'),
      'address' => request('address'),
      'application_status' => 'Not Submitted'
    ]);


    return redirect('/lto_requirement');

    // check to see which application ths marketer is applying for

    // $application_type = request('application_type');
    // $sub_category = request('sub_category');
    // // dd($sub_category);
    //
    // if($sub_category == "Site Suitability Inspection"){
    //
    //   // return $this->handleSSI();
    //   return redirect('/site_suitability_requirement');
    // }elseif ($sub_category == "ATC") {
    //   // return $this->handleATC();
    //   return redirect('/atc_requirement');
    // }elseif ($sub_category == "LTO" || $sub_category == "Renewal" || $sub_category == "Take-Over") {
    //   // return $this->handleLTO();
    //   return redirect('/lto_requirement');
    // }


  }

  public function handleAddonLTO(Request $request){
    // dd($request);
    $cafDoc = $bsfpDoc = $fsrilpgaDoc = $pailpgaDoc = $cwmcvDoc = $alacdDoc = $cptrcDoc = $ctyitcDoc = $appDoc = 'null';
    $marketerID = Auth::user()->staff_id;

    // Below are just decision statements to check if actually a file has been uploaded and can be stored to the specified destination
    if($request->hasFile('CAF_doc')){
      $request->CAF_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->CAF_doc->getClientOriginalName());
      $cafDoc = $request->CAF_doc->getClientOriginalName();
    }

    if($request->hasFile('BSFP_doc')){
      $request->BSFP_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->BSFP_doc->getClientOriginalName());
      $bsfpDoc = $request->BSFP_doc->getClientOriginalName();
    }

    if ($request->hasFile('FSRILPGA_doc')) {
      $request->FSRILPGA_doc->storeAs('comp_docs/' . $marketerID . '/' . session('application_id'), $request->FSRILPGA_doc->getClientOriginalName());
      $fsrilpgaDoc = $request->FSRILPGA_doc->getClientOriginalName();
    }

    if($request->hasFile('PAILPGA_doc')){
      $request->PAILPGA_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->PAILPGA_doc->getClientOriginalName());
      $pailpgaDoc = $request->PAILPGA_doc->getClientOriginalName();
    }

    if($request->hasFile('CWMCV_doc')){
      $request->CWMCV_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->CWMCV_doc->getClientOriginalName());
      $cwmcvDoc = $request->CWMCV_doc->getClientOriginalName();
    }

    if($request->hasFile('ALACD_doc')){
      $request->ALACD_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->ALACD_doc->getClientOriginalName());
      $alacdDoc = $request->ALACD_doc->getClientOriginalName();
    }

    if($request->hasFile('CPTRC_doc')){
      $request->CPTRC_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->CPTRC_doc->getClientOriginalName());
      $cptrcDoc = $request->CPTRC_doc->getClientOriginalName();
    }

    if($request->hasFile('CTYITC_doc')){
      $request->CTYITC_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->CTYITC_doc->getClientOriginalName());
      $ctyitcDoc = $request->CTYITC_doc->getClientOriginalName();
    }

    if($request->hasFile('APP_doc')){
      $request->APP_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->APP_doc->getClientOriginalName());
      $appDoc = $request->APP_doc->getClientOriginalName();
    }


    AddonLtoInspectionDocument::create([
      'application_id' => session('application_id'),
      'marketer_id' => $marketerID,
      'completed_application_form' => request('CAF'),
      'bankdraft_of_statutory_fees' => request('BSFP'),
      'fire_services_report_indicating_the_lpg_addon' => request('FSRILPGA'),
      'photocopy_of_approval_to_install_lpg' => request('PAILPGA'),
      'current_weight_measures_cert_of_verification' => request('CWMCV'),
      'application_letter_addressed_to_the_controller' => request('ALACD'),
      'current_pressure_test_report_certificate' => request('CPTRC'),
      'current_three_years_income_tax_clearance' => request('CTYITC'),
      'appropriate_plant_photography' => request('APP'),

      'completed_application_form_location_url' => $cafDoc,
      'bankdraft_of_statutory_fees_location_url' => $bsfpDoc,
      'fire_services_report_indicating_the_lpg_addon_location_url' => $fsrilpgaDoc,
      'photocopy_of_approval_to_install_lpg_location_url' => $pailpgaDoc,
      'current_weight_measures_cert_of_verification_location_url' => $cwmcvDoc,
      'application_letter_addressed_to_the_controller_location_url' => $alacdDoc,
      'current_pressure_test_report_certificate_location_url' => $cptrcDoc,
      'current_three_years_income_tax_clearance_location_url' => $ctyitcDoc,
      'appropriate_plant_photography_location_url' => $appDoc,

      'completed_application_form_reason' => request('CAF_reason'),
      'bankdraft_of_statutory_fees_reason' => request('BSFP_reason'),
      'fire_services_report_indicating_the_lpg_addon_reason' => request('FSRILPGA_reason'),
      'photocopy_of_approval_to_install_lpg_reason' => request('PACLPG_reason'),
      'current_weight_measures_cert_of_verification_reason' => request('CWMCV_reason'),
      'application_letter_addressed_to_the_controller_reason' => request('ALACD_reason'),
      'current_pressure_test_report_certificate_reason' => request('CPTRC_reason'),
      'current_three_years_income_tax_clearance_reason' => request('CTYITC_reason'),
      'appropriate_plant_photography_reason' => request('APP_reason')
    ]);

    // clear the application ID from the session
    $request->session()->forget('application_id');

    if (Auth::user()->role == 'Marketer') {
      return redirect('/marketer');
    } elseif (Auth::user()->role == 'Staff') {
      return redirect('/staff');
    }

  }

  public function handleCatDLTO(Request $request){
    // dd($request);
    $lfscDoc = $bsfpDoc = $viDoc = $alDoc = $ciDoc = 'null';
    $marketerID = Auth::user()->staff_id;

    // Below are just decision statements to check if actually a file has been uploaded and can be stored to the specified destination
    if($request->hasFile('LFSC_doc')){
      $request->LFSC_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->LFSC_doc->getClientOriginalName());
      $lfscDoc = $request->LFSC_doc->getClientOriginalName();
    }

    if($request->hasFile('BSFP_doc')){
      $request->BSFP_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->BSFP_doc->getClientOriginalName());
      $bsfpDoc = $request->BSFP_doc->getClientOriginalName();
    }

    if ($request->hasFile('VI_doc')) {
      $request->VI_doc->storeAs('comp_docs/' . $marketerID . '/' . session('application_id'), $request->VI_doc->getClientOriginalName());
      $viDoc = $request->VI_doc->getClientOriginalName();
    }

    if($request->hasFile('AL_doc')){
      $request->AL_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->AL_doc->getClientOriginalName());
      $alDoc = $request->AL_doc->getClientOriginalName();
    }

    if($request->hasFile('CI_doc')){
      $request->CI_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->CI_doc->getClientOriginalName());
      $ciDoc = $request->CI_doc->getClientOriginalName();
    }


    CatdLtoInspectionDocument::create([
      'application_id' => session('application_id'),
      'marketer_id' => $marketerID,
      'letter_form_sponsoring_company' => request('LFSC'),
      'bankdraft_of_statutory_fees' => request('BSFP'),
      'verification_inspection' => request('VI'),
      'application_letter' => request('AL'),
      'certificate_of_incorporation' => request('CI'),

      'letter_form_sponsoring_company_location_url' => $lfscDoc,
      'bankdraft_of_statutory_fees_location_url' => $bsfpDoc,
      'verification_inspection_location_url' => $viDoc,
      'application_letter_location_url' => $alDoc,
      'certificate_of_incorporation_location_url' => $ciDoc,

      'letter_form_sponsoring_company_reason' => request('LFSC_reason'),
      'bankdraft_of_statutory_fees_reason' => request('BSFP_reason'),
      'verification_inspection_reason' => request('VI_reason'),
      'application_letter_reason' => request('AI_reason'),
      'certificate_of_incorporation_reason' => request('CI_reason')
    ]);

    // clear the application ID from the session
    $request->session()->forget('application_id');

    if (Auth::user()->role == 'Marketer') {
      return redirect('/marketer');
    } elseif (Auth::user()->role == 'Staff') {
      return redirect('/staff');
    }

  }

  public function handleLTO(Request $request){
    // dd($request);
    $cafDoc = $bsfpDoc = $paclpgDoc = $cwmcvDoc = $alacdDoc = $frcDoc = $cptrcDoc = $ctyitcDoc = $appDoc = $sopDoc = 'null';
    $marketerID = Auth::user()->staff_id;

    // Below are just decision statements to check if actually a file has been uploaded and can be stored to the specified destination
    if($request->hasFile('CAF_doc')){
      $request->CAF_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->CAF_doc->getClientOriginalName());
      $cafDoc = $request->CAF_doc->getClientOriginalName();
    }

    if($request->hasFile('BSFP_doc')){
      $request->BSFP_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->BSFP_doc->getClientOriginalName());
      $bsfpDoc = $request->BSFP_doc->getClientOriginalName();
    }

    if($request->hasFile('PACLPG_doc')){
      $request->PACLPG_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->PACLPG_doc->getClientOriginalName());
      $paclpgDoc = $request->PACLPG_doc->getClientOriginalName();
    }

    if($request->hasFile('CWMCV_doc')){
      $request->CWMCV_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->CWMCV_doc->getClientOriginalName());
      $cwmcvDoc = $request->CWMCV_doc->getClientOriginalName();
    }

    if($request->hasFile('ALACD_doc')){
      $request->ALACD_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->ALACD_doc->getClientOriginalName());
      $alacdDoc = $request->ALACD_doc->getClientOriginalName();
    }

    if($request->hasFile('FRC_doc')){
      $request->FRC_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->FRC_doc->getClientOriginalName());
      $frcDoc = $request->FRC_doc->getClientOriginalName();
    }

    if($request->hasFile('CPTRC_doc')){
      $request->CPTRC_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->CPTRC_doc->getClientOriginalName());
      $cptrcDoc = $request->CPTRC_doc->getClientOriginalName();
    }

    if($request->hasFile('CTYITC_doc')){
      $request->CTYITC_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->CTYITC_doc->getClientOriginalName());
      $ctyitcDoc = $request->CTYITC_doc->getClientOriginalName();
    }

    if($request->hasFile('APP_doc')){
      $request->APP_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->APP_doc->getClientOriginalName());
      $appDoc = $request->APP_doc->getClientOriginalName();
    }

    if($request->hasFile('SOP_doc')){
      $request->SOP_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->SOP_doc->getClientOriginalName());
      $sopDoc = $request->SOP_doc->getClientOriginalName();
    }


    LtoInspectionDocument::create([
      'application_id' => session('application_id'),
      'marketer_id' => $marketerID,
      'completed_application_form' => request('CAF'),
      'bankdraft_of_statutory_fees' => request('BSFP'),
      'photocopy_of_approval_to_construct_lpg' => request('PACLPG'),
      'current_weight_measures_cert_of_verification' => request('CWMCV'),
      'application_letter_addressed_to_the_controller' => request('ALACD'),
      'fire_report_certificate' => request('FRC'),
      'current_pressure_test_report_certificate' => request('CPTRC'),
      'current_three_years_income_tax_clearance' => request('CTYITC'),
      'appropriate_plant_photography' => request('APP'),
      'standard_operating_procedure' => request('SOP'),
      'completed_application_form_location_url' => $cafDoc,
      'bankdraft_of_statutory_fees_location_url' => $bsfpDoc,
      'photocopy_of_approval_to_construct_lpg_location_url' => $paclpgDoc,
      'current_weight_measures_cert_of_verification_location_url' => $cwmcvDoc,
      'application_letter_addressed_to_the_controller_location_url' => $alacdDoc,
      'fire_report_certificate_location_url' => $frcDoc,
      'current_pressure_test_report_certificate_location_url' => $cptrcDoc,
      'current_three_years_income_tax_clearance_location_url' => $ctyitcDoc,
      'appropriate_plant_photography_location_url' => $appDoc,
      'standard_operating_procedure_location_url' => $sopDoc,
      'completed_application_form_reason' => request('CAF_reason'),
      'bankdraft_of_statutory_fees_reason' => request('BSFP_reason'),
      'photocopy_of_approval_to_construct_lpg_reason' => request('PACLPG_reason'),
      'current_weight_measures_cert_of_verification_reason' => request('CWMCV_reason'),
      'application_letter_addressed_to_the_controller_reason' => request('ALACD_reason'),
      'fire_report_certificate_reason' => request('FRC_reason'),
      'current_pressure_test_report_certificate_reason' => request('CPTRC_reason'),
      'current_three_years_income_tax_clearance_reason' => request('CTYITC_reason'),
      'appropriate_plant_photography_reason' => request('APP_reason'),
      'standard_operating_procedure_reason' => request('SOP_reason')
    ]);

    if(session('sub_category')){
      // retrieve the data from the about to be replaced lto license
      $obsoleteLicense = IssuedLtoLicense::where('application_id', session('application_id'))->first();
      // dd($obsoleteLicense);

      // add the retrieved data needed to the new renewed license
      LtoLicenseRenewal::create([
        'application_id' =>  session('application_id'),
        'comp_license_id' => session('app_id'),
        'marketer_id' => Auth::user()->staff_id,
        'company_id' => $obsoleteLicense->company_id,
        'copy_of_last_expired_license' => 'yes',
        'copy_of_last_expired_license_location_url' => $obsoleteLicense->license_url,
        'previous_date_issued' => $obsoleteLicense->date_issued,
        'previous_expiry_date' => $obsoleteLicense->expiry_date
      ]);
    }

    // clear the application ID from the session
    $request->session()->forget(['application_id','sub_category', 'app_id']);

    if (Auth::user()->role == 'Marketer') {
      return redirect('/marketer');
    } elseif (Auth::user()->role == 'Staff') {
      return redirect('/staff');
    }

  }


  public function handleTakeoverPhase1(Request $request){

    // dd($request);

    $this->validate(request(), [
      'gas_plant_name' => 'required',
      'company_id' => 'required',
      'gas_plant_name' => 'required',
      'new_name_of_gas_plant' => 'required',
      'capacity_of_tank' => 'required',
      'last_lto_issue_date' => 'required',
      'expiry_date_of_lto' => 'required'
    ]);

    $proposedCompany = Company::where('company_id', request('company_id'))->first();

    if($proposedCompany == null){
      // dd($proposedCompany);
      // return with errors
      return back();
    }else{
      // dd($proposedCompany);
      // getting the current number of created applications
      $applicationCount = DB::table('app_doc_reviews')->get();

      // adding 1 to that number
      $indexIncremented = $applicationCount->count() + 1;

      // padding the number to 4 leading zeros
      $newApplicationIndex = sprintf('%05d', $indexIncremented);

      //appending the new application index to DPRCOMP to create the applications's ID
      $applicationID = "DPRAPPLICATION".$newApplicationIndex;

      // add the application ID to session
      session(['application_id'=>$applicationID]);

      // +++++ might need to do some custom verification here with decision statements
      AppDocReview::create([
        'application_id' => $applicationID,
        'marketer_id' => Auth::user()->staff_id,
        'company_id' => request('company_id'),
        'name_of_gas_plant' => request('gas_plant_name'),
        'application_type' => request('application_type'),
        'sub_category' => request('sub_category'),
        'plant_type' => request('lpg_category'),
        'capacity_of_tank' => request('capacity_of_tank'),
        'state' => request('state'),
        'lga' => request('lga'),
        'town' => request('town'),
        'address' => request('address'),
        'application_status' => 'Not Submitted'
      ]);

      // Note conversion from javascript date to php date was carried out below.

      TakeoverReviews::create([
        'application_id' => $applicationID,
        'marketer_id' => Auth::user()->staff_id,
        'company_id' => request('company_id'),
        'new_name_of_gas_plant' => request('new_name_of_gas_plant'),
        'company_alias' => request('company_alias'),
        'lpg_category' => request('lpg_category'),
        'last_lto_issue_date' => date('Y-m-d', strtotime(request('last_lto_issue_date'))),
        'expiry_date_of_lto' => date('Y-m-d', strtotime(request('expiry_date_of_lto')))
      ]);

      return redirect('/takeover_requirement');
    }





  }

  public function handleTakeover(Request $request){
    // dd($request);
    $aamoaDoc = $ciDoc = $wamvcDoc = $cptrcDoc = $appDoc = $cafDoc = $bsfpDoc = $mpDoc = $ctcDoc = $cfrcDoc = $olpDoc = $lorDoc = $prcDoc = $abpDoc = $eerDoc = $alDoc = 'null';
    $marketerID = Auth::user()->staff_id;

    // Below are just decision statements to check if actually a file has been uploaded and can be stored to the specified destination
    if($request->hasFile('AAMOA_doc')){
      $request->AAMOA_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->AAMOA_doc->getClientOriginalName());
      $aamoaDoc = $request->AAMOA_doc->getClientOriginalName();
    }

    if($request->hasFile('CI_doc')){
      $request->CI_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->CI_doc->getClientOriginalName());
      $ciDoc = $request->CI_doc->getClientOriginalName();
    }

    if($request->hasFile('WAMVC_doc')){
      $request->WAMVC_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->WAMVC_doc->getClientOriginalName());
      $wamvcDoc = $request->WAMVC_doc->getClientOriginalName();
    }

    if($request->hasFile('CPTRC_doc')){
      $request->CPTRC_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->CPTRC_doc->getClientOriginalName());
      $cptrcDoc = $request->CPTRC_doc->getClientOriginalName();
    }

    if($request->hasFile('APP_doc')){
      $request->APP_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->APP_doc->getClientOriginalName());
      $appDoc = $request->APP_doc->getClientOriginalName();
    }

    if($request->hasFile('CAF_doc')){
      $request->CAF_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->CAF_doc->getClientOriginalName());
      $cafDoc = $request->CAF_doc->getClientOriginalName();
    }

    if($request->hasFile('BSFP_doc')){
      $request->BSFP_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->BSFP_doc->getClientOriginalName());
      $bsfpDoc = $request->BSFP_doc->getClientOriginalName();
    }

    if($request->hasFile('MP_doc')){
      $request->MP_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->MP_doc->getClientOriginalName());
      $mpDoc = $request->MP_doc->getClientOriginalName();
    }

    if($request->hasFile('CTC_doc')){
      $request->CTC_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->CTC_doc->getClientOriginalName());
      $ctcDoc = $request->CTC_doc->getClientOriginalName();
    }

    if($request->hasFile('CFRC_doc')){
      $request->CFRC_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->CFRC_doc->getClientOriginalName());
      $cfrcDoc = $request->CFRC_doc->getClientOriginalName();
    }

    if($request->hasFile('OLP_doc')){
      $request->OLP_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->OLP_doc->getClientOriginalName());
      $olpDoc = $request->OLP_doc->getClientOriginalName();
    }

    if($request->hasFile('LOR_doc')){
      $request->LOR_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->LOR_doc->getClientOriginalName());
      $lorDoc = $request->LOR_doc->getClientOriginalName();
    }

    if($request->hasFile('PRC_doc')){
      $request->PRC_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->PRC_doc->getClientOriginalName());
      $prcDoc = $request->PRC_doc->getClientOriginalName();
    }

    if($request->hasFile('ABP_doc')){
      $request->ABP_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->ABP_doc->getClientOriginalName());
      $abpDoc = $request->ABP_doc->getClientOriginalName();
    }

    if($request->hasFile('EER_doc')){
      $request->EER_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->EER_doc->getClientOriginalName());
      $eerDoc = $request->EER_doc->getClientOriginalName();
    }

    if($request->hasFile('AL_doc')){
      $request->AL_doc->storeAs('comp_docs/'.$marketerID.'/'.session('application_id'), $request->AL_doc->getClientOriginalName());
      $alDoc = $request->AL_doc->getClientOriginalName();
    }


    TakeoverInspectionDocuments::create([
      'application_id' => session('application_id'),
      'marketer_id' => $marketerID,
      'article_and_memorandum_of_association' => request('AAMOA'),
      'certificate_of_incorporation' => request('CI'),
      'weight_measures_verification_certificate' => request('WAMVC'),
      'current_pressure_test_certificate' => request('CPTRC'),
      'appropriate_plant_photography' => request('APP'),
      'completed_application_form' => request('CAF'),
      'bankdraft_of_statutory_fees' => request('BSFP'),
      'modification_plant' => request('MP'),
      'current_tax_clearance_certificate' => request('CTC'),
      'current_fire_report_certificate' => request('CFRC'),
      'original_license_of_plant' => request('OLP'),
      'letter_of_release' => request('LOR'),
      'police_report_certificate' => request('PRC'),
      'approved_building_plan' => request('ABP'),
      'environment_evaluation_report' => request('EER'),
      'application_letter' => request('AL'),
      'article_and_memorandum_of_association_location_url' => $aamoaDoc,
      'certificate_of_incorporation_location_url' => $ciDoc,
      'weight_measures_verification_certificate_location_url' => $wamvcDoc,
      'current_pressure_test_certificate_location_url' => $cptrcDoc,
      'appropriate_plant_photography_location_url' => $appDoc,
      'completed_application_form_location_url' => $cafDoc,
      'bankdraft_of_statutory_fees_location_url' => $bsfpDoc,
      'modification_plant_location_url' => $mpDoc,
      'current_tax_clearance_certificate_location_url' => $ctcDoc,
      'current_fire_report_certificate_location_url' => $cfrcDoc,
      'original_license_of_plant_location_url' => $olpDoc,
      'letter_of_release_location_url' => $lorDoc,
      'police_report_certificate_location_url' => $prcDoc,
      'approved_building_plan_location_url' => $abpDoc,
      'environment_evaluation_report_location_url' => $eerDoc,
      'application_letter_location_url' => $alDoc,
      'article_and_memorandum_of_association_reason' => request('AAMOA_reason'),
      'certificate_of_incorporation_reason' => request('CI_reason'),
      'weight_measures_verification_certificate_reason' => request('WAMVC_reason'),
      'current_pressure_test_certificate_reason' => request('CPRTC_reason'),
      'appropriate_plant_photography_reason' => request('APP_reason'),
      'completed_application_form_reason' => request('CAF_reason'),
      'bankdraft_of_statutory_fees_reason' => request('BSFP_reason'),
      'modification_plant_reason' => request('MP_reason'),
      'current_tax_clearance_certificate_reason' => request('CTC_reason'),
      'current_fire_report_certificate_reason' => request('CFRC_reason'),
      'original_license_of_plant_reason' => request('OLP_reason'),
      'letter_of_release_reason' => request('LOR_reason'),
      'police_report_certificate_reason' => request('PRC_reason'),
      'approved_building_plan_reason' => request('ABP_reason'),
      'environment_evaluation_report_reason' => request('EER_reason'),
      'application_letter_reason' => request('AL_reason')
    ]);

    // clear the application ID from the session
    $request->session()->forget('application_id');

    return redirect('/marketer');

  }


  public function handlePressureTestPhase1(Request $request){



    // dd($request);


    $this->validate(request(), [
      'atc_application_id' => 'required'
    ]);

    // retrieve the ATC application_id from AppDocReviews and check if ATC is issued
    $retrievedATC = AppDocReview::where([
      ['application_id', request('atc_application_id')],
      ['application_status','ATC Issued']
    ])->first();

    // dd($retrievedATC);
    if($retrievedATC == null){
      dd('here1');
      // return back with a custom error === This ATC is ethier invalid or has not been issued
      // return back();
    }else{
      // dd('here2');
      // check for due date
      $currentYear = Carbon::now()->year;
      $manufactureYear = request('manufacture_year');

      $tankAge = $currentYear - $manufactureYear;
      $dateLastTested = date('Y-m-d', strtotime(request('date_last_tested')));  // this is in javascript time.....converted to PHP datetime

      if($tankAge < 20){
        // if the year of manufacture is not up to 20 years, pressure test should be carried out every 5 years
        $dueDate = Carbon::createFromFormat('Y-m-d', $dateLastTested)->addYears(5);  // set due date to 5 years upfront of date last tested
        $dueDate = date('Y-m-d', strtotime($dueDate));
      }elseif ($tankAge >= 20) {
        // if the year of manufacture is up to 20 years and above, pressure test should be carried out every 30 months
        $dueDate = Carbon::createFromFormat('Y-m-d', $dateLastTested)->addMonths(30);  // set due date to 30 months upfront of date last tested
        $dueDate = date('Y-m-d', strtotime($dueDate));
      }

      $tcrDoc =
      'null';
      $marketerID = Auth::user()->staff_id;

      $applicationCount = DB::table('app_doc_reviews')->get();

      // adding 1 to that number
      $indexIncremented = $applicationCount->count() + 1;

      // padding the number to 4 leading zeros
      $newApplicationIndex = sprintf('%05d', $indexIncremented);

      //appending the new application index to DPRCOMP to create the applications's ID
      $applicationID = "DPRAPPLICATION".$newApplicationIndex;



      // add the application ID   to session
      session(['application_id'=>$applicationID]);

      // dd($applicationID);

      // +++++ might need to do so me  custom verification here with decision statements
      AppDocReview::create([
        'application_id' => $applicationID,
        'marketer_id' => $marketerID,
        'office' => $retrievedATC->office,
        'company_id' => $retrievedATC->company_id,
        'name_of_gas_plant' => $retrievedATC->name_of_gas_plant,
        'application_type' => request('application_type'),
        'sub_category' => request('sub_category'),
        'plant_type' => $retrievedATC->plant_type,
        'capacity_of_tank' => $retrievedATC->capacity_of_tank,
        'state' => $retrievedATC->state,
        'lga' => $retrievedATC->lga,
        'town' => $retrievedATC->town,
        'address' => $retrievedATC->address,
        'application_status' => 'Not Submitted',
        'to_zopscon' => 'true'
      ]);

      // this is the id of the pressure test application from app doc rev db
      // $app_id = AppDocReview::where('application_id', $applicationID)->first();

      // Inbox::create([
      //   'application_id' => $app_id->id,
      //   'to' => 'NA',
      //   'from' => Auth::user()->staff_id,
      //   'receiver_role' => 'ZOPSCON',
      //   'sender_role' => Auth::user()->role,
      //   'office' => 'Warri',
      //   'read' => 'false',
      //   'to_outbox' => 'false'
      // ]);


      // dd('here3');
      // $request->TCR_doc->storeAs('press$appDocReviewsLTO$appDocReviewsLTOure_test_docs/'.$marketerID.'/'.request('atc_application_id'), $request->TCR_doc->getClientOriginalName());

      // if($request->hasFile('TCR_doc')){
      //   $request->TCR_doc->storeAs('pressure_test_docs/'.$marketerID.'/'.request('atc_application_id'), $request->TCR_doc->getClientOriginalName());
      //   $tcrDoc = $request->TCR_doc->getClientOriginalName();
      // }

      if($request->hasFile('AL_doc')){
        $request->AL_doc->storeAs('pressure_test_docs/'.$marketerID.'/'.request('company_name').'/'. $applicationID, $request->AL_doc->getClientOriginalName());
        $alDoc = $request->AL_doc->getClientOriginalName();
      }

      // insert records into the pressure_test_records database

      PressureTestRecords::create([
        'application_id' => $applicationID,
        'atc_application_id' => request('atc_application_id'),
        'marketer_id' => $marketerID,
        'company_name' => request('company_name'),
        'equipment_name' => request('equipment_name'),
        'facility_name' => $retrievedATC->name_of_gas_plant,
        'test_type' => request('test_type'),
        'tag_number' => request('tag_number'),
        'manufacture_year' => $manufactureYear,
        'commission_year' => request('commission_year'),
        'design_pressure' => request('design_pressure'),
          // 'test_pressure' => request('test_pressure')
          // 'date_last_tested' => $dateLastTested,
          // 'due_date' => $dueDate,
        'application_letter_location_url' => $alDoc
        ]);



        return redirect('/marketer');

      // Below are just decision statements to check if actually a file has been uploaded and can be stored to the specified destination
      // if($request->hasFile('TCR_doc')){
        
      // }else{
      //   dd('here4');
      //   // return back with a custom error === Please upload test report
      //   // return back();
      // }



    }

  }


  public function applicationDocumentReviewPhaseUpdate(Request $request){
    // dd($request);

    if(request('doc_type') == 'null'){
      // send back to view with error messages
      return back();
    }else{
      $updatedDoc = '';

      if($request->hasFile('updatedDocument')){
        $request->updatedDocument->storeAs('comp_docs/'.request('marketer_id').'/'.request('application_id'), $request->updatedDocument->getClientOriginalName());

        $updatedDoc = $request->updatedDocument->getClientOriginalName();
      }

      if(request('sub_category') == "Site Suitability Inspection"){
        SiteSuitabilityInspectionDocuments::where('application_id', request('application_id'))
        ->update([
          request('doc_type') => request('selectedOption'),
          request('doc_type').'_location_url' => $updatedDoc
        ]);
      }elseif (request('sub_category') == "ATC") {
        // dd($request);
        AtcInspectionDocuments::where('application_id', request('application_id'))
        ->update([
          request('doc_type') => request('selectedOption'),
          request('doc_type').'_reason' => request('reason'),
          request('doc_type').'_location_url' => $updatedDoc
        ]);
      }elseif (request('sub_category') == "LTO") {
        // dd($request);
        LtoInspectionDocument::where('application_id', request('application_id'))
        ->update([
          request('doc_type') => request('selectedOption'),
          request('doc_type').'_reason' => request('reason'),
          request('doc_type').'_location_url' => $updatedDoc
        ]);
      }elseif (request('sub_category') == "Take Over") {
        // dd($request);
        TakeoverInspectionDocuments::where('application_id', request('application_id'))
        ->update([
          request('doc_type') => request('selectedOption'),
          request('doc_type').'_reason' => request('reason'),
          request('doc_type').'_location_url' => $updatedDoc
        ]);
      }



      return redirect('/marketer_app_doc_review');
    }

  }


  public function applicationDocumentReviewPhaseUpdate2(Request $request){
    // dd($request);

    //++++++++++++++++++ validations missing

    AppDocReview::where('application_id', request('application_id'))
    ->update([
      'name_of_gas_plant' => request('gas_plant_name'),
      'plant_type' => request('plant_type'),
      'capacity_of_tank' => request('capacity_of_tank'),
      'state' => request('state'),
      'lga' => request('lga'),
      'town' => request('town'),
      'address' => request('address')
    ]);

    return back();

  }




  public function marketerUploadDocumentsView(){
    return view('backend.marketer.marketer_upload_documents');
  }


  public function submitApplicationRequest(Request $request){
    // dd($request);

    // we would provide option for the marketer to be able to select the office/location this application is being made to

    AppDocReview::where('id', request('application_id'))
    ->update([
      'application_status' => 'Application Pending',
      'to_zopscon' => 'true'
    ]);

    Inbox::create([
      'application_id' => request('application_id'),
      'to' => 'NA',
      'from' => Auth::user()->staff_id,
      'receiver_role' => 'ZOPSCON',
      'sender_role' => Auth::user()->role,
      'office' => 'Warri',
      'read' => 'false',
      'to_outbox' => 'false'
    ]);

    if (Auth::user()->role == 'Marketer') {
      return redirect('/marketer');
    } elseif (Auth::user()->role == 'Staff') {
      return redirect('/staff');
    }

  }

  public function uploadImplementationSchedule(Request $request){
    // dd($request);
    $implementation_schedule = "";
    // check if request has the document
    if($request->hasFile('implementationScheduleDoc')){
      // store the document to the company folder in company reports folder
      $request->implementationScheduleDoc->storeAs('implementation_schedules/'.request('company_id').'/'.request('application_id'), $request->implementationScheduleDoc->getClientOriginalName());

      $implementation_schedule = $request->implementationScheduleDoc->getClientOriginalName();

      // upload the implementation schedule
      IssuedAtcLicense::where('application_id', request('application_id'))
      ->update([
        'implementation_schedule' => $implementation_schedule
      ]);

      // forward the application to manager gas of that zone that appliction was made

      $application = AppDocReview::where('application_id', request('application_id'))->first();

      Inbox::create([
        'application_id' => $application->id,
        'to' => 'NA',
        'from' => Auth::user()->staff_id,
        'receiver_role' => 'Manager Gas',
        'sender_role' => Auth::user()->role,
        'office' => 'Warri',
        'read' => 'false',
        'to_outbox' => 'false'
      ]);


      return back();
    }else{
      // return back with errors
      return back();
    }
  }


  public function applyForATC(Request $request){
    // dd($request);
    // $testCase = DB::table('job_assignments')
    // ->join('report_documents', 'report_documents.application_id', '=', 'job_assignments.application_id')
    // ->get();



    // retrieve site suitability fields for this company from app_doc_reviews using the application_id from request
    $companySSIDetails = AppDocReview::where('application_id', request('application_id'))->first();

    // create a new application for ATC for this company inside app_doc_reviews (Set status to Not Submitted)
    // getting the current number of created applications
    $applicationCount = DB::table('app_doc_reviews')->get();

    // adding 1 to that number
    $indexIncremented = $applicationCount->count() + 1;

    // padding the number to 4 leading zeros
    $newApplicationIndex = sprintf('%05d', $indexIncremented);

    //appending the new application index to DPRAPPLICATION to create the applications's ID
    $applicationID = "DPRAPPLICATION".$newApplicationIndex;

    // add the application ID to session
    // session(['application_id'=>$applicationID]);
    // dd($companySSIDetails);

    // +++++ might need to do some custom verification here with decision statements
    AppDocReview::create([
      'application_id' => $applicationID,
      'marketer_id' => Auth::user()->staff_id,
      'company_id' => $companySSIDetails->company_id,
      'name_of_gas_plant' => $companySSIDetails->name_of_gas_plant,
      'application_type' => $companySSIDetails->application_type,
      'sub_category' => 'ATC',
      'plant_type' => $companySSIDetails->plant_type,
      'state' => $companySSIDetails->state,
      'lga' => $companySSIDetails->lga,
      'town' => $companySSIDetails->town,
      'address' => $companySSIDetails->address,
      'application_status' => 'Not Submitted'
    ]);

    // Carry out file transfer process from site_suitability_inspection_documents to atc_inspection_documents
    $companySSIDocuments = SiteSuitabilityInspectionDocuments::where('application_id', request('application_id'))->first();
    $mID = $companySSIDocuments->marketer_id; // marketer's id
    $cID = $companySSIDocuments->company_id; // company's id
    $aID = $companySSIDocuments->application_id; // company's id


    if($companySSIDocuments->applications_letter_for_suitability_inspection_location_url != "null"){
      Storage::copy('comp_docs/'.$mID.'/'.$aID.'/'.$companySSIDocuments->applications_letter_for_suitability_inspection_location_url, 'comp_docs/'.$mID.'/'.$applicationID.'/'.$companySSIDocuments->applications_letter_for_suitability_inspection_location_url);
    }

    if($companySSIDocuments->article_and_memorandum_of_association_location_url != "null"){
      Storage::copy('comp_docs/'.$mID.'/'.$aID.'/'.$companySSIDocuments->article_and_memorandum_of_association_location_url, 'comp_docs/'.$mID.'/'.$applicationID.'/'.$companySSIDocuments->article_and_memorandum_of_association_location_url);
    }

    if($companySSIDocuments->current_tax_clearance_location_url != "null"){
      Storage::copy('comp_docs/'.$mID.'/'.$aID.'/'.$companySSIDocuments->current_tax_clearance_location_url, 'comp_docs/'.$mID.'/'.$applicationID.'/'.$companySSIDocuments->current_tax_clearance_location_url);
    }

    if($companySSIDocuments->certificate_of_incorporation_location_url != "null"){
      Storage::copy('comp_docs/'.$mID.'/'.$aID.'/'.$companySSIDocuments->certificate_of_incorporation_location_url, 'comp_docs/'.$mID.'/'.$applicationID.'/'.$companySSIDocuments->certificate_of_incorporation_location_url);
    }

    if($companySSIDocuments->fire_certificate_location_url != "null"){
      Storage::copy('comp_docs/'.$mID.'/'.$aID.'/'.$companySSIDocuments->fire_certificate_location_url, 'comp_docs/'.$mID.'/'.$applicationID.'/'.$companySSIDocuments->fire_certificate_location_url);
    }

    if($companySSIDocuments->police_report_location_url != "null"){
      Storage::copy('comp_docs/'.$mID.'/'.$aID.'/'.$companySSIDocuments->police_report_location_url, 'comp_docs/'.$mID.'/'.$applicationID.'/'.$companySSIDocuments->police_report_location_url);
    }

    if($companySSIDocuments->completed_application_form_location_url != "null"){
      Storage::copy('comp_docs/'.$mID.'/'.$aID.'/'.$companySSIDocuments->completed_application_form_location_url, 'comp_docs/'.$mID.'/'.$applicationID.'/'.$companySSIDocuments->completed_application_form_location_url);
    }

    if($companySSIDocuments->approved_building_plan_location_url != "null"){
      Storage::copy('comp_docs/'.$mID.'/'.$aID.'/'.$companySSIDocuments->approved_building_plan_location_url, 'comp_docs/'.$mID.'/'.$applicationID.'/'.$companySSIDocuments->approved_building_plan_location_url);
    }

    if($companySSIDocuments->survey_plan_location_url != "null"){
      Storage::copy('comp_docs/'.$mID.'/'.$aID.'/'.$companySSIDocuments->survey_plan_location_url, 'comp_docs/'.$mID.'/'.$applicationID.'/'.$companySSIDocuments->survey_plan_location_url);
    }

    if($companySSIDocuments->deed_of_conveyance_location_url != "null"){
      Storage::copy('comp_docs/'.$mID.'/'.$aID.'/'.$companySSIDocuments->deed_of_conveyance_location_url, 'comp_docs/'.$mID.'/'.$applicationID.'/'.$companySSIDocuments->deed_of_conveyance_location_url);
    }

    if($companySSIDocuments->piping_and_instrumentation_diagram_location_url != "null"){
      Storage::copy('comp_docs/'.$mID.'/'.$aID.'/'.$companySSIDocuments->piping_and_instrumentation_diagram_location_url, 'comp_docs/'.$mID.'/'.$applicationID.'/'.$companySSIDocuments->piping_and_instrumentation_diagram_location_url);
    }

    if($companySSIDocuments->environmental_impact_accessment_location_url != "null"){
      Storage::copy('comp_docs/'.$mID.'/'.$aID.'/'.$companySSIDocuments->environmental_impact_accessment_location_url, 'comp_docs/'.$mID.'/'.$applicationID.'/'.$companySSIDocuments->environmental_impact_accessment_location_url);
    }

    if($companySSIDocuments->bankdraft_of_statutory_fees_location_url != "null"){
      Storage::copy('comp_docs/'.$mID.'/'.$aID.'/'.$companySSIDocuments->bankdraft_of_statutory_fees_location_url, 'comp_docs/'.$mID.'/'.$applicationID.'/'.$companySSIDocuments->bankdraft_of_statutory_fees_location_url);
    }

    if($companySSIDocuments->letter_confirmation_ministry_of_lands_and_survey_location_url != "null"){
      Storage::copy('comp_docs/'.$mID.'/'.$aID.'/'.$companySSIDocuments->letter_confirmation_ministry_of_lands_and_survey_location_url, 'comp_docs/'.$mID.'/'.$applicationID.'/'.$companySSIDocuments->letter_confirmation_ministry_of_lands_and_survey_location_url);
    }

    if($companySSIDocuments->codes_and_standard_adopted_in_the_tank_design_location_url != "null"){
      Storage::copy('comp_docs/'.$mID.'/'.$aID.'/'.$companySSIDocuments->codes_and_standard_adopted_in_the_tank_design_location_url, 'comp_docs/'.$mID.'/'.$applicationID.'/'.$companySSIDocuments->codes_and_standard_adopted_in_the_tank_design_location_url);
    }

    if($companySSIDocuments->application_letter_addressed_to_the_controller_location_url != "null"){
      Storage::copy('comp_docs/'.$mID.'/'.$aID.'/'.$companySSIDocuments->application_letter_addressed_to_the_controller_location_url, 'comp_docs/'.$mID.'/'.$applicationID.'/'.$companySSIDocuments->application_letter_addressed_to_the_controller_location_url);
    }

    AtcInspectionDocuments::create([
      'application_id' => $applicationID,
      'marketer_id' => $mID,
      'company_id' => $cID,
      'applications_letter_for_suitability_inspection' => $companySSIDocuments->applications_letter_for_suitability_inspection,
      'article_and_memorandum_of_association' => $companySSIDocuments->article_and_memorandum_of_association,
      'current_tax_clearance' => $companySSIDocuments->current_tax_clearance,
      'certificate_of_incorporation' => $companySSIDocuments->certificate_of_incorporation,
      'fire_certificate' => $companySSIDocuments->fire_certificate,
      'police_report' => $companySSIDocuments->police_report,
      'completed_application_form' => $companySSIDocuments->completed_application_form,
      'approved_building_plan' => $companySSIDocuments->approved_building_plan,
      'survey_plan' => $companySSIDocuments->survey_plan,
      'deed_of_conveyance' => $companySSIDocuments->deed_of_conveyance,
      'piping_and_instrumentation_diagram' => $companySSIDocuments->piping_and_instrumentation_diagram,
      'environmental_impact_accessment' => $companySSIDocuments->environmental_impact_accessment,
      'bankdraft_of_statutory_fees' => $companySSIDocuments->bankdraft_of_statutory_fees,
      'letter_confirmation_ministry_of_lands_and_survey' => $companySSIDocuments->letter_confirmation_ministry_of_lands_and_survey,
      'codes_and_standard_adopted_in_the_tank_design' => $companySSIDocuments->codes_and_standard_adopted_in_the_tank_design,
      'application_letter_addressed_to_the_controller' => $companySSIDocuments->application_letter_addressed_to_the_controller,
      'applications_letter_for_suitability_inspection_location_url' => $companySSIDocuments->applications_letter_for_suitability_inspection_location_url,
      'article_and_memorandum_of_association_location_url' => $companySSIDocuments->article_and_memorandum_of_association_location_url,
      'current_tax_clearance_location_url' => $companySSIDocuments->current_tax_clearance_location_url,
      'certificate_of_incorporation_location_url' => $companySSIDocuments->certificate_of_incorporation_location_url,
      'fire_certificate_location_url' => $companySSIDocuments->fire_certificate_location_url,
      'police_report_location_url' => $companySSIDocuments->police_report_location_url,
      'completed_application_form_location_url' => $companySSIDocuments->completed_application_form_location_url,
      'approved_building_plan_location_url' => $companySSIDocuments->approved_building_plan_location_url,
      'survey_plan_location_url' => $companySSIDocuments->survey_plan_location_url,
      'deed_of_conveyance_location_url' => $companySSIDocuments->deed_of_conveyance_location_url,
      'piping_and_instrumentation_diagram_location_url' => $companySSIDocuments->piping_and_instrumentation_diagram_location_url,
      'environmental_impact_accessment_location_url' => $companySSIDocuments->environmental_impact_accessment_location_url,
      'bankdraft_of_statutory_fees_location_url' => $companySSIDocuments->bankdraft_of_statutory_fees_location_url,
      'letter_confirmation_ministry_of_lands_and_survey_location_url' => $companySSIDocuments->letter_confirmation_ministry_of_lands_and_survey_location_url,
      'codes_and_standard_adopted_in_the_tank_design_location_url' => $companySSIDocuments->codes_and_standard_adopted_in_the_tank_design_location_url,
      'application_letter_addressed_to_the_controller_location_url' => $companySSIDocuments->application_letter_addressed_to_the_controller_location_url,
    ]);

    // return to marketer dashboard
    return redirect('/marketer');


  }


  public function applyForLTO(Request $request){

    // dd($request);

    // retrieve site suitability fields for this company from app_doc_reviews using the application_id from request
    $companyATODetails = AppDocReview::where('application_id', request('application_id'))->first();

    // create a new application for ATC for this company inside app_doc_reviews (Set status to Not Submitted)
    // getting the current number of created applications
    $applicationCount = DB::table('app_doc_reviews')->get();

    // adding 1 to that number
    $indexIncremented = $applicationCount->count() + 1;

    // padding the number to 4 leading zeros
    $newApplicationIndex = sprintf('%05d', $indexIncremented);

    //appending the new application index to DPRAPPLICATION to create the applications's ID
    $applicationID = "DPRAPPLICATION".$newApplicationIndex;

    // add the application ID to session
    // session(['application_id'=>$applicationID]);

    // +++++ might need to do some custom verification here with decision statements
    AppDocReview::create([
      'application_id' => $applicationID,
      'marketer_id' => Auth::user()->staff_id,
      'company_id' => $companyATODetails->company_id,
      'name_of_gas_plant' => $companyATODetails->name_of_gas_plant,
      'application_type' => $companyATODetails->application_type,
      'sub_category' => 'LTO',
      'capacity_of_tank' => request('capacity_of_tank'),
      'plant_type' => $companyATODetails->plant_type,
      'state' => $companyATODetails->state,
      'lga' => $companyATODetails->lga,
      'town' => $companyATODetails->town,
      'address' => $companyATODetails->address,
      'application_status' => 'Not Submitted'
    ]);

    // add the application ID to session
    session(['application_id'=>$applicationID]);


    // redirect the marketer to uploads area
    return redirect('/lto_requirement');


  }

  public function applyForLTORenewal(Request $request){
    // dd($request);

    // retrieve lto fields for this company from app_doc_reviews using the application_id from request
    $companyATODetails = AppDocReview::where('application_id', request('application_id'))->first();

    // create a new application for Renewal for this company inside app_doc_reviews (Set status to Not Submitted)
    // getting the current number of created applications
    $applicationCount = DB::table('app_doc_reviews')->get();

    // adding 1 to that number
    $indexIncremented = $applicationCount->count() + 1;

    // padding the number to 4 leading zeros
    $newApplicationIndex = sprintf('%05d', $indexIncremented);

    //appending the new application index to DPRAPPLICATION to create the applications's ID
    $applicationID = "DPRAPPLICATION" . $newApplicationIndex;

    // add the application ID to session
    // session(['application_id'=>$applicationID]);

    // +++++ might need to do some custom verification here with decision statements
    AppDocReview::create([
      'application_id' => $applicationID,
      'marketer_id' => Auth::user()->staff_id,
      'company_id' => $companyATODetails->company_id,
      'office' => $companyATODetails->office,
      'name_of_gas_plant' => $companyATODetails->name_of_gas_plant,
      'application_type' => $companyATODetails->application_type,
      'sub_category' => 'Renewal',
      'capacity_of_tank' => $companyATODetails->capacity_of_tank,
      'plant_type' => $companyATODetails->plant_type,
      'state' => $companyATODetails->state,
      'lga' => $companyATODetails->lga,
      'town' => $companyATODetails->town,
      'address' => $companyATODetails->address,
      'application_status' => 'Not Submitted'
    ]);

    // add the application ID to session
    session(['application_id' => $applicationID, 'app_id' => $companyATODetails->application_id, 'sub_category' => 'Renewal']);


    // redirect the marketer to uploads area
    return redirect('/lto_requirement');
  }


  public function OldapplyForLTORenewalOLD(Request $request){ // deprecated
    dd($request);
    if(request('COLEL_doc') && request('PR_doc')){

      // retrieve site suitability fields for this company from app_doc_reviews using the application_id from request
      $companyATODetails = AppDocReview::where('application_id', request('application_id'))->first();

      // create a new application for ATC for this company inside app_doc_reviews (Set status to Not Submitted)
      // getting the current number of created applications
      $applicationCount = DB::table('app_doc_reviews')->get();

      // adding 1 to that number
      $indexIncremented = $applicationCount->count() + 1;

      // padding the number to 4 leading zeros
      $newApplicationIndex = sprintf('%05d', $indexIncremented);

      //appending the new application index to DPRAPPLICATION to create the applications's ID
      $applicationID = "DPRAPPLICATION".$newApplicationIndex;

      // add the application ID to session
      // session(['application_id'=>$applicationID]);
      $marketerID = Auth::user()->staff_id;

      // +++++ might need to do some custom verification here with decision statements
      AppDocReview::create([
        'application_id' => $applicationID,
        'marketer_id' => $marketerID,
        'company_id' => $companyATODetails->company_id,
        'name_of_gas_plant' => $companyATODetails->name_of_gas_plant,
        'application_type' => 'LPG Retailer Outlets',
        'sub_category' => 'Renewal',
        'plant_type' => $companyATODetails->plant_type,
        'state' => $companyATODetails->state,
        'lga' => $companyATODetails->lga,
        'town' => $companyATODetails->town,
        'address' => $companyATODetails->address,
        'application_status' => 'Not Submitted'
      ]);

      // dd($request);
      $colelDoc = $prDoc = 'null';


      // Below are just decision statements to check if actually a file has been uploaded and can be stored to the specified destination
      if($request->hasFile('COLEL_doc')){
        $request->COLEL_doc->storeAs('license_docs/'.$marketerID.'/'.$applicationID, $request->COLEL_doc->getClientOriginalName());
        $colelDoc = $request->COLEL_doc->getClientOriginalName().Carbon::now();
      }

      if($request->hasFile('PR_doc')){
        $request->PR_doc->storeAs('license_docs/'.$marketerID.'/'.$applicationID, $request->PR_doc->getClientOriginalName().Carbon::now());
        $prDoc = $request->PR_doc->getClientOriginalName();
      }

      LtoLicenseRenewal::create([
        'application_id' => $applicationID,
        'comp_license_id' => $companyATODetails->application_id,
        'marketer_id' => $marketerID,
        'company_id' => $companyATODetails->company_id,
        'copy_of_last_expired_license' => 'yes',
        'payment_receipt' => 'yes',
        'copy_of_last_expired_license_location_url' => $colelDoc,
        'payment_receipt_location_url' => $prDoc
      ]);

      // clear the application ID from the session
      $request->session()->forget('application_id');

      return redirect('/marketer');

    }else{
      // return with error messages
      return back();
    }



  }




  public function viewAllLTO(){
    $appDocReviewsLTO = DB::table('app_doc_reviews')
    ->rightJoin('issued_lto_licenses', 'issued_lto_licenses.company_id', '=', 'app_doc_reviews.company_id')
    ->select('app_doc_reviews.*','issued_lto_licenses.expiry_date','issued_lto_licenses.date_issued')
    ->where([['application_status','LTO Issued'],['marketer_id', Auth::user()->staff_id]])
    ->get();    // get all application requests

    // dd($appDocReviewsLTO);
    return view('backend.general.view_all_lto', compact('appDocReviewsLTO'));
  }



}


