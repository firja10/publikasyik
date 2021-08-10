<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGrupToEksekutifs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('eksekutifs', function (Blueprint $table) {
            //
            $table->string('grup_kelas')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('eksekutifs', function (Blueprint $table) {
            //
            $table->dropColumn('grup_kelas');

        });
    }
}
