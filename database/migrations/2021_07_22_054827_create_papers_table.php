<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('papers', function (Blueprint $table) {
            // $table->id();
            $table->bigIncrements('id');

            $table->string('judul_paper')->nullable();
            $table->string('poster_paper')->nullable();
            $table->string('deskripsi_paper')->nullable();
            $table->string('link_paper')->nullable();
            $table->date('tanggal_paper')->nullable();


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
        Schema::dropIfExists('papers');
    }
}
