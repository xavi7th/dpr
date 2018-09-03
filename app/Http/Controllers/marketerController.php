<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class marketerController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }

  public function index(){
    return view('backend.marketer.marketer_dashboard');
  }

  public function applicationDocumentReview(){
    return view('backend.marketer.application_document_review');
  }

  public function siteSuitablityRequirement(){
    return view('backend.marketer.requirement_site_suitability_inspection');
  }

  public function showMarketerRecords(){
    return view('backend.marketer.marketer_records');
  }

  public function applicationDocumentReviewPhase1(Request $request){
    dd($request);
  }

  public function applicationDocumentReviewPhase2(Request $request){

    $comp = 'dprcomp0056'; // supposed to be the marketer ID
    $request->SVIR_doc->storeAs($comp, $request->SVIR_doc->getClientOriginalName());
    $request->AMA_doc->storeAs($comp, $request->AMA_doc->getClientOriginalName());
    $request->CTC_doc->storeAs($comp, $request->CTC_doc->getClientOriginalName());
    dd($request);
    // return view('backend.marketer.requirement_site_suitability_inspection_vue');
  }

}
