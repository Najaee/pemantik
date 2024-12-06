<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('ds_probabilitas', function (Blueprint $table) {
            $table->id('id_ds_probabilitas');
            $table->string('kerangka_sampel_tahap_akhir');
            $table->string('fraksi_sampel_keseluruhan');
            $table->string('sampling_eror_var_utama');
            $table->string('unit_sampel');
            $table->string('responden');
            $table->string('unit_observasi');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ds_probabilitas');
    }
};
