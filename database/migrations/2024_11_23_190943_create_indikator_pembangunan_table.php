<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('indikator_pembangunan', function (Blueprint $table) {
            $table->id('id_indikator_pembangunan'); // Primary Key
            $table->string('publikasi_ketersediaan'); // Publikasi Ketersediaan
            $table->string('nama'); // Nama Indikator
            $table->timestamps(); // created_at, updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('indikator_pembangunan');
    }
};
