<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandeComptesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demande_comptes', function (Blueprint $table) {
            $table->bigIncrements('id_compte');
            $table->string('nom');
            $table->string('email');
            $table->string('contact');
            $table->string('adresse');
            $table->date('date_demande');
            $table->integer('statut')->comment('0=actif,1=inactif')->default(0);

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
        Schema::dropIfExists('demande_comptes');
    }
}
