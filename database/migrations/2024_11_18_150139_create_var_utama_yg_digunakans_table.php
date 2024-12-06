<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('var_utama_yg_digunakans', function (Blueprint $table) {
            $table->id('id_var_utama_yg_digunakan');
            $table->string('nama');
            $table->text('konsep');
            $table->text('definisi');
            $table->string('referensi_waktu');
            $table->string('sumber');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('var_utama_yg_digunakans');
    }
};
