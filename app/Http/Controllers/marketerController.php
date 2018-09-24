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
use Storage;

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
    $appDocReviews = AppDocReview::where('marketer_id', Auth::user()->staff_id)
    ->where('application_status', 'Application Pending')
    ->orWhere('application_status', 'Not Submitted')
    ->orWhere('application_status', 'ATC Not Issued')
    ->orWhere('application_status', 'LTO Not Issued')
    ->get();
    return view('backend.marketer.marketer_app_doc_review', compact('appDocReviews'));
  }



  public function applicationDocumentReview(){
    return view('backend.marketer.application_document_review');
  }




  public function LPGRetailerOutletView(){
    return view('backend.marketer.lpg_retailer_outlet_applications');
  }




  public function applyForSSIGet(){
    return view('backend.marketer.apply_for_site_suitability_inspection');
  }


  public function applyForATCGet(){
    return view('backend.marketer.apply_for_atc_get');
  }


  public function applyForLTOGet(){
    return view('backend.marketer.apply_for_lto_get');
  }





  public function getSiteSuitablityInspectionView(){
    return view('backend.marketer.requirement_site_suitability_inspection');
  }



  public function getATCRequirementView(){
    return view('backend.marketer.requirement_atc');
  }



  public function getLTORequirementView(){
    return view('backend.marketer.requirement_lto');
  }




  public function showDocumentsRequirement($id){
    $applicationReview = AppDocReview::where('id', $id)->first();

    if($applicationReview->sub_category == "Site Suitability Inspection"){
      $applicationID = SiteSuitabilityInspectionDocuments::where('application_id', $applicationReview->application_id)->first();
    }elseif($applicationReview->sub_category == "ATC") {
      $applicationID = AtcInspectionDocuments::where('application_id', $applicationReview->application_id)->first();
    }elseif($applicationReview->sub_category == "LTO") {
      $applicationID = LtoInspectionDocument::where('application_id', $applicationReview->application_id)->first();
    }

    return view('backend.marketer.view_application_docs', compact('applicationID','applicationReview'));
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

    return redirect('/marketer');

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

    // clear the application ID from the session
    $request->session()->forget('application_id');

    return redirect('/marketer');

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
      }



      return redirect('/marketer');
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

    AppDocReview::where('application_id', request('application_id'))
    ->update([
      'application_status' => 'Application Pending',
      'to_zopscon' => 'true'
    ]);

    return redirect('/marketer');

  }


  public function applyForATC(Request $request){
    // dd($request);
    // $testCase = DB::table('job_assignments')
    // ->join('report_documents', 'report_documents.application_id', '=', 'job_assignments.application_id')
    // ->get();



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







  public function viewAllLTO(){
    $appDocReviewsLTO = DB::table('app_doc_reviews')
    ->rightJoin('issued_lto_licenses', 'issued_lto_licenses.company_id', '=', 'app_doc_reviews.company_id')
    ->select('app_doc_reviews.*','issued_lto_licenses.expiry_date')
    ->where([['application_status','LTO Issued'],['marketer_id', Auth::user()->staff_id]])
    ->get();    // get all application requests

    // dd($appDocReviewsLTO);
    return view('backend.general.view_all_lto', compact('appDocReviewsLTO'));
  }



}
