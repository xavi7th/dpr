<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('staff', function (Blueprint $table) {
			$table->increments('id');
			$table->string('staff_id')->unique();
			$table->string('username')->nullable();;
			$table->string('first_name');
			$table->string('middle_name');
			$table->string('surname');
			$table->string('mobile_number');
			$table->string('email_address')->unique();
			$table->string('password');
			$table->string('role');
			$table->string('office');
			$table->boolean('activated')->default(true);
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
		Schema::dropIfExists('staff');
	}
}
