<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_documents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('application_id');
            $table->string('staff_id');
            $table->string('company_id');
            $table->string('report_url')->nullable();
            $table->string('report_type')->nullable();
            $table->string('office')->nullable();
            $table->datetime('date_of_inspection')->nullable();
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
        Schema::dropIfExists('report_documents');
    }
}
