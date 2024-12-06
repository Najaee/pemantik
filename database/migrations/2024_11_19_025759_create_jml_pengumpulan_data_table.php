<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('jml_pengumpulan_data', function (Blueprint $table) {
            $table->id('id_jml_pengumpulan_data');
            $table->integer('supervisor'); // Jumlah supervisor/pengawas
            $table->integer('enum'); // Jumlah enum/pengumpul data
            $table->string('pelatihan_pengumpul_data'); // Nama pelatihan pengumpul data
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jml_pengumpulan_data');
    }
};
