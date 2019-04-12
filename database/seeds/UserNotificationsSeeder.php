<?php

use App\UserNotification;
use Illuminate\Database\Seeder;

class UserNotificationsSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */


	public function run()
	{
		factory(UserNotification::class, 200)->create();
	}
}
