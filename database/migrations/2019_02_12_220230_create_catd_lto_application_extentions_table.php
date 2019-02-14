<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatdLtoApplicationExtentionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catd_lto_application_extentions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('application_id');
            $table->string('company_id');
            $table->string('sponsoring_company');
            $table->string('no_of_bottles');
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
        Schema::dropIfExists('catd_lto_application_extentions');
    }
}
