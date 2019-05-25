<?php

use App\Staff;
use App\State;
use App\Company;
use App\LocalGovt;
use App\AppDocReview;
use App\IssuedAtcLicense;
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

$factory->define(IssuedAtcLicense::class, function (Faker $faker) {
	$companies = Company::all();
	$staff = Staff::where('role', 'Staff')->get();
	return [
		'company_id' => $faker->randomElement($companies->all())->company_id,
		'staff_id' => $faker->randomElement($staff->all())->staff_id,
		'implementation_schedule' => $faker->randomElement([NULL, 'detailsprint.pdf', 'scarves-hp-gq-6feb18_getty_b.jpg']),
		'license_url' => NULL,
		'date_issued' => now()->subDays(21, 48),
		'expiry_date' => now()->addDays(-15, 100),
	];
});
