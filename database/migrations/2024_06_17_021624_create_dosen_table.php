<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dosen', function (Blueprint $table) {
            $table->string('nidn')->primary();
            $table->string('nama');
            $table->integer('umur');
            $table->string('alamat');
            $table->string('kota');
            $table->string('fakultas');
            $table->string('matakuliah');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dosen');
    }
};
