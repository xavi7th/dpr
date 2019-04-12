<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;

class NavComposer
{

	protected $new_notifications;

	/**
	 * Create a new profile composer.
	 *
	 * @return void
	 */
	public function __construct()
	{
		// Dependencies automatically resolved by service container...
		$this->new_notifications = Auth::user()->new_notifications;
	}

	/**
	 * Bind data to the view.
	 *
	 * @param  View  $view
	 * @return void
	 */
	public function compose(View $view)
	{
		$view->with('new_notifications', optional($this->new_notifications));
	}
}
