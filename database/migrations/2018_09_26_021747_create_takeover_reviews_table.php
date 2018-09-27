<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTakeoverReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('takeover_reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->string('application_id');
            $table->string('marketer_id');
            $table->string('company_id');
            $table->string('new_name_of_gas_plant');
            $table->string('lpg_category');
            $table->datetime('last_lto_issue_date')->nullable();
            $table->datetime('expiry_date_of_lto')->nullable();
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
        Schema::dropIfExists('takeover_reviews');
    }
}
