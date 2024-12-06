<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('penyelenggaras', function (Blueprint $table) {
            $table->id('id_penyelenggara');
            $table->string('penanggungjawab');
            $table->string('perangkat_daerah_penyelenggara');
            $table->string('provinsi');
            $table->string('kabupaten_kota');
            $table->text('alamat_lengkap_penyelenggara');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('penyelenggaras');
    }
};
