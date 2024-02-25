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
            $table->unsignedBigInteger('user_id')->nullable();        
            $table->string('nama_lengkap')->nullable();
            $table->string('ttl')->nullable();
            $table->string('nik')->nullable();
            $table->text('alamat')->nullable();
            $table->string('email')->nullable();
            $table->string('pendidikan')->nullable();
            $table->string('pendidikan_non_akademik')->nullable();
            $table->string('keahlian')->nullable();
            $table->text('sertifikat_keahlian')->nullable();
            $table->string('portofolio_kegiatan')->nullable();
            $table->string('cuplikan_vidio_profile')->nullable();
            $table->string('upload_foto')->nullable();
            $table->string('jenis_mentor')->nullable();
            $table->string('tarif')->nullable();
            $table->string('status')->nullable()->default('0');
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')->on('users')
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
        Schema::dropIfExists('pendaftaran_mentor');
    }
};
