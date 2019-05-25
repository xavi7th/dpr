<?php

use App\Staff;
use App\Company;
use Faker\Generator as Faker;
use App\JobAssignment;

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

$factory->define(JobAssignment::class, function (Faker $faker) {
	$companies = Company::all();
	$staff = Staff::where('role', 'Staff')->get();
	return [
		'assigned_by' => 'DPRST00006',
		'staff_id' => $faker->randomElement($staff->all())->staff_id,
		'teamlead_id' => NULL,
		'company_id' => $faker->randomElement($companies->all())->company_id,
		'job_application_status' => $faker->randomElement(['Site Suitable', 'ATC Issued', 'Assigned', 'Application Sent to HQ', 'LTO Issued', 'Started', 'Pressure Test Succesful']),
		'to_zopscon' => NULL,
		'to_ADO' => NULL,
		'to_head_gas' => NULL,
		'approved_by' => 'DPRST00006',
	];
});
