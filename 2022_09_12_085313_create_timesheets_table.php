<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimesheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timesheets', function (Blueprint $table) {
            $table->bigIncrements('id_timesheet');

            $table->foreignId('id_tache');
            $table->foreign('id_tache')
                ->references('id_tache')
                ->on('taches')
                ->onDelete('cascade');

            $table->foreignId('id_projet');
            $table->foreign('id_projet')
                ->references('id_projet')
                ->on('projets')
                ->onDelete('cascade');

            $table->foreignId('user_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreignId('id_respo')->nullable();
            $table->foreign('id_respo')
                ->references('id_respo')
                ->on('respos')
                ->onDelete('cascade');

            $table->date('date_timesheet')->nullable();
            $table->integer('statut');
            $table->integer('supprimer_timesheet')->comment('0 = encours, 1 = supprimé')->default(0);
            $table->integer('validation_timesheet')->default('0');
            $table->integer('heure_timesheet')->nullable();
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
        Schema::dropIfExists('timesheets');
    }
}
