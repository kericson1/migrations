<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoutTachesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cout_taches', function (Blueprint $table) {
            $table->bigIncrements('id_cout');

            $table->foreignId('user_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreignId('id_tache');
            $table->foreign('id_tache')
                ->references('id_tache')
                ->on('taches')
                ->onDelete('cascade');

            $table->foreignId('id_couttache')->nullable();
            $table->foreign('id_couttache')
                ->references('id_couttache')
                ->on('cout_factures')
                ->onDelete('cascade');

            $table->string('cout_tache');
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
        Schema::dropIfExists('cout_taches');
    }
}
