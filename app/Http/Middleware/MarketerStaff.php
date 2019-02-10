<?php

namespace App\Http\Middleware;

use Closure;

class MarketerStaff
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
        if (Auth::user()->role != 'Staff' || Auth::user()->role != 'Marketer') {
            Auth::logout();
            session()->invalidate();
            return redirect('/backend');
        }
        return $next($request);
    }
}


