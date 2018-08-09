<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use DB;
use Hash;
use Auth;
use Session;
use App\Staff;

class backendSessionController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    public function index(){
      return view('backend.sessions.backend_login');
    }

    public function do_login(){
      // validate the form requests
      $this->validate(request(), [
        'staff_id' => 'required',
        'password' => 'required'
      ]);

      //retrieve the staff's details and make the appropriate checks

      $staff = Staff::where('staff_id', request('staff_id'))
      ->first();

      // check if the staff's hashed password matches the plain text password provided
      if(Hash::check(request('password'), $staff->password)){

        //sign the user in
        auth()->login($staff);

        // making redirection checks
        if($staff->role == 'Admin'){
          //redirect to Admin dashboard
          return redirect('/admin');
        }elseif($staff->role == 'Staff'){
          //redirect to Admin dashboard
          return redirect('/staff');
        }elseif($staff->role == 'Marketer'){
            //redirect to Admin dashboard
          return redirect('/marketer');
        }

      }else{
        // return with errors
        return redirect('/backend');
      }

    }

    public function destroy(){
      Auth::logout();
      Session::flush();

      return redirect('/backend');
    }
}
