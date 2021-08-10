<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkToMateris extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('materis', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('kelas_id')->after('referensi_materi')->nullable();
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
        Schema::table('materis', function (Blueprint $table) {
            //
            $table->dropForeign('kelas_id');
            $table->dropColumn(['kelas_id']);
        });
    }
}
