<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('ds_nonprobabilitas', function (Blueprint $table) {
            $table->id('id_ds_nonprobabilitas');
            $table->string('unit_sampel');
            $table->string('unit_observasi');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ds_nonprobabilitas');
    }
};
