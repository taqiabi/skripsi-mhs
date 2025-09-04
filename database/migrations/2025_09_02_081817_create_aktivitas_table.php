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
        Schema::create('aktivitas', function (Blueprint $table) {
            $table->id();
            $table->string('judul')->unique();
            $table->string('no_sk', 20);
            $table->date('tanggal_sk');
            $table->string('jenis_aktivitas')->default('Skripsi');
            $table->string('jenis_anggota')->default('Personal');
            $table->date('tanggal_mulai');
            $table->date('tanggal_akhir');
            $table->string('semester');
            $table->string('lokasi')->default('Universitas Samudra');
            $table->text('keterangan')->nullable();
            $table->unsignedBigInteger('mahasiswa');
            $table->unsignedBigInteger('pembimbing1');
            $table->unsignedBigInteger('pembimbing2');
            $table->unsignedBigInteger('penguji1');
            $table->unsignedBigInteger('penguji2');
            $table->unsignedBigInteger('penguji3');
            $table->timestamps();
            
            $table->foreign('mahasiswa')->on('mahasiswas')->references('id');
            $table->foreign('pembimbing1')->on('dosens')->references('id');
            $table->foreign('pembimbing2')->on('dosens')->references('id');
            $table->foreign('penguji1')->on('dosens')->references('id');
            $table->foreign('penguji2')->on('dosens')->references('id');
            $table->foreign('penguji3')->on('dosens')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aktivitas');
    }
};
