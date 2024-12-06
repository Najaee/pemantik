<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('variabel_pembangunan', function (Blueprint $table) {
            $table->id('id_variabel_pembangunan'); // Primary Key
            $table->string('kegiatan_penghasil'); // Kegiatan Penghasil
            $table->string('kode_keg'); // Kode Kegiatan
            $table->string('nama'); // Nama Variabel
            $table->unsignedBigInteger('id_ttd'); // Foreign Key ke tabel ttd
            $table->timestamps();

            // Relasi Foreign Key
            $table->foreign('id_ttd')->references('id_ttd')->on('ttd')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('variabel_pembangunan');
    }
};
