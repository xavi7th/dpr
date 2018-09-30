<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_assignments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('application_id');
            $table->string('assigned_by');
            $table->string('staff_id');
            $table->string('teamlead_id');
            $table->string('company_id')->nullable();
            $table->string('job_application_status')->nullable();
            $table->string('to_zopscon')->nullable();
            $table->string('to_ADO')->nullable();
            $table->string('to_head_gas')->nullable();
            $table->string('approved_by')->nullable();
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
        Schema::dropIfExists('job_assignments');
    }
}
