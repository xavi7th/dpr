<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatdLtoInspectionDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catd_lto_inspection_documents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('application_id');
            $table->string('marketer_id');
            $table->string('company_id')->nullable();

            $table->string('letter_form_sponsoring_company');
            $table->string('verification_inspection');
            $table->string('bankdraft_of_statutory_fees');
            $table->string('application_letter');
            $table->string('certificate_of_incorporation');

            $table->string('letter_form_sponsoring_company_location_url')->nullable();
            $table->string('verification_inspection_location_url')->nullable();
            $table->string('bankdraft_of_statutory_fees_location_url')->nullable();
            $table->string('application_letter_location_url')->nullable();
            $table->string('certificate_of_incorporation_location_url')->nullable();

            $table->string('letter_form_sponsoring_company_reason')->nullable();
            $table->string('verification_inspection_reason')->nullable();
            $table->string('bankdraft_of_statutory_fees_reason')->nullable();
            $table->string('application_letter_reason')->nullable();
            $table->string('certificate_of_incorporation_reason')->nullable();

            $table->string('letter_form_sponsoring_company_location_check')->nullable();
            $table->string('verification_inspection_location_check')->nullable();
            $table->string('bankdraft_of_statutory_fees_location_check')->nullable();
            $table->string('application_letter_location_check')->nullable();
            $table->string('certificate_of_incorporation_location_check')->nullable();
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
        Schema::dropIfExists('catd_lto_inspection_documents');
    }
}
