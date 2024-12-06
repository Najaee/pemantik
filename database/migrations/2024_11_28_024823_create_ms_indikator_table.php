<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ms_indikator', function (Blueprint $table) {
            $table->id('id_ms_indikator'); // Primary Key
            $table->string('nama'); // Nama Indikator
            $table->string('konsep'); // Konsep
            $table->string('definisi'); // Definisi
            $table->string('interpretasi'); // Interpretasi
            $table->string('metode_rumus_perhitungan'); // Metode/Rumus Perhitungan
            $table->string('ukuran'); // Ukuran
            $table->string('satuan'); // Satuan
            $table->string('klasifikasi_penyajian'); // Klasifikasi Penyajian
            $table->boolean('indikator_composit'); // Boolean: Ya/Tidak
            $table->string('level_estimasi'); // Level Estimasi
            $table->boolean('dapat_diakses_umum'); // Boolean: Ya/Tidak
            $table->unsignedBigInteger('id_indikator_pembangunan'); // Foreign Key
            $table->unsignedBigInteger('id_variabel_pembangunan'); // Foreign Key

            $table->timestamps();

            // Relasi Foreign Key
            $table->foreign('id_indikator_pembangunan')
                ->references('id_indikator_pembangunan')
                ->on('indikator_pembangunan')
                ->onDelete('cascade');

            $table->foreign('id_variabel_pembangunan')
                ->references('id_variabel_pembangunan')
                ->on('variabel_pembangunan')
                ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ms_indikator');
    }
};
