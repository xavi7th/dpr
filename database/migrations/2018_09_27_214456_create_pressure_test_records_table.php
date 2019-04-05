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
            $table->string('application_id');
            $table->string('atc_application_id');
            $table->string('marketer_id');
            $table->string('company_name');
            $table->string('equipment_name');
            $table->string('facility_name');
            $table->string('test_type');
            $table->string('tag_number')->nullable();
            $table->string('manufacture_year');
            $table->string('commission_year');
            $table->string('design_pressure')->nullable();
            $table->string('test_pressure')->nullable();
            $table->datetime('date_last_tested')->nullable();
            $table->string('due_date')->nullable();
            $table->string('application_letter_location_url')->nullable();
            $table->string('license_url')->nullable();
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
