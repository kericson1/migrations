<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatutClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statut_clients', function (Blueprint $table) {
            $table->bigIncrements('id_status');

            $table->foreignId('id_etape');
            $table->foreign('id_etape')
                ->references('id_etape')
                ->on('etape_clients')
                ->onDelete('cascade');

            $table->string('nom_status');
            $table->date('date_status');
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
        Schema::dropIfExists('statut_clients');
    }
}
