<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkToSubmateris extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('submateris', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('materi_id')->after('referensi_submateri')->nullable();
            $table->foreign('materi_id')->references('id')->on('submateris')
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
        Schema::table('submateris', function (Blueprint $table) {
            //
            $table->dropForeign('materi_id');
            $table->dropColumn(['materi_id']);
        });
    }
}
