<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppDocReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_doc_reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->string('application_id')->unique();
            $table->string('marketer_id');
            $table->string('company_id')->nullable();
            $table->string('name_of_gas_plant');
            $table->string('application_type');
            $table->string('sub_category');
            $table->string('plant_type');
            $table->string('capacity_of_tank')->nullable();
            $table->string('state');
            $table->string('lga');
            $table->string('town');
            $table->string('address');
            $table->string('application_status')->nullable();
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
        Schema::dropIfExists('app_doc_reviews');
    }
}
