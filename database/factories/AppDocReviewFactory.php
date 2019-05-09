<?php

use App\Staff;
use App\State;
use App\Company;
use App\LocalGovt;
use App\AppDocReview;
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

$factory->define(AppDocReview::class, function (Faker $faker) {
	$states = State::all();
	$lgas = LocalGovt::all();
	$companies = Company::all();
	$marketers = Staff::where('role', 'Marketer')->get();
	return [
		'application_id' => 'DPRAPPLICATION0' . rand(01, 99) . random_int(24, PHP_INT_MAX),
		'state_id' => ($state = $faker->randomElement($states))->id,
		'local_govt_id' => ($lga = $faker->randomElement($lgas->where('state_id', $state->id)))->id,
		'office' => 'Warri',
		'marketer_id' => $faker->randomElement($marketers)->staff_id,
		'company_id' => $faker->randomElement($companies)->company_id,
		'name_of_gas_plant' => $faker->word,
		'application_type' => $faker->randomElement($array = array('LPG Retailer Outlets', 'ADD-ON', 'CNG Retailer Outlets', 'CAT-D', 'LPG Retailer Outlets', 'LPG Retailer Outlets', 'LPG Retailer Outlets')),
		'sub_category' => $faker->randomElement($array = array('LTO', 'ATC', 'Site Suitability Inspection', 'ADD-ON LTO', 'Pressure Testing', 'CAT-D LTO', 'Renewal', 'ADD-ON ATI', 'LTO', 'LTO', 'LTO')),
		'plant_type' => $faker->randomElement($array = array('Refilling Plant', 'Auto Gas Plant', 'Industrial Plant', 'Refilling Plant', 'Refilling Plant', 'Refilling Plant', 'Refilling Plant', 'Refilling Plant', 'Refilling Plant', 'Refilling Plant', 'Refilling Plant', 'Refilling Plant')),
		'capacity_of_tank' => (int)$faker->randomFloat(5000, 300000),
		'state' => $state->name . ' State',
		'lga' => $lga->name,
		'town' => strtolower($lga->name),
		'address' => $faker->address,
		'application_status' => $faker->randomElement($array = array('Not Submitted', 'Site Suitable', 'ATC Issued', 'Application Pending', 'LTO Issued', 'ATC Issued', 'Pressure Test Succesful')),
		'to_zopscon' => 'false',
		'to_ADO' => 'false',
		'to_head_gas' => 'false',
		'to_team_lead' => 'false',
		'to_staff' => 'false',
	];
});
