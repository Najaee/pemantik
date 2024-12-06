<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('petugas_pengumpulan_data', function (Blueprint $table) {
            $table->id('id_petugas_pengumpulan_data');
            $table->string('cara_pengumpulan_data');
            $table->string('kegiatan_ini_dilakukan');
            $table->string('frekuensi_penyelenggara_kegiatan');
            $table->string('tipe_pengumpulan_data');
            $table->string('metode_pengumpulan_data');
            $table->string('unit_pengumpulan_data');
            $table->string('cakupan_wilayah_data');
            $table->string('wilayah_data');
            $table->boolean('pilot_survey');
            $table->string('metode_pemeriksaan_kualitas_pengumpulan_data');
            $table->boolean('penyesuaian_nonresponden');
            $table->string('petugas_pengumpulan_data');
            $table->string('persyaratan_petugas_pengumpulan_data');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('petugas_pengumpulan_data');
    }
};
