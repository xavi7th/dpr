<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Admin
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


      if (strtolower(Auth::user()->role) != 'admin') {

				/**
				 * Allow other roles as permitted to this middleware call
				 * Example usage
				 * ->middleware(['auth', 'admin:staff,marketer,etc'])
				 */
				foreach ($acceptableRoles as  $role) {
					if (strtolower(Auth::user()->role) == strtolower($role)) {
						return $next($request);
					}
				}
        Auth::logout();
        session()->invalidate();
        return redirect('/backend');
			}

      return $next($request);
    }
}
