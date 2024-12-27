<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetValidationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projet_validations', function (Blueprint $table) {
            $table->bigIncrements('id_projetvalidation');
            $table->string('fichier_validation');

            $table->foreignId('id_projet');
            $table->foreign('id_projet')
                ->references('id_projet')
                ->on('projets')
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
        Schema::dropIfExists('projet_validations');
    }
}
