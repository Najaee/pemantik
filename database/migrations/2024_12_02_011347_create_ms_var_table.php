<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ms_var', function (Blueprint $table) {
            $table->id('id_ms_var'); // Primary Key
            $table->string('alias');
            $table->string('referensi_pemilihan');
            $table->string('tipe_data');
            $table->string('klasifikasi_isian');
            $table->string('aturan_validasi');
            $table->string('kalimat_pernyataan');
            $table->boolean('kolom_2_diakses_umum'); // Boolean: 'Ya' atau 'Tidak'
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ms_var');
    }
};
