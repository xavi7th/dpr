<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Staff;
use App\ApplicationComments;
use Auth;

class appController extends Controller
{

    public function __construct(){
      $this->middleware('auth');
    }

    public function index(){
      return view('partials.settings');
    }

    public function changePassword(Request $request){

      $this->validate(request(), [
        'password' => 'required|confirmed'
      ]);

      Staff::where('id', auth()->id())
      ->update([
        'password' => bcrypt(request('password'))
      ]);

      return redirect('/logout');
    }

    public function updateStaffRecords(Request $request){
      // dd($request);

      if(request('record_name') == 'null'){
        // send back to view with error messages
        return back();
      }else{
        Staff::where('id', auth()->id())
        ->update([
          request('record_name') => request('record_value')
        ]);

        return back();
      }
    }

    public function makeReportComment(Request $request){
      ApplicationComments::create([
        'staff_id' => Auth::user()->staff_id,
        'application_id' => request('application_id'),
        'comment' => request('comment'),
      ]);
      return back();
    }

}
