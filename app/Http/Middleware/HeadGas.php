<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class HeadGas
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
      if (Auth::user()->role != 'Head Gas M&G Lagos') {
        Auth::logout();
        session()->invalidate();
        return redirect('/backend');
      }
      return $next($request);
    }
}
