<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Marketer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$acceptableRoles)
    {
				/**
				 * Allow other roles as permitted to this middleware call
				 * Example usage
				 * ->middleware(['auth', 'marketer:staff,admin,etc'])
				 */
				foreach ($acceptableRoles as  $role) {
					if (strtolower(Auth::user()->role) == strtolower($role)) {
						return $next($request);
					}
				}
        if (Auth::user()->role != 'Marketer') {
          Auth::logout();
          session()->invalidate();
          return redirect('/backend');
        }
        return $next($request);
    }
}
