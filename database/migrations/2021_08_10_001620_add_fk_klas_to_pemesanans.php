<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkKlasToPemesanans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pemesanans', function (Blueprint $table) {
            //

            $table->unsignedBigInteger('kelas_id')->after('grup_kelas')->nullable();
            $table->foreign('kelas_id')->references('id')->on('eksekutifs')
            ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pemesanans', function (Blueprint $table) {
            //
            $table->dropForeign('kelas_id');
            $table->dropColumn(['kelas_id']);
        });
    }
}
