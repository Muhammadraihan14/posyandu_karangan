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
        Schema::create('PEMERIKSAAN_LABS', function (Blueprint $table) {
            $table->id();
            $table->dateTime('tanggal_p_lab')->nullable();
            $table->integer('kolesterol')->nullable();
            $table->integer('gula_darah')->nullable();
            $table->float('asam_urat', 8, 2)->nullable();
            $table->enum('status_asam_urat',['Tinggi','Normal'])->nullable();
            $table->integer('hb')->nullable();
            $table->unsignedBigInteger('lansia_id');
            $table->foreign('lansia_id')->references('id')->on('lansias')->onDelete('cascade')->onUpdate('cascade');
            
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedBigInteger('desa_id');
            $table->foreign('desa_id')->references('id')->on('desas')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('p__l_a_b_s');
    }
};
