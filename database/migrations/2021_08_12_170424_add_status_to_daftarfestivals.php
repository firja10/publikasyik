<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToDaftarfestivals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('daftarfestivals', function (Blueprint $table) {
            //
            $table->string('metode_pembayaran')->nullable();
            $table->integer('status_pembayaran')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('daftarfestivals', function (Blueprint $table) {
            //
            $table->dropColumn(['metode_pembayaran']);
            $table->dropColumn(['status_pembayaran']);
        });
    }
}
