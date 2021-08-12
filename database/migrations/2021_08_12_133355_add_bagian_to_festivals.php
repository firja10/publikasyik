<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBagianToFestivals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('festivals', function (Blueprint $table) {
            //

            $table->longText('link_festival')->nullable();
            $table->date('tanggal_mulai')->nullable();
            $table->date('tanggal_berakhir')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')
            ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('festivals', function (Blueprint $table) {
            //
            $table->dropForeign('user_id');
            $table->dropColumn(['user_id']);
            $table->dropColumn(['link_festival']);
            $table->dropColumn(['tanggal_mulai']);
            $table->dropColumn(['tanggal_berakhir']);
        });
    }
}
