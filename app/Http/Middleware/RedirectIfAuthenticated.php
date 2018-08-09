<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use DB;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {

          $staff = DB::table('staff')->where('id', auth()->id())->first();

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

        }

        return $next($request);
    }
}
