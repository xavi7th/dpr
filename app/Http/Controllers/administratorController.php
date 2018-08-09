<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Staff;
use App\Company;
use DB;

class administratorController extends Controller
{

  public function __construct(){
    $this->middleware('auth');
  }

  public function index(){
    $staffs = Staff::all();
    $companies = Company::all();

    return view('backend.administrator.admin_dashboard', compact('staffs','companies'));
  }

  public function showAllStaffs(){
    $staffs = Staff::all();
    return view('backend.administrator.staffs_list', compact('staffs'));
  }

  public function showAllCompanies(){
    $companies = Company::all();
    return view('backend.administrator.companies_list', compact('companies'));
  }

  public function displayCreateStaffForm(){
    return view('backend.administrator.create_staff');
  }

  public function displayCreateCompanyForm(){
    return view('backend.administrator.create_company');
  }

  public function createStaff(Request $request){
    // validate this form
    $this->validate(request(), [
      'firstname' => 'required',
      'lastname' => 'required',
      'email' => 'required',
      'mobile_number' => 'required',
      'password' => 'required|confirmed',
      'role' => 'required'
    ]);

    // getting the current number of created staffs
    $staffCount = DB::table('staff')->get();

    // adding 1 to that number
    $indexIncremented = $staffCount->count() + 1;

    // padding the number to 4 leading zeros
    $newStaffIndex = sprintf('%05d', $indexIncremented);

    //appending the new staff index to DPRST to create the staff's ID
    $staffID = "DPR/ST/".$newStaffIndex;

    if(request('role') == 'Select Role'){
      // return custom error message

    }else{
      // create and save the staff
      Staff::create([
        'staff_id' => $staffID,
        'first_name' => request('firstname'),
        'last_name' => request('lastname'),
        'mobile_number' => request('mobile_number'),
        'email_address' => request('email'),
        'password' => bcrypt(request('password')),
        'role' => request('role')
      ]);

      return redirect('/admin');
    }

  }

  public function createCompany(Request $request){
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

    // getting the current number of created staffs
    $companyCount = DB::table('companies')->get();

    // adding 1 to that number
    $indexIncremented = $companyCount->count() + 1;

    // padding the number to 4 leading zeros
    $newCompanyIndex = sprintf('%05d', $indexIncremented);

    //appending the new staff index to DPRST to create the staff's ID
    $companyID = "DPR/COMP/".$newCompanyIndex;

    if((request('contract_type') == 'Select Contract Type')
    || (request('state') == 'Select State')
    || (request('town') == 'Select LGA')){
      // return custom error message
    }else{
      // create and save the staff
      Company::create([
        'company_id' => $companyID,
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

      return redirect('/admin');
    }

  }

}
