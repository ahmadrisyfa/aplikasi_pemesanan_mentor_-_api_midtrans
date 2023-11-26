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
        Schema::create('daftar_mentor', function (Blueprint $table) {
            $table->id();
            $table->string('photo')->nullable();
            $table->string('nama')->nullable();
            $table->string('pendidikan')->nullable();
            $table->string('keahlian')->nullable();
            $table->string('portofolio')->nullable();
            $table->string('vidio_profile')->nullable();
            $table->string('harga')->nullable();
            $table->string('jenis')->nullable();
            $table->text('alamat')->nullable();
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
        Schema::dropIfExists('daftar_mentor');
    }
};
