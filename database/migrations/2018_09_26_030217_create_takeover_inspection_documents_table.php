<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTakeoverInspectionDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('takeover_inspection_documents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('application_id');
            $table->string('marketer_id');
            $table->string('company_id')->nullable();
            
            $table->string('article_and_memorandum_of_association');
            $table->string('certificate_of_incorporation');
            $table->string('weight_measures_verification_certificate');
            $table->string('current_pressure_test_certificate');
            $table->string('appropriate_plant_photography');
            $table->string('completed_application_form');
            $table->string('bankdraft_of_statutory_fees');
            $table->string('modification_plant');
            $table->string('current_tax_clearance_certificate');
            $table->string('current_fire_report_certificate');
            $table->string('original_license_of_plant');
            $table->string('letter_of_release');
            $table->string('police_report_certificate');
            $table->string('approved_building_plan');
            $table->string('environment_evaluation_report');
            $table->string('application_letter');

            $table->string('article_and_memorandum_of_association_location_url')->nullable();
            $table->string('certificate_of_incorporation_location_url')->nullable();
            $table->string('weight_measures_verification_certificate_location_url')->nullable();
            $table->string('current_pressure_test_certificate_location_url')->nullable();
            $table->string('appropriate_plant_photography_location_url')->nullable();
            $table->string('completed_application_form_location_url')->nullable();
            $table->string('bankdraft_of_statutory_fees_location_url')->nullable();
            $table->string('modification_plant_location_url')->nullable();
            $table->string('current_tax_clearance_certificate_location_url')->nullable();
            $table->string('current_fire_report_certificate_location_url')->nullable();
            $table->string('original_license_of_plant_location_url')->nullable();
            $table->string('letter_of_release_location_url')->nullable();
            $table->string('police_report_certificate_location_url')->nullable();
            $table->string('approved_building_plan_location_url')->nullable();
            $table->string('environment_evaluation_report_location_url')->nullable();
            $table->string('application_letter_location_url')->nullable();

            $table->string('article_and_memorandum_of_association_reason')->nullable();
            $table->string('certificate_of_incorporation_reason')->nullable();
            $table->string('weight_measures_verification_certificate_reason')->nullable();
            $table->string('current_pressure_test_certificate_reason')->nullable();
            $table->string('appropriate_plant_photography_reason')->nullable();
            $table->string('completed_application_form_reason')->nullable();
            $table->string('bankdraft_of_statutory_fees_reason')->nullable();
            $table->string('modification_plant_reason')->nullable();
            $table->string('current_tax_clearance_certificate_reason')->nullable();
            $table->string('current_fire_report_certificate_reason')->nullable();
            $table->string('original_license_of_plant_reason')->nullable();
            $table->string('letter_of_release_reason')->nullable();
            $table->string('police_report_certificate_reason')->nullable();
            $table->string('approved_building_plan_reason')->nullable();
            $table->string('environment_evaluation_report_reason')->nullable();
            $table->string('application_letter_reason')->nullable();
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
        Schema::dropIfExists('takeover_inspection_documents');
    }
}
