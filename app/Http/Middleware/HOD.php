<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class HOD
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::user()->role != 'HOD') {
          Auth::logout();
          session()->invalidate();
          return redirect('/backend');
        }
        return $next($request);
    }
}
