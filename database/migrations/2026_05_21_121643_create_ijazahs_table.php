<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ijazahs', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_seri');
            $table->string('nama_mahasiswa');
            $table->string('npm');
            $table->string('program_studi');
            $table->string('fakultas');
            $table->string('gelar');
            $table->date('tanggal_lulus');
            $table->string('nama_universitas');
            $table->string('tempat_terbit');
            $table->date('tanggal_terbit');
            $table->string('nama_dekan');
            $table->string('nip_dekan');
            $table->string('nama_rektor');
            $table->string('nip_rektor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ijazahs');
    }
};
