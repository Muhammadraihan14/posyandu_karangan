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
        Schema::create('PEMERIKSAAN_GANGGUANS', function (Blueprint $table) {
            $table->id();
            // $table->integer('g_ginjal')->nullable();
            // $table->integer('g_pengelihatan')->nullable();
            // $table->integer('g_pendengaran')->nullable();
            $table->dateTime('tanggal_p_g')->nullable();
            $table->enum('g_ginjal',['Ya','Tidak'])->nullable();
            $table->enum('g_pengelihatan',['Ya','Tidak'])->nullable();
            $table->enum('g_pendengaran',['Ya','Tidak'])->nullable();

            $table->string('penyuluhan')->nullable();
            $table->string('pemberdayaan')->nullable();
            $table->text('keterangan')->nullable();

            $table->unsignedBigInteger('desa_id');
            $table->foreign('desa_id')->references('id')->on('desas')->onDelete('cascade')->onUpdate('cascade');
            
            $table->unsignedBigInteger('lansia_id');
            $table->foreign('lansia_id')->references('id')->on('lansias')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

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
