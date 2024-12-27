<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimesheetDemandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timesheet_demandes', function (Blueprint $table) {
            $table->bigIncrements('id_demande');
            $table->foreignId('user_id');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->nullable();
            $table->date('date_demande');
            $table->date('date_validation')->nullable();
            $table->date('date_expiration')->nullable();
            $table->longText('motif');
            $table->integer('status');
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
        Schema::dropIfExists('timesheet_demandes');
    }
}
