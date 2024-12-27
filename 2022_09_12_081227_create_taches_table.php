<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTachesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taches', function (Blueprint $table) {
            $table->bigIncrements('id_tache');
            $table->foreignId('id_projet');

            $table->foreign('id_projet')->references('id_projet')->on('projets')->onDelete('cascade');
            $table->string('nom_tache');
            $table->integer('statut')->comment('0 = encours, 1 = retard, 2 = terminer');
            $table->date('date_debut_tache');
            $table->date('date_fin_tache');
            $table->string('cout_tache')->nullable();
            $table->string('tarif_tache')->nullable();
            $table->string('progression')->default(0);
            $table->integer('heure_total_tache')->nullable();
            $table->boolean('supprime_tache')->default(0)->comment('0 = present, 1 = supprime');
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
        Schema::dropIfExists('taches');
    }
}
