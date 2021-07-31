<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ppts', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('nama_ppt')->nullable();
            $table->string('gambar_ppt')->nullable();
            $table->string('deskripsi_ppt')->nullable();
            $table->string('harga_ppt')->nullable();
            $table->string('materi_ppt')->nullable();
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
        Schema::dropIfExists('ppts');
    }
}
