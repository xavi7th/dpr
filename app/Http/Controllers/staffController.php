<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class staffController extends Controller
{

  public function __construct(){
    $this->middleware('auth');
  }

  public function index(){
    return view('backend.staff.staff_dashboard');
  }
}
