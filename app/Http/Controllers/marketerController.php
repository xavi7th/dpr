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
    return view('backend.marketer.requirement_site_suitability_inspection_vue');
  }

  public function showMarketerRecords(){
    return view('backend.marketer.marketer_records');
  }

}
