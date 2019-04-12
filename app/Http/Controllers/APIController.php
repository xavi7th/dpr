<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\UserNotificationsListResource;
use App\UserNotification;

class APIController extends Controller
{

	/**
	 * The admin routes
	 * @return Response
	 */
	static function routes()
	{
		Route::group(['middleware' => ['web', 'throttle:40,1'], 'prefix' => 'api'], function () {

			Route::group(['middleware' => ['auth']], function () {

				Route::get('/', function () {
					return 'Welcome to DPR Nigeria API web service';
				});

				/**
				 * Get all the authenticated user's new notifications
				 */
				Route::get('/notifications/new', function () {
					$notifs = Auth::user()->new_notifications;
					return UserNotificationsListResource::collection($notifs);
				});
				/**
				 * Get all the authenticated user's notifications
				 */
				Route::get('/notifications/all', function () {
					$notifs = Auth::user()->received_notifications;
					return UserNotificationsListResource::collection($notifs);
				});
				/**
				 * Delete notification
				 */
				Route::get('/notification/{id}/delete', function ($id) {
					return ['status' => UserNotification::destroy($id)];
				});
				/**
				 * Mark notification as read
				 */
				Route::get('/notification/{notif}/read', function (UserNotification $notif) {
					$notif->is_read = true;
					$notif->save();
					return ['status' => true];
				});
			});
		});
	}
}
