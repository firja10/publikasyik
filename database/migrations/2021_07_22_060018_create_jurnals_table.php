<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJurnalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jurnals', function (Blueprint $table) {
            // $table->id();
            $table->bigIncrements('id');

            $table->string('judul_jurnal')->nullable();
            $table->string('poster_jurnal')->nullable();
            $table->string('deskripsi_jurnal')->nullable();
            $table->string('link_jurnal')->nullable();
            $table->string('nomor_jurnal')->nullable();
            $table->date('tanggal_jurnal')->nullable();

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
        Schema::dropIfExists('jurnals');
    }
}
