<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('pj_jadwal_kegiatans', function (Blueprint $table) {
            $table->id('id_pj_jadwal_kegiatan');
            $table->string('perencanaan_persiapan');
            $table->string('desain');
            $table->string('pengumpulan_data');
            $table->string('pengolahan');
            $table->string('analisis');
            $table->string('diseminasi');
            $table->string('evaluasi');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pj_jadwal_kegiatans');
    }
};
