<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOuverturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ouvertures', function (Blueprint $table) {
            $table->bigIncrements('id_ouverture');
            $table->foreignId('user_id');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->date('date_prise');
            $table->time('heure_prise');
            $table->date('date_remise')->nullable();
            $table->time('heure_remise')->nullable();

            $table->foreignId('id_entreprise')->nullable();
            $table->foreign('id_entreprise')
                ->references('id_entreprise')
                ->on('entreprises')
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
        Schema::dropIfExists('ouvertures');
    }
}
