<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFonctionnaliteNewroleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fonctionnalite_newrole', function (Blueprint $table) {
            $table->unsignedBigInteger('id_role');
            $table->foreign('id_role')
                ->references('id_role')
                ->on('newroles')
                ->onDelete('cascade');

            $table->unsignedBigInteger('id_fonc');
            $table->foreign('id_fonc')
                ->references('id_fonc')
                ->on('fonctionnalites')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fonctionnalite_newrole');
    }
}
