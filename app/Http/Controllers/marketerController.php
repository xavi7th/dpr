<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\AppDocReview;
use DB;
use App\Staff;
use Auth;
use App\SiteSuitabilityInspectionDocuments;
use App\AtcInspectionDocuments;

class marketerController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }




  public function index(){
    $appDocReviews = AppDocReview::where('marketer_id', Auth::user()->staff_id)->get();
    return view('backend.marketer.marketer_dashboard', compact('appDocReviews'));
  }







  public function applicationDocumentReview(){
    return view('backend.marketer.application_document_review');
  }







  public function getSiteSuitablityInspectionView(){
    return view('backend.marketer.requirement_site_suitability_inspection');
  }



  public function getATCRequirementView(){
    return view('backend.marketer.requirement_atc');
  }




  public function showSiteSuitablityRequirement(SiteSuitabilityInspectionDocuments $applicationID){
    $applicationReview = AppDocReview::where('application_id', $applicationID->application_id)->first();
    return view('backend.marketer.view_application_docs', compact('applicationID','applicationReview'));
  }







  public function showSiteSuitablityRequirementDocEdit(SiteSuitabilityInspectionDocuments $applicationID){
    $applicationReview = AppDocReview::where('application_id', $applicationID->application_id)->first();
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
      'application_status' => 'Not Submited'
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








  public function handleSiteSuitablityInspectionPOST(Request $request){
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
      'applications_letter_for_suitability_inspection_location_url' => $ALFSIDoc,
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
      'applications_letter_for_suitability_inspection' => request('ALFSI_reason'),
      'article_and_memorandum_of_association' => request('AMA_reason'),
      'current_tax_clearance' => request('CTC_reason'),
      'certificate_of_incorporation' => request('CI_reason'),
      'fire_certificate' => request('FC_reason'),
      'police_report' => request('PRC_reason'),
      'completed_application_form' => request('CAF_reason'),
      'approved_building_plan' => request('ABP_reason'),
      'survey_plan' => request('SP_reason'),
      'deed_of_conveyance' => request('DC_reason'),
      'piping_and_instrumentation_diagram' => request('PID_reason'),
      'environmental_impact_accessment' => request('EIA_reason'),
      'bankdraft_of_statutory_fees' => request('BSFP_reason'),
      'letter_confirmation_ministry_of_lands_and_survey' => request('LCMLS_reason'),
      'codes_and_standard_adopted_in_the_tank_design' => request('CSATD_reason'),
      'application_letter_addressed_to_the_controller' => request('ALACD_reason')
    ]);

    // clear the application ID from the session
    $request->session()->forget('application_id');

    return redirect('/marketer');


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

    // if($alfsiDoc || $amaDoc || $ctcDoc || $ciDoc || $fcDoc || $prcDoc || $cafDoc || $abpDoc || $spDoc || $dcDoc || $pidDoc || $eiaDoc || $bsfpDoc || $lcmlsDoc || $csatdDoc || $alacdDoc == "null"){
    //
    //   dd();
    // }

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
      'applications_letter_for_suitability_inspection_location_url' => $ALFSIDoc,
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

      SiteSuitabilityInspectionDocuments::where('application_id', request('application_id'))
      ->update([
        request('doc_type') => request('selectedOption'),
        request('doc_type').'_location_url' => $updatedDoc
      ]);

      return redirect('/marketer');
    }

  }







  public function marketerUploadDocumentsView(){
    return view('backend.marketer.marketer_upload_documents');
  }







}
