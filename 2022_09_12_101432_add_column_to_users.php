<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('id_grade')->after('type_user')->nullable();
            $table->foreign('id_grade')
                ->references('id_grade')
                ->on('grades')
                ->onDelete('cascade');

            $table->foreignId('id_role')->after('id_grade')->nullable();
            $table->foreign('id_role')
                ->references('id_role')
                ->on('newroles')
                ->onDelete('cascade');

                $table->foreignId('id_entreprise')->after('id_role')->nullable();
                $table->foreign('id_entreprise')
                    ->references('id_entreprise')
                    ->on('entreprises')
                    ->onDelete('cascade');
            $table->text('user_respo')->nullable();
            $table->text('user_service')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('id_grade');
            $table->dropColumn('id_role');
            $table->dropColumn('id_entreprise');
        });
    }
}
