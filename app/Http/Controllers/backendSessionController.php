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

    public function do_login(Request $request){

      // validate the form requests
      $this->validate(request(), [
        'username' => 'required',
        'password' => 'required'
      ]);

      //retrieve the staff's details and make the appropriate checks

      $staff = Staff::where('username', request('username'))
      ->first();

      // dd($staff);

      // check if the staff's hashed password matches the plain text password provided
      if(Hash::check(request('password'), $staff->password)){
        // dd(request('password'));
        //sign the user in
        auth()->login($staff);
        // dd($staff->role);
        // making redirection checks
        if($staff->role == 'Admin'){
          //redirect to Admin dashboard
          return redirect('/admin');
        }elseif($staff->role == 'Staff'){
          //redirect to staff dashboard
          return redirect('/staff');
        }elseif($staff->role == 'Marketer'){
          //redirect to marketer dashboard
          return redirect('/marketer');
        }elseif($staff->role == 'Team Lead'){
          //redirect to teamlead dashboard
          return redirect('/teamlead');
        }elseif($staff->role == 'Head Gas M&G Lagos'){
          //redirect to head gas dashboard
          return redirect('/headgas');
        }elseif($staff->role == 'ADO'){
          //redirect to ADO dashboard
          return redirect('/ado');
        }elseif($staff->role == 'ZOPSCON'){
          //redirect to zopscon dashboard
          return redirect('/zopscon');
        }elseif($staff->role == 'Manager Gas'){
          //redirect to zopscon dashboard
          return redirect('/managergas');
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
