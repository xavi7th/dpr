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
use App\HodLpgDocument;

class hodController extends Controller
{

  public function __construct(){
    $this->middleware('auth');
  }

  public function index(){
    $hodDocuments = HodLpgDocument::all();   // Retrieve all application documents
    $pendingApplications = JobAssignment::where('job_application_status', 'pending approval')->get();    // Retrieve all pending application documents

    // dd($hodDocuments);

    return view('backend.hod.hod_dashboard', compact('hodDocuments','pendingApplications'));
  }
}
