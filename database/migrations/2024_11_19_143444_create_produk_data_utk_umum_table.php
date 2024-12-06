<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('produk_data_utk_umum', function (Blueprint $table) {
            $table->id('id_produk_data_utk_umum'); // Primary Key
            $table->string('spublikasi_tercetak'); // Publikasi tercetak
            $table->string('publikasi_elektronik'); // Publikasi elektronik
            $table->string('publikasi_data_mikro'); // Publikasi data mikro
            $table->timestamps(); // Timestamps (created_at, updated_at)
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('produk_data_utk_umum');
    }
};
