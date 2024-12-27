<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChargeFacturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('charge_factures', function (Blueprint $table) {
            $table->bigIncrements('id_chargetache');
            // $table->integer('id_grade')->unsigned()->nullable();
            $table->foreignId('id_grade');

            $table->foreign('id_grade')
                ->references('id_grade')
                ->on('grades')
                ->onDelete('cascade');

            $table->string('cout_horaire');
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
        Schema::dropIfExists('charge_factures');
    }
}
