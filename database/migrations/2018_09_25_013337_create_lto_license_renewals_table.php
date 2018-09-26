<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLtoLicenseRenewalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lto_license_renewals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('application_id');
            $table->string('comp_license_id');
            $table->string('marketer_id');
            $table->string('company_id')->nullable();
            $table->string('copy_of_last_expired_license');
            $table->string('payment_receipt');

            $table->string('copy_of_last_expired_license_location_url')->nullable();
            $table->string('payment_receipt_location_url')->nullable();
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
        Schema::dropIfExists('lto_license_renewals');
    }
}
