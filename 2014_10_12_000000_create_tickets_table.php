<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->bigIncrements('id_ticket');
            $table->integer('user_id');
            $table->integer('assigned_id');
            $table->string('code');
            $table->date('date_ticket');
            $table->date('date_resolution')->nullable();
            $table->integer('priorite')->comment('0 = haute, 1 = moyenne, 2 = basse');
            $table->integer('status')->comment('0 = encours, 1 = resolus, 2 = fermer');
            $table->string('fichier')->nullable();
            $table->string('description')->nullable();
            $table->string('sujet_ticket');
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
        Schema::dropIfExists('tickets');
    }
}
