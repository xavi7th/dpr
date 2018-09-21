<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Staff;
use App\ApplicationComments;
use App\AppDocReview;
use Auth;
use DB;

use Carbon\Carbon;

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

    public function viewAllSSI(){
      $appDocReviewsSSI = AppDocReview::where('application_status','Site Suitable')->get();    // get all application requests
      return view('backend.general.view_all_ssi', compact('appDocReviewsSSI'));
    }

    public function viewAllATC(){
      $appDocReviewsATC = DB::table('app_doc_reviews')
      ->join('issued_atc_licenses', 'issued_atc_licenses.company_id', '=', 'app_doc_reviews.company_id')
      ->join('companies', 'companies.company_id', '=', 'app_doc_reviews.company_id')
      ->where('application_status','ATC Issued')
      ->get();    // get all application requests

      // dd($appDocReviewsATC);

      return view('backend.general.view_all_atc', compact('appDocReviewsATC'));
    }

    public function viewAllLTO(){
      $appDocReviewsLTO = DB::table('app_doc_reviews')
      ->join('issued_lto_licenses', 'issued_lto_licenses.company_id', '=', 'app_doc_reviews.company_id')
      ->join('companies', 'companies.company_id', '=', 'app_doc_reviews.company_id')
      ->where('application_status','LTO Issued')
      ->get();    // get all application requests

      // dd($appDocReviewsLTO);
      return view('backend.general.view_all_lto', compact('appDocReviewsLTO'));
    }

}


// support@bitcoinexpert45.net
// support@bitcoinexpert@45
