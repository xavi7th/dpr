<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePressureTestRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pressure_test_records', function (Blueprint $table) {
            $table->increments('id');
            $table->string('atc_application_id');
            $table->string('company_name');
            $table->string('name_of_equipment');
            $table->string('application_type');
            $table->string('sub_category');
            $table->string('test_type');
            $table->string('state');
            $table->string('lga');
            $table->string('tag_number')->nullable();
            $table->string('location');
            $table->string('manufacture_year');
            $table->string('commission_year');
            $table->datetime('design_pressure')->nullable();
            $table->datetime('test_pressure')->nullable();
            $table->string('test_certificate_report_location_url')->nullable();
            $table->string('application_status')->nullable();
            $table->string('to_zopscon')->nullable();
            $table->string('to_ADO')->nullable();
            $table->string('to_head_gas')->nullable();
            $table->string('to_team_lead')->nullable();
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
        Schema::dropIfExists('pressure_test_records');
    }
}
