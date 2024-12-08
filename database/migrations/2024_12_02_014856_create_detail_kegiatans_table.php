<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('detail_kegiatans', function (Blueprint $table) {
            $table->id('id_detail_kegiatan');
            $table->unsignedBigInteger('id_kegiatan');
            $table->unsignedBigInteger('id_penyelenggara');
            $table->unsignedBigInteger('id_pj_kegiatan');
            $table->unsignedBigInteger('id_pj_teknis_kegiatan');
            $table->unsignedBigInteger('id_walidata');
            $table->unsignedBigInteger('id_pj_jadwal_kegiatan');
            $table->unsignedBigInteger('id_var_utama_yg_digunakan');
            $table->unsignedBigInteger('id_jml_pengumpulan_data');
            $table->unsignedBigInteger('id_rancangan_lap_publikasi');
            $table->unsignedBigInteger('id_metode_pengolahan');
            $table->unsignedBigInteger('id_produk_data_utk_umum');
            $table->unsignedBigInteger('id_petugas_pengumpulan_data');
            $table->unsignedBigInteger('id_ds');
            $table->unsignedBigInteger('id_ds_nonprobabilitas');
            $table->unsignedBigInteger('id_ds_probabilitas');
            $table->unsignedBigInteger('id_indikator_pembangunan');
            $table->unsignedBigInteger('id_variabel_pembangunan');
            $table->unsignedBigInteger('id_ms_indikator');

            // Foreign keys
            $table->foreign('id_kegiatan')->references('id_kegiatan')->on('kegiatans');
            $table->foreign('id_penyelenggara')->references('id_penyelenggara')->on('penyelenggaras');
            $table->foreign('id_pj_kegiatan')->references('id_pj_kegiatan')->on('pj_kegiatans');
            $table->foreign('id_pj_teknis_kegiatan')->references('id_pj_teknis_kegiatan')->on('pj_teknis_kegiatans');
            $table->foreign('id_walidata')->references('id_walidata')->on('walidatas');
            $table->foreign('id_pj_jadwal_kegiatan')->references('id_pj_jadwal_kegiatan')->on('pj_jadwal_kegiatans');
            $table->foreign('id_var_utama_yg_digunakan')->references('id_var_utama_yg_digunakan')->on('var_utama_yg_digunakans');
            $table->foreign('id_jml_pengumpulan_data')->references('id_jml_pengumpulan_data')->on('jml_pengumpulan_data');
            $table->foreign('id_rancangan_lap_publikasi')->references('id_rancangan_lap_publikasi')->on('rancangan_lap_publikasi');
            $table->foreign('id_metode_pengolahan')->references('id_metode_pengolahan')->on('metode_pengolahan');
            $table->foreign(columns: 'id_produk_data_utk_umum')->references('id_produk_data_utk_umum')->on('produk_data_utk_umum');
            $table->foreign('id_petugas_pengumpulan_data')->references('id_petugas_pengumpulan_data')->on('petugas_pengumpulan_data');
            $table->foreign('id_ds')->references('id_ds')->on('desain_sampels');
            $table->foreign(columns: 'id_ds_nonprobabilitas')->references('id_ds_nonprobabilitas')->on('ds_nonprobabilitas');
            $table->foreign('id_ds_probabilitas')->references('id_ds_probabilitas')->on('ds_probabilitas');
            $table->foreign('id_indikator_pembangunan')->references('id_indikator_pembangunan')->on('indikator_pembangunan');
            $table->foreign('id_variabel_pembangunan')->references('id_variabel_pembangunan')->on('variabel_pembangunan');
            $table->foreign(columns: 'id_ms_indikator')->references('id_ms_indikator')->on('ms_indikator');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('detail_kegiatans');
    }
};
