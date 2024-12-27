<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankUsersInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_users_info', function (Blueprint $table) {
            $table->id();
            $table->integer('users_id');
            $table->string('bank_name');
            $table->string('bank_account_number');
            $table->string('ifsc_code');
            $table->string('pan_number');
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
        Schema::dropIfExists('bank_users_info');
    }
}
