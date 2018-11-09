<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeadgasInboxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('headgas_inboxes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('application_id');
            $table->string('from'); // This is should be the role of the sender e.g Marketer, ZOPSCON, ADO etc...
            $table->string('application_type');
            $table->string('sub_category');
            $table->string('read')->default('false');
            $table->string('to_outbox')->default('false');
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
        Schema::dropIfExists('headgas_inboxes');
    }
}
