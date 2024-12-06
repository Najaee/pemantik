<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('metode_pengolahan', function (Blueprint $table) {
            $table->id('id_metode_pengolahan');
            $table->string('editing'); // Proses editing
            $table->string('coding'); // Proses coding
            $table->string('input_data'); // Input data
            $table->string('penyahihan'); // Penyahihan data
            $table->string('microdata_rawdata'); // Microdata/Rawdata
            $table->string('metode_lain')->nullable(); // Metode lain (opsional)
            $table->string('metode_analisis'); // Deskripsi metode analisis
            $table->string('unit_analisis'); // Unit analisis
            $table->string('tingkat_penyajian_data'); // Tingkat penyajian data
            $table->timestamps(); // Timestamps (created_at, updated_at)
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('metode_pengolahan');
    }
};
