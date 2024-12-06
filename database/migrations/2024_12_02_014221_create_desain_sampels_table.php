<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('desain_sampels', function (Blueprint $table) {
            $table->id('id_ds');
            $table->string('metode_pemilihan_sampel_akhir');
            $table->string('metode_yg_digunakan');
            $table->string('jenis_rancangan_sampel');
            $table->string('sarana_pengumpulan_data');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('desain_sampels');
    }
};
