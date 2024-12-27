<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('prenom')->nullable();
            $table->string('fullname');
            $table->string('phone')->nullable();
            $table->string('image')->nullable();
            $table->string('poste')->nullable();
            $table->string('adresse')->nullable();
            $table->string('anniversaire')->nullable();
            $table->string('civilite')->nullable();
            $table->string('sexe')->nullable();
            $table->integer('actif')->comment('0=actif,1=inactif')->default(0);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('matricule')->nullable();
            $table->string('username')->nullable();
            $table->string('type_user')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
