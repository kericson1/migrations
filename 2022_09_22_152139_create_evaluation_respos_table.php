<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluationResposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluation_respos', function (Blueprint $table) {
            $table->bigIncrements('id_evaluate');
            $table->foreignId('user_id');
            $table->foreignId('id_projet');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_projet')->references('id_projet')->on('projets')->onDelete('cascade');
            $table->string('organisation')->nullable();
            $table->string('responsabilisation')->nullable();
            $table->string('communication')->nullable();
            $table->string('federation')->nullable();
            $table->string('gestion_equitable')->nullable();
            $table->string('comprehension')->nullable();
            $table->string('prise_decision')->nullable();
            $table->string('deleguation')->nullable();
            $table->string('capacite')->nullable();
            $table->string('presence')->nullable();
            $table->string('disponibilite')->nullable();
            $table->string('adhesion')->nullable();
            $table->string('capacite_emp')->nullable();
            $table->longText('comment_org')->nullable();
            $table->longText('comment_respo')->nullable();
            $table->longText('comment_com')->nullable();
            $table->longText('comment_fed')->nullable();
            $table->longText('comment_gestequit')->nullable();
            $table->longText('comment_compr')->nullable();
            $table->longText('comment_prise')->nullable();
            $table->longText('comment_deleg')->nullable();
            $table->longText('comment_cap')->nullable();
            $table->longText('comment_pre')->nullable();
            $table->longText('comment_disp')->nullable();
            $table->longText('comment_adh')->nullable();
            $table->longText('comment_capemp')->nullable();
            $table->date('date_soumission');
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
        Schema::dropIfExists('evaluation_respos');
    }
}
