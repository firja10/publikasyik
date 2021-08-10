<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubmaterisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submateris', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('nama_submateri')->nullable();
            $table->string('gambar_submateri')->nullable();
            $table->longText('penjelasan_submateri')->nullable();
            $table->longText('link_submateri')->nullable();
            $table->longText('referensi_submateri')->nullable();
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
        Schema::dropIfExists('submateris');
    }
}
