<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_kelas')->nullable();
            $table->string('harga_kelas')->nullable();
            $table->string('deskripsi_kelas')->nullable();
            $table->string('materi_kelas')->nullable();
            $table->string('grup_kelas')->nullable();
            $table->string('metode_pembayaran')->nullable();
            $table->integer('status_pembayaran')->nullable();
            $table->string('diskon')->nullable();
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
        Schema::dropIfExists('pemesanans');
    }
}
