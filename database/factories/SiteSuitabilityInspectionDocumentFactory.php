<?php

use App\Staff;
use App\Company;
use Faker\Generator as Faker;
use App\SiteSuitabilityInspectionDocuments;

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

$factory->define(SiteSuitabilityInspectionDocuments::class, function (Faker $faker) {
	$companies = Company::all();
	$marketers = Staff::where('role', 'Marketer')->get();
	return [

		'marketer_id' => $faker->randomElement($marketers->all())->staff_id,
		'company_id' => $faker->randomElement($companies->all())->company_id,
		'applications_letter_for_suitability_inspection' => 'no',
		'article_and_memorandum_of_association' => 'no',
		'current_tax_clearance' => 'no',
		'certificate_of_incorporation' => 'no',
		'fire_certificate' => 'no',
		'police_report' => 'no',
		'completed_application_form' => 'no',
		'approved_building_plan' => 'no',
		'survey_plan' => 'no',
		'deed_of_conveyance' => 'no',
		'piping_and_instrumentation_diagram' => 'no',
		'environmental_impact_accessment' => 'no',
		'bankdraft_of_statutory_fees' => 'no',
		'letter_confirmation_ministry_of_lands_and_survey' => 'no',
		'codes_and_standard_adopted_in_the_tank_design' => 'no',
		'application_letter_addressed_to_the_controller' => 'no',
		'applications_letter_for_suitability_inspection_location_url' => 'null',
		'article_and_memorandum_of_association_location_url' => 'null',
		'current_tax_clearance_location_url' => 'null',
		'certificate_of_incorporation_location_url' => 'null',
		'fire_certificate_location_url' => 'null',
		'police_report_location_url' => 'null',
		'completed_application_form_location_url' => 'null',
		'approved_building_plan_location_url' => 'null',
		'survey_plan_location_url' => 'null',
		'deed_of_conveyance_location_url' => 'null',
		'piping_and_instrumentation_diagram_location_url' => 'null',
		'environmental_impact_accessment_location_url' => 'null',
		'bankdraft_of_statutory_fees_location_url' => 'null',
		'letter_confirmation_ministry_of_lands_and_survey_location_url' => 'null',
		'codes_and_standard_adopted_in_the_tank_design_location_url' => 'null',
		'application_letter_addressed_to_the_controller_location_url' => 'null',
		'applications_letter_for_suitability_inspection_location_check' => NULL,
		'article_and_memorandum_of_association_location_check' => NULL,
		'current_tax_clearance_location_check' => NULL,
		'certificate_of_incorporation_location_check' => NULL,
		'fire_certificate_location_check' => NULL,
		'police_report_location_check' => NULL,
		'completed_application_form_location_check' => NULL,
		'approved_building_plan_location_check' => NULL,
		'survey_plan_location_check' => NULL,
		'deed_of_conveyance_location_check' => NULL,
		'piping_and_instrumentation_diagram_location_check' => NULL,
		'environmental_impact_accessment_location_check' => NULL,
		'bankdraft_of_statutory_fees_location_check' => NULL,
		'letter_confirmation_ministry_of_lands_and_survey_location_check' => NULL,
		'codes_and_standard_adopted_in_the_tank_design_location_check' => NULL,
		'remember_token' => NULL,
	];
});
