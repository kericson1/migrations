<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespoServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respo_service', function (Blueprint $table) {
            $table->unsignedBigInteger('id_service');

            $table->foreign('id_service')
                ->references('id_service')
                ->on('services')
                ->onDelete('cascade');

            $table->unsignedBigInteger('id_respo');

            $table->foreign('id_respo')
                ->references('id_respo')
                ->on('respos')
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
        Schema::dropIfExists('respo_service');
    }
}
