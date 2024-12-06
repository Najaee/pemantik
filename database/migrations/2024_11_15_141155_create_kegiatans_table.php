<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('kegiatans', function (Blueprint $table) {
            $table->id('id_kegiatan');
            $table->year('tahun');
            $table->string('judul_kegiatan');
            $table->string('sektor_kegiatan');
            $table->enum('rekomendasi_bps', ['yes', 'no']);
            $table->string('nomor_rekomendasi')->nullable();
            $table->text('latar_belakang');
            $table->text('kegiatan');
            $table->text('tujuan_manfaat');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kegiatans');
    }
};

