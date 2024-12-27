<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluations', function (Blueprint $table) {
            $table->bigIncrements('id_evaluation');
            $table->foreignId('user_id');
            $table->foreignId('id_projet');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_projet')->references('id_projet')->on('projets')->onDelete('cascade');
            $table->string('sens')->nullable();
            $table->longText('comment_sens')->nullable();
            $table->string('implication')->nullable();
            $table->longText('comment_implication')->nullable();
            $table->string('respect')->nullable();
            $table->longText('comment_respect')->nullable();
            $table->string('agir')->nullable();
            $table->longText('comment_agir')->nullable();
            $table->string('ecoute')->nullable();
            $table->longText('comment_ecoute')->nullable();
            $table->string('formation')->nullable();
            $table->longText('comment_formation')->nullable();
            $table->string('travail')->nullable();
            $table->longText('comment_travail')->nullable();
            $table->string('quantite')->nullable();
            $table->longText('comment_quantite')->nullable();
            $table->string('autonomie')->nullable();
            $table->longText('comment_autonomie')->nullable();
            $table->string('difficulte')->nullable();
            $table->longText('comment_difficulte')->nullable();
            $table->string('sein')->nullable();
            $table->longText('comment_sein')->nullable();
            $table->string('travailler')->nullable();
            $table->longText('comment_travailler')->nullable();
            $table->string('pugnacite')->nullable();
            $table->longText('comment_pugnacite')->nullable();
            $table->string('convaincre')->nullable();
            $table->longText('comment_convaincre')->nullable();
            $table->string('retranscri')->nullable();
            $table->longText('comment_retranscri')->nullable();
            $table->string('aptitude')->nullable();
            $table->longText('comment_aptitude')->nullable();
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
        Schema::dropIfExists('evaluations');
    }
}
