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
            $table->enum('tingkat_kemandirian',['A','B','C',''])->default('');
            $table->integer('g_emosional')->nullable();
            $table->integer('g_kognitiv')->nullable();
            $table->enum('p_resiko_malnutrisi',['N','M','RM',''])->default('');
            $table->integer('p_resiko_jatuh')->nullable();
            $table->unsignedBigInteger('lansia_id');
            $table->foreign('lansia_id')->references('id')->on('lansias')->onDelete('cascade')->onUpdate('cascade');
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
