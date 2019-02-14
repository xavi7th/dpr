<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLtoInspectionDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lto_inspection_documents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('application_id');
            $table->string('marketer_id');
            $table->string('company_id')->nullable();
            
            $table->string('completed_application_form');
            $table->string('bankdraft_of_statutory_fees');
            $table->string('photocopy_of_approval_to_construct_lpg');
            $table->string('current_weight_measures_cert_of_verification');
            $table->string('application_letter_addressed_to_the_controller');
            $table->string('fire_report_certificate');
            $table->string('current_pressure_test_report_certificate');
            $table->string('current_three_years_income_tax_clearance');
            $table->string('appropriate_plant_photography');
            $table->string('standard_operating_procedure');

            $table->string('completed_application_form_location_url')->nullable();
            $table->string('bankdraft_of_statutory_fees_location_url')->nullable();
            $table->string('photocopy_of_approval_to_construct_lpg_location_url')->nullable();
            $table->string('current_weight_measures_cert_of_verification_location_url')->nullable();
            $table->string('application_letter_addressed_to_the_controller_location_url')->nullable();
            $table->string('fire_report_certificate_location_url')->nullable();
            $table->string('current_pressure_test_report_certificate_location_url')->nullable();
            $table->string('current_three_years_income_tax_clearance_location_url')->nullable();
            $table->string('appropriate_plant_photography_location_url')->nullable();
            $table->string('standard_operating_procedure_location_url')->nullable();

            $table->string('completed_application_form_reason')->nullable();
            $table->string('bankdraft_of_statutory_fees_reason')->nullable();
            $table->string('photocopy_of_approval_to_construct_lpg_reason')->nullable();
            $table->string('current_weight_measures_cert_of_verification_reason')->nullable();
            $table->string('application_letter_addressed_to_the_controller_reason')->nullable();
            $table->string('fire_report_certificate_reason')->nullable();
            $table->string('current_pressure_test_report_certificate_reason')->nullable();
            $table->string('current_three_years_income_tax_clearance_reason')->nullable();
            $table->string('appropriate_plant_photography_reason')->nullable();
            $table->string('standard_operating_procedure_reason')->nullable();

            $table->string('completed_application_form_location_check')->nullable();
            $table->string('bankdraft_of_statutory_fees_location_check')->nullable();
            $table->string('photocopy_of_approval_to_construct_lpg_location_check')->nullable();
            $table->string('current_weight_measures_cert_of_verification_location_check')->nullable();
            $table->string('application_letter_addressed_to_the_controller_location_check')->nullable();
            $table->string('fire_report_certificate_location_check')->nullable();
            $table->string('current_pressure_test_report_certificate_location_check')->nullable();
            $table->string('current_three_years_income_tax_clearance_location_check')->nullable();
            $table->string('appropriate_plant_photography_location_check')->nullable();
            $table->string('standard_operating_procedure_location_check')->nullable();
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
        Schema::dropIfExists('lto_inspection_documents');
    }
}
