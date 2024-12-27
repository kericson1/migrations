<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorrespondantActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('correspondant_actions', function (Blueprint $table) {
            $table->bigIncrements('id_correspaction');

            $table->foreignId('id_correspondant');
            $table->foreign('id_correspondant')
                ->references('id_correspondant')
                ->on('correspondants')
                ->onDelete('cascade');

            $table->string('action');
            $table->date('date_action');
            $table->longText('commentaire')->nullable();
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
        Schema::dropIfExists('correspondant_actions');
    }
}
