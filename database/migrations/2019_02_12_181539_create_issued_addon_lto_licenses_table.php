<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIssuedAddonLtoLicensesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('issued_addon_lto_licenses', function (Blueprint $table) {
			$table->increments('id');
			$table->string('application_id');
			$table->string('company_id');
			$table->string('staff_id')->nullable();
			$table->string('construction_report')->nullable();
			$table->datetime('application_date')->nullable();
			$table->datetime('date_issued')->nullable();
			$table->datetime('expiry_date')->nullable();
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
		Schema::dropIfExists('issued_addon_lto_licenses');
	}
}
