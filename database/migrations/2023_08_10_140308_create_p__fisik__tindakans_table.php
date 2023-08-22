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
  
        Schema::create('p__fisik__tindakans', function (Blueprint $table) {
            $table->id();
            $table->dateTime('tanggal_p')->nullable();
            //imt
            $table->float('berat_badan', 8, 2)->nullable();
            $table->float('tinggi_badan', 8, 2)->nullable();
            $table->float('imt', 8, 2)->nullable();
            $table->enum('status_gizi',['Kurang','Normal','Lebih'])->nullable();
            //tekanan darah
            $table->integer('sistole')->nullable();
            $table->integer('diastole')->nullable();
            $table->enum('tekanan_darah',['Tinggi','Normal','Rendah'])->nullable();
            //lain2
            $table->string('lain')->nullable();
            $table->string('tata_laksana')->nullable();
            // $table->string('konseling')->nullable();
            $table->enum('konseling',['Ya','Tidak'])->nullable();

            // $table->integer('rujuk')->nullable();
            $table->enum('rujuk',['Ya','Tidak'])->nullable();




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
        Schema::dropIfExists('p__fisik__tindakans');
    }
};
