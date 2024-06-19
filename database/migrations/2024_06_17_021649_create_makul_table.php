<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('makul', function (Blueprint $table) {
            $table->string('kodematkul')->primary();
            $table->string('nama_matakuliah');
            $table->string('semester');
            $table->string('dosen_pengampu');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('makul');
    }
};
