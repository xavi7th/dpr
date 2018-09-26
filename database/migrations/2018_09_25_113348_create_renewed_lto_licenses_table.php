<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRenewedLtoLicensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('renewed_lto_licenses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('comp_license_id');
            $table->string('company_id');
            $table->datetime('previous_date_issued')->nullable();
            $table->datetime('previous_expiry_date')->nullable();
            $table->datetime('current_date_issued')->nullable();
            $table->datetime('current_expiry_date')->nullable();
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
        Schema::dropIfExists('renewed_lto_licenses');
    }
}
