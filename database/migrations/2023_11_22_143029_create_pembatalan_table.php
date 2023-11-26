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
        Schema::create('pembatalan', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('instansi')->nullable();
            $table->string('alamat_instansi')->nullable();
            $table->string('lokasi_kegiatan')->nullable();
            $table->string('tanggal_kegiatan')->nullable();
            $table->string('jam')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('jumlah_pembayaran')->nullable();
            $table->string('alasan_pembatalan')->nullable();
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
        Schema::dropIfExists('pembatalan');
    }
};
