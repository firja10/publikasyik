<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeminarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seminars', function (Blueprint $table) {
            // $table->id();
            $table->bigIncrements('id');

            $table->string('judul_seminar')->nullable();
            $table->string('poster_seminar')->nullable();
            $table->string('deskripsi_seminar')->nullable();
            $table->string('link_seminar')->nullable();
            $table->date('tanggal_seminar')->nullable();

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
        Schema::dropIfExists('seminars');
    }
}
