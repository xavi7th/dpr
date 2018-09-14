<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiteSuitabilityReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_suitability_reports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('application_id');
            $table->string('staff_id');
            $table->string('company_id');
            $table->string('marketer_id');
            $table->string('report_location');
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
        Schema::dropIfExists('site_suitability_reports');
    }
}
