<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('pj_teknis_kegiatans', function (Blueprint $table) {
            $table->id('id_pj_teknis_kegiatan');
            $table->string('nama');
            $table->string('jabatan');
            $table->text('alamat');
            $table->string('telepon')->nullable();
            $table->string('email')->unique();
            $table->string('fax')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pj_teknis_kegiatans');
    }
};
