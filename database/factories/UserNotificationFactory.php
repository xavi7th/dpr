<?php

use App\Staff;
use App\UserNotification;
use Faker\Generator as Faker;
use App\AppDocReview;

$factory->define(UserNotification::class, function (Faker $faker) {

	$staff = (Staff::all())->all();
	$applications = (AppDocReview::all())->all();
	// dd($staff->all());

	return [
		'recipient_id' => $faker->randomElement($staff)->id,
		'sender_id' => $faker->randomElement($staff)->id,
		'sender_name' => $faker->randomElement($staff)->role,
		'application_id' => $faker->randomElement($applications)->id,
		'notification' => $faker->realText(200, 2),
	];
});
