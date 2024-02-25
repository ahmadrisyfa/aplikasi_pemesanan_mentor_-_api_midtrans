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
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mentor_id')->nullable();  
            $table->string('nama')->nullable();
            $table->string('instansi')->nullable();
            $table->string('alamat_instansi')->nullable();
            $table->string('lokasi_kegiatan')->nullable();
            $table->string('tanggal_kegiatan')->nullable();
            $table->string('jam')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('kendala_yang_di_alami')->nullable();
            $table->string('harapan_dari_adanya_kegiatan')->nullable();
            $table->string('jumlah_pembayaran')->nullable();
            $table->string('bayar')->nullable()->default(0);                    
            $table->timestamps();

            
            $table->foreign('mentor_id')
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
        Schema::dropIfExists('pemesanan');
    }
};
