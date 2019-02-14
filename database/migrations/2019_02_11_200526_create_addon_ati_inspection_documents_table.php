<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddonAtiInspectionDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addon_ati_inspection_documents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('application_id');
            $table->string('marketer_id');
            $table->string('company_id')->nullable();

            $table->string('suitability_inspection_of_proposed_site');
            $table->string('copy_of_current_storage_and_sales_license');
            $table->string('retail_outlet_as_built_layout_drawing');
            $table->string('proposed_layout_drawing_for_the_lpg_addon');
            $table->string('fire_services_report_indicating_the_lpg_addon');
            $table->string('environmental_evaluation_report');
            $table->string('relevant_town_planning_approval');
            $table->string('application_letter_addressed_to_the_controller');

            $table->string('suitability_inspection_of_proposed_site_location_url')->nullable();
            $table->string('copy_of_current_storage_and_sales_license_location_url')->nullable();
            $table->string('retail_outlet_as_built_layout_drawing_location_url')->nullable();
            $table->string('proposed_layout_drawing_for_the_lpg_addon_location_url')->nullable();
            $table->string('fire_services_report_indicating_the_lpg_addon_location_url')->nullable();
            $table->string('environmental_evaluation_report_location_url')->nullable();
            $table->string('relevant_town_planning_approval_location_url')->nullable();
            $table->string('application_letter_addressed_to_the_controller_location_url')->nullable();

            $table->string('suitability_inspection_of_proposed_site_reason')->nullable();
            $table->string('copy_of_current_storage_and_sales_license_reason')->nullable();
            $table->string('retail_outlet_as_built_layout_drawing_reason')->nullable();
            $table->string('proposed_layout_drawing_for_the_lpg_addon_reason')->nullable();
            $table->string('fire_services_report_indicating_the_lpg_addon_reason')->nullable();
            $table->string('environmental_evaluation_report_reason')->nullable();
            $table->string('relevant_town_planning_approval_reason')->nullable();
            $table->string('application_letter_addressed_to_the_controller_reason')->nullable();

            $table->string('suitability_inspection_of_proposed_site_location_check')->nullable();
            $table->string('copy_of_current_storage_and_sales_license_location_check')->nullable();
            $table->string('retail_outlet_as_built_layout_drawing_location_check')->nullable();
            $table->string('proposed_layout_drawing_for_the_lpg_addon_location_check')->nullable();
            $table->string('fire_services_report_indicating_the_lpg_addon_location_check')->nullable();
            $table->string('environmental_evaluation_report_location_check')->nullable();
            $table->string('relevant_town_planning_approval_location_check')->nullable();
            $table->string('application_letter_addressed_to_the_controller_location_check')->nullable();

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
        Schema::dropIfExists('addon_ati_inspection_documents');
    }
}
