<?php

use App\Staff;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
	return [
		'name' => $faker->name,
		'company' => $faker->company,
		'license' => $faker->randomElement($array = array('FEED', 'DED', 'LTO')),
		'status' => $faker->randomElement($array = array('Processing', 'Issued', 'Submitted')),
		'email' => $faker->unique()->safeEmail,
		'address' => $faker->address,
		'city' => $faker->city,
		'state' => $faker->state,
		'state' => $faker->state,
		'myState' => $faker->randomElement($array = array('Delta', 'Edo', 'Kebbi', 'Jigawa', 'Benue', 'Ekiti', 'Lagos', 'Osun', 'Rivers')),
		'year' => $faker->year,
		'dayOfMonth' => $faker->dayOfMonth,
		'monthName' => $faker->monthName,
		'year1' => $faker->year,
		'dayOfMonth1' => $faker->dayOfMonth,
		'monthName1' => $faker->monthName,
		'year2' => $faker->year,
		'dayOfMonth2' => $faker->dayOfMonth,
		'monthName2' => $faker->monthName,
		'year3' => $faker->year,
		'dayOfMonth3' => $faker->dayOfMonth,
		'monthName3' => $faker->monthName
		// 'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
		// 'remember_token' => str_random(10),
	];
});

$factory->define(Staff::class, function (Faker $faker) {
	return [
		'staff_id' => 'MKT' . $faker->unique()->randomNumber(),
		'username' => $faker->unique()->userName,
		'first_name' => 'Example',
		'middle_name' => 'Example',
		'surname' => 'Example',
		'mobile_number' => $faker->phoneNumber,
		'email_address' => $faker->safeEmail,
		'password' => bcrypt('pass'),
		'role' => 'Marketer',
		'office' => 'Warri',
	];
});
