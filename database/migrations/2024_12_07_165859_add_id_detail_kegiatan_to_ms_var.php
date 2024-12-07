<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('ms_var', function (Blueprint $table) {
            $table->unsignedBigInteger('id_detail_kegiatan')->nullable();
            $table->foreign('id_detail_kegiatan')->references('id_detail_kegiatan')->on('detail_kegiatans')->onDelete('cascade');
        });
    }
    
    public function down()
    {
        Schema::table('ms_var', function (Blueprint $table) {
            $table->dropForeign(['id_detail_kegiatan']);
            $table->dropColumn('id_detail_kegiatan');
        });
    }
    
};
