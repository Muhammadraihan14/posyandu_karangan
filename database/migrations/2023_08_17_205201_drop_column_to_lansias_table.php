<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lansias', function (Blueprint $table) {
            $table->dropColumn('g_ginjal');
            $table->dropColumn('g_pengelihatan');
            $table->dropColumn('g_pendengaran');
            $table->dropColumn('penyuluhan');
            $table->dropColumn('pemberdayaan');
            $table->dropColumn('keterangan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lansias', function (Blueprint $table) {
            $table->integer('g_ginjal')->nullable();
            $table->integer('g_pengelihatan')->nullable();
            $table->integer('g_pendengaran')->nullable();
            $table->string('penyuluhan')->nullable();
            $table->string('pemberdayaan')->nullable();
            $table->text('keterangan')->nullable();
        });
    }
};
