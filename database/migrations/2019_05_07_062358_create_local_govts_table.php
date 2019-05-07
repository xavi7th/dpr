<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalGovtsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('local_govts', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('state_id')->unsigned();
			$table->string('name');
			$table->integer('population')->unsigned()->nullable();
			$table->double('square_area')->unsigned()->nullable();
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
		Schema::dropIfExists('local_govts');
	}
}
