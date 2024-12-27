<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprises', function (Blueprint $table) {
            $table->bigIncrements('id_entreprise');
            $table->string('nom_entre');
            $table->string('eamil_entre');
            $table->string('adresse_entre');
            $table->string('logo')->nullable();
            $table->string('contact_entre');
            $table->integer('statut_entreprise')->comment('0=actif,1=inactif')->default(0);

            $table->foreignId('id_secteur');

            $table->foreign('id_secteur')
                ->references('id_secteur')
                ->on('secteurs')
                ->onDelete('cascade');

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
        Schema::dropIfExists('entreprises');
    }
}
