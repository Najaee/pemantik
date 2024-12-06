<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ttd', function (Blueprint $table) {
            $table->id('id_ttd'); // Primary Key
            $table->string('waktu_tempat'); // Kolom Waktu & Tempat
            $table->string('kep_dinas'); // Kolom Kepala Dinas
            $table->string('nip'); // Kolom NIP
            $table->string('ttd_image'); // Kolom untuk menyimpan path file gambar
            $table->timestamps(); // Timestamps
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ttd');
    }
};
