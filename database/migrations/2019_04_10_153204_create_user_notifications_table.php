<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserNotificationsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_notifications', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('recipient_id')->unsigned();
			$table->integer('sender_id')->unsigned();
			$table->string('sender_name');
			$table->text('notification');
			$table->boolean('is_read')->default(false);

			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('user_notifications');
	}
}
