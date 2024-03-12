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
            $table->string('nik')->nullable();
            $table->string('alamat');
            // $table->integer('gender');
            $table->enum('gender',['pria','wanita']);
            // $table->integer('g_ginjal')->nullable();
            $table->enum('g_ginjal',['Ya','Tidak'])->nullable();
            $table->enum('g_pengelihatan',['Ya','Tidak'])->nullable();
            $table->enum('g_pendengaran',['Ya','Tidak'])->nullable();
            

            // $table->integer('g_pengelihatan')->nullable();
            // $table->integer('g_pendengaran')->nullable();
            $table->string('penyuluhan')->nullable();
            $table->string('pemberdayaan')->nullable();
            $table->text('keterangan')->nullable();
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
