<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorrespondantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('correspondants', function (Blueprint $table) {
            $table->bigIncrements('id_correspondant');

            $table->foreignId('id_client');
            $table->foreign('id_client')
                ->references('id_client')
                ->on('clients')
                ->onDelete('cascade');

            $table->string('nom_correspondant');
            $table->string('contact_corresspondant');
            $table->string('contact2_corresspondant')->nullable();
            $table->string('contact3_corresspondant')->nullable();
            $table->string('contact4_corresspondant')->nullable();
            $table->string('email_correspondant');
            $table->string('email2_correspondant')->nullable();
            $table->string('email3_correspondant')->nullable();
            $table->string('email4_correspondant')->nullable();
            $table->string('fonction');
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
        Schema::dropIfExists('correspondants');
    }
}
