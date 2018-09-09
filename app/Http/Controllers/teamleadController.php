<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\AppDocReview;

class teamleadController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }

  public function index(){
    $appDocReviews = AppDocReview::all();    // Retrieve all application documents
    $pendingApplications = AppDocReview::where('application_status', 'Application Pending')->get();   // Retrieve all pending application documents
    $assignedApplications = AppDocReview::where('application_status', 'Application Assigned')->get();   // Retrieve all assigned application documents
    $approvedApplications = AppDocReview::where('application_status', 'Application Approved')->get();   // Retrieve all approved application documents
    return view('backend.teamlead.teamlead_dashboard', compact('appDocReviews','pendingApplications','assignedApplications','approvedApplications'));
  }
}
