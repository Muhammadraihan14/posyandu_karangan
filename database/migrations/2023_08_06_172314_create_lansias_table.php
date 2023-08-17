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
        Schema::create('lansias', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('umur');
            // $table->dateTime('pemeriksaan1')->nullable();
            // $table->dateTime('pemeriksaan2')->nullable();
            $table->string('nik')->unique();
            $table->string('alamat');
            $table->integer('gender');
            $table->integer('g_ginjal')->nullable();
            $table->integer('g_pengelihatan')->nullable();
            $table->integer('g_pendengaran')->nullable();
            $table->string('penyuluhan')->nullable();
            $table->string('pemberdayaan')->nullable();
            $table->text('keterangan')->nullable();
            $table->unsignedBigInteger('petugas_id');
            $table->foreign('petugas_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('lansias');
    }
};
