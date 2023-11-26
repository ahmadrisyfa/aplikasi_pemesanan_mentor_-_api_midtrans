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
        Schema::create('pendaftaran_mentor', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('ttl');
            $table->string('nik');
            $table->text('alamat');
            $table->string('pendidikan')->nullable();
            $table->string('pendidikan_non_akademik')->nullable();
            $table->string('keahlian')->nullable();
            $table->string('sertifikat_keahlian')->nullable();
            $table->string('portofolio_kegiatan')->nullable();
            $table->string('cuplikan_vidio_profile')->nullable();
            $table->string('upload_foto')->nullable();
            $table->string('jenis_mentor')->nullable();
            $table->string('ratecard')->nullable();
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
        Schema::dropIfExists('pendaftaran_mentor');
    }
};
