<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
	/**
	 * Register bindings in the container.
	 *
	 * @return void
	 */
	public function boot()
	{
		// Using class based composers...
		// View::composer(
		// 	'partials.backend_top_nav_all',
		// 	'App\Http\View\Composers\NavComposer'
		// );

		// // Using Closure based composers...
		// View::composer('dashboard', function ($view) {
		// 	//
		// });
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}
}
