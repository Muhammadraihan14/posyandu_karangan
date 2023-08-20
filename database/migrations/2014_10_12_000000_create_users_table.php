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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->string('name', 255);
            $table->string('email')->unique();
            $table->enum('user_type',['admin','petugas']);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('image_url', 500)->nullable();
            $table->string('nip')->unique();
            $table->enum('gender',['pria','wanita'])->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
