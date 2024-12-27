<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtapeClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etape_clients', function (Blueprint $table) {
            $table->bigIncrements('id_etape');

            $table->foreignId('id_client');
            $table->foreign('id_client')
                ->references('id_client')
                ->on('clients')
                ->onDelete('cascade');

            $table->string('nom_etape');
            $table->date('date_etape');
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
        Schema::dropIfExists('etape_clients');
    }
}
