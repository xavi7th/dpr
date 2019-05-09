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
			$table->string('state_id')->nullable();
			$table->string('local_govt_id')->nullable();
			$table->string('office')->nullable();
			$table->string('marketer_id')->nullable();
			$table->string('company_id')->nullable();
			$table->string('name_of_gas_plant')->nullable();
			$table->string('application_type')->nullable();
			$table->string('sub_category')->nullable();
			$table->string('plant_type')->nullable();
			$table->string('capacity_of_tank')->nullable();
			$table->string('state')->nullable();
			$table->string('lga')->nullable();
			$table->string('town')->nullable();
			$table->string('address')->nullable();
			$table->string('application_status')->nullable();
			$table->string('to_zopscon')->nullable();
			$table->string('to_ADO')->nullable();
			$table->string('to_head_gas')->nullable();
			$table->string('to_team_lead')->nullable();
			$table->string('to_staff')->nullable();
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
