<?php

namespace App\Http\Controllers;

use Debugbar;
use App\UserNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\UserNotificationsListResource;

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
					$notifs = Cache::remember('new_notifs' . auth()->id(), 1, function () {
						return Auth::user()->new_notifications;
					});
					return UserNotificationsListResource::collection($notifs);
				});
				/**
				 * Get all the authenticated user's notifications
				 */
				Route::get('/notifications/all', function () {
					$notifs = Cache::remember('all_notifs' . auth()->id(), 1, function () {
						return Auth::user()->received_notifications;
					});
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
					// $notif->save();
					return ['notification' => $notif];
				});
				/**
				 * Send notification
				 */
				Route::post('/notification/send', function () {
					// return request()->all();
					Auth::user()->sent_notifications()->create([
						'recipient_id' => request('recipient_id'),
						'notification' => request('msg'),
						'sender_name' => Auth::user()->role
					]);
					return response()->json(['status' => true], 201);
				});
			});
		});
	}
}
