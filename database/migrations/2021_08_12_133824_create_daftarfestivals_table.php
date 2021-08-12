<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarfestivalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftarfestivals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_festival')->nullable();
            $table->string('gambar_festival')->nullable();
            $table->longText('deskripsi_festival')->nullable();
            $table->string('harga_festival')->nullable();
            $table->string('materi_festival')->nullable();
            $table->longText('link_festival')->nullable();
            $table->date('tanggal_mulai')->nullable();
            $table->date('tanggal_berakhir')->nullable();
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
        Schema::dropIfExists('daftarfestivals');
    }
}
