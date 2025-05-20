<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id(); // <--- PRIMARY KEY OTOMATIS
            $table->string('Nama_Pasien');
            $table->string('NIK')->unique();
            $table->string('Tanggal_Lahir');
            $table->string('Alamat');
            $table->string('Jenis_Kelamin');
            $table->string('Golongan_Darah');
            $table->string('Gejala_Penyakit');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};
