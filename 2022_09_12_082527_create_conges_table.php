<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCongesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conges', function (Blueprint $table) {
            $table->bigIncrements('id_conge');

            $table->foreignId('user_id');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreignId('id_respo');

            $table->foreign('id_respo')
                ->references('id_respo')
                ->on('respos')
                ->onDelete('cascade');

            $table->datetimeTz('date_debut');
            $table->datetimeTz('date_fin');
            $table->string('duree');
            $table->string('date_retour');
            $table->string('etat');
            $table->text('motif');
            $table->text('motif_etat')->nullable();
            $table->string('fichier_conge')->nullable();
            $table->string('type_conge');
            $table->boolean('supprime_conge')->default(0)->comment('0 = present, 1 = supprime');
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
        Schema::dropIfExists('conges');
    }
}
