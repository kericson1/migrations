<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffreRecrutementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offre_recrutement', function (Blueprint $table) {
            $table->id();
            $table->string('code_offre');
            $table->string('name');
            $table->integer('number_step');
            $table->integer('created_by');
            $table->integer('actif');
            $table->date('debut');
            $table->date('expiration');
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
        Schema::dropIfExists('offre_recrutement');
    }
}
