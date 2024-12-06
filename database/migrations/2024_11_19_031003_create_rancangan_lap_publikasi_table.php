<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rancangan_lap_publikasi', function (Blueprint $table) {
            $table->id('id_rancangan_lap_publikasi');
            $table->string('rancangan_output'); // Nama atau jenis rancangan output
            $table->text('rancangan_deskripsi_var'); // Deskripsi variabel
            $table->timestamps(); // Timestamps: created_at, updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rancangan_lap_publikasi');
    }
};
