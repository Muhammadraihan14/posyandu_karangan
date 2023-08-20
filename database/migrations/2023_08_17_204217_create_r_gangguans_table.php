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
        Schema::create('r_gangguans', function (Blueprint $table) {
            $table->id();
            // $table->integer('g_ginjal')->nullable();
            // $table->integer('g_pengelihatan')->nullable();
            // $table->integer('g_pendengaran')->nullable();
            $table->enum('g_ginjal',['Ya','Tidak'])->nullable();
            $table->enum('g_pengelihatan',['Ya','Tidak'])->nullable();
            $table->enum('g_pendengaran',['Ya','Tidak'])->nullable();

            $table->string('penyuluhan')->nullable();
            $table->string('pemberdayaan')->nullable();
            $table->text('keterangan')->nullable();

            $table->unsignedBigInteger('lansia_id');
            $table->foreign('lansia_id')->references('id')->on('lansias');

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
        Schema::dropIfExists('r_gangguans');
    }
};
