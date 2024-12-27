<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserReunionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_reunion', function (Blueprint $table) {
            $table->foreignId('user_id');
            $table->foreignId('id_reunion');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_reunion')->references('id_reunion')->on('reunions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_reunion');
    }
}
