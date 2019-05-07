<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiteSuitabilityInspectionDocumentsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('site_suitability_inspection_documents', function (Blueprint $table) {
			$table->increments('id');
			$table->string('application_id');
			$table->string('ofiice')->nullable();
			$table->string('marketer_id');
			$table->string('company_id')->nullable();
			$table->string('applications_letter_for_suitability_inspection');
			$table->string('application_letter_addressed_to_the_controller');
			$table->string('application_letter_addressed_to_the_controller_location_url');
			$table->string('article_and_memorandum_of_association');
			$table->string('current_tax_clearance');
			$table->string('certificate_of_incorporation');
			$table->string('fire_certificate');
			$table->string('police_report');
			$table->string('completed_application_form');
			$table->string('approved_building_plan');
			$table->string('survey_plan');
			$table->string('deed_of_conveyance');
			$table->string('piping_and_instrumentation_diagram');
			$table->string('environmental_impact_accessment');
			$table->string('bankdraft_of_statutory_fees');
			$table->string('letter_confirmation_ministry_of_lands_and_survey');
			$table->string('codes_and_standard_adopted_in_the_tank_design');

			$table->string('applications_letter_for_suitability_inspection_location_url')->nullable();
			$table->string('article_and_memorandum_of_association_location_url')->nullable();
			$table->string('current_tax_clearance_location_url')->nullable();
			$table->string('certificate_of_incorporation_location_url')->nullable();
			$table->string('fire_certificate_location_url')->nullable();
			$table->string('police_report_location_url')->nullable();
			$table->string('completed_application_form_location_url')->nullable();
			$table->string('approved_building_plan_location_url')->nullable();
			$table->string('survey_plan_location_url')->nullable();
			$table->string('deed_of_conveyance_location_url')->nullable();
			$table->string('piping_and_instrumentation_diagram_location_url')->nullable();
			$table->string('environmental_impact_accessment_location_url')->nullable();
			$table->string('bankdraft_of_statutory_fees_location_url')->nullable();
			$table->string('letter_confirmation_ministry_of_lands_and_survey_location_url')->nullable();
			$table->string('codes_and_standard_adopted_in_the_tank_design_location_url')->nullable();

			$table->string('applications_letter_for_suitability_inspection_location_check')->nullable();
			$table->string('article_and_memorandum_of_association_location_check')->nullable();
			$table->string('current_tax_clearance_location_check')->nullable();
			$table->string('certificate_of_incorporation_location_check')->nullable();
			$table->string('fire_certificate_location_check')->nullable();
			$table->string('police_report_location_check')->nullable();
			$table->string('completed_application_form_location_check')->nullable();
			$table->string('approved_building_plan_location_check')->nullable();
			$table->string('survey_plan_location_check')->nullable();
			$table->string('deed_of_conveyance_location_check')->nullable();
			$table->string('piping_and_instrumentation_diagram_location_check')->nullable();
			$table->string('environmental_impact_accessment_location_check')->nullable();
			$table->string('bankdraft_of_statutory_fees_location_check')->nullable();
			$table->string('letter_confirmation_ministry_of_lands_and_survey_location_check')->nullable();
			$table->string('codes_and_standard_adopted_in_the_tank_design_location_check')->nullable();
			$table->rememberToken();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('site_suitability_inspection_documents');
	}
}
