<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBagianToEksekutifs extends Migration
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

            $table->longText('link_grup_diskusi')->nullable();
            $table->date('tanggal_mulai')->nullable();
            $table->date('tanggal_akhir')->nullable();
            $table->string('mentor')->nullable();
            $table->string('sertifikat')->nullable();
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
            $table->dropColumn('link_grup_diskusi');
            $table->dropColumn('tanggal_mulai');
            $table->dropColumn('tanggal_akhir');
            $table->dropColumn('mentor');
            $table->dropColumn('sertifikat');
        });
    }
}
