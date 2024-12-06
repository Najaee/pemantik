<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('ms_var', function (Blueprint $table) {
            $table->unsignedBigInteger('id_detail_kegiatan')->nullable()->after('id_ms_var'); // Tambahkan kolom baru
            $table->foreign('id_detail_kegiatan') // Tambahkan foreign key
                  ->references('id_detail_kegiatan')->on('detail_kegiatan') // Referensi tabel lain
                  ->onDelete('cascade'); // Hapus data terkait jika parent dihapus
        });
    }

    public function down(): void
    {
        Schema::table('ms_var', function (Blueprint $table) {
            $table->dropForeign(['id_detail_kegiatan']); // Hapus foreign key
            $table->dropColumn('id_detail_kegiatan'); // Hapus kolom
        });
    }
};
