<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBibliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biblios', function (Blueprint $table) {
            $table->bigIncrements('id_biblio');
            $table->string('numero');
            $table->string('titre');
            $table->string('auteurs');
            $table->string('nombre');
            $table->string('panier');
            $table->string('collection');
            $table->string('editions');
            $table->string('proprietaire');
            $table->string('etat');
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
        Schema::dropIfExists('biblios');
    }
}
