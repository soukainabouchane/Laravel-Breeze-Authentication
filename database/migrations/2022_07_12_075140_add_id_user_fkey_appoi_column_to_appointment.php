<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdUserFkeyAppoiColumnToAppointment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('appointments', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->index('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*Schema::table('appointments', function (Blueprint $table) {
            $table->dropForeign('appointments_user_id_foreign');
            $table->dropIndex('appointments_user_id_index');
            $table->dropColumn('user_id');
        });*/
    }
}
