<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEksekutifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eksekutifs', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('nama_kelas')->nullable();
            $table->string('gambar_kelas')->nullable();
            $table->longText('deskripsi_kelas')->nullable();
            $table->string('harga_kelas')->nullable();
            $table->string('materi_kelas')->nullable();
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
        Schema::dropIfExists('eksekutifs');
    }
}
