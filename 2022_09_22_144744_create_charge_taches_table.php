<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChargeTachesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('charge_taches', function (Blueprint $table) {
            $table->bigIncrements('id_charge');

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

            $table->foreignId('id_chargetache')->nullable();
            $table->foreign('id_chargetache')
                ->references('id_chargetache')
                ->on('charge_factures')
                ->onDelete('cascade');

            $table->string('charge_tache');
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
        Schema::dropIfExists('charge_taches');
    }
}
