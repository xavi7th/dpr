<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
          $table->increments('id');
          $table->string('marketer_id');
          $table->string('company_id')->unique();
          $table->string('company_name');
          $table->string('company_alias');
          $table->string('contract_type');
          $table->string('state');
          $table->string('lga');
          $table->string('town');
          $table->string('address');
          $table->string('mobile_number');
          $table->string('email_address')->unique();
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
        Schema::dropIfExists('companies');
    }
}
