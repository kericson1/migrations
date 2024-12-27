<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalUsersInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_users_info', function (Blueprint $table) {
            $table->id();
            $table->integer('users_id');
            $table->string('name');
            $table->string('passport_no')->nullable();
            $table->date('passport_exp_date')->nullable();
            $table->string('phone')->nullable();
            $table->string('nationality')->nullable();
            $table->string('religion')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('employment_spouse')->nullable();
            $table->integer('children_qty')->nullable();
            // $table->string('sexe')->nullable();
            // $table->integer('actif')->comment('0=actif,1=inactif')->default(0);
            // $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            // $table->string('password');
            // $table->string('genre')->nullable();
            // $table->string('username')->nullable();
            // $table->string('type_user')->nullable();
            // $table->rememberToken();
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
        Schema::dropIfExists('personal_users_info');
    }
}
