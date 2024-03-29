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
        Schema::create('pembayaran_trainer', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('nama');
            $table->unsignedBigInteger('jenis_trainer');
            $table->string('tanggal');
            $table->string('jumlah_potongan');
            $table->string('jumlah_pembayaran');
            $table->string('foto_pembayaran');
            $table->timestamps();

            
            $table->foreign('jenis_trainer')
                    ->references('id')->on('pendaftaran_mentor')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembayaran_trainer');
    }
};

