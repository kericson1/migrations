<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentaires', function (Blueprint $table) {
            $table->bigIncrements('id_commentaire');

            $table->foreignId('id_client');
            $table->foreign('id_client')
                ->references('id_client')
                ->on('clients')
                ->onDelete('cascade');

            $table->foreignId('user_id');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->longText('commentaire');
            $table->date('date_commentaire');
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
        Schema::dropIfExists('commentaires');
    }
}
