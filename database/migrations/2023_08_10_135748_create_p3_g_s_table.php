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
        Schema::create('p3_g_s', function (Blueprint $table) {
            $table->id();
            // $table->string('tingkat_kemandirian')->nullable();
            $table->dateTime('tanggal_p_p3g')->nullable();
            $table->enum('tingkat_kemandirian',['A','B','C'])->nullable();

            // $table->integer('g_emosional')->nullable();
            // $table->integer('g_kognitiv')->nullable();
            $table->enum('g_emosional',['Ya','Tidak'])->nullable();
            $table->enum('g_kognitiv',['Ya','Tidak'])->nullable();

            $table->enum('p_resiko_malnutrisi',['Normal','Malnutrisi','Resiko Malnutrisi'])->nullable();
            // $table->integer('p_resiko_jatuh')->nullable();
            $table->enum('p_resiko_jatuh',['Ya','Tidak'])->nullable();

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
        Schema::dropIfExists('p3_g_s');
    }
};
