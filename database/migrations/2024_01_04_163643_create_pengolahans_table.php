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
        Schema::create('pengolahans', function (Blueprint $table) {
            $table->id();
            $table->string('nip')->nullable();
            $table->string('nama_lengkap')->nullable();
            $table->string('nama_kegiatan')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('masa_kegiatan')->nullable();
            $table->string('tingkat_kegiatan')->nullable();
            $table->string('no_sk')->nullable();
            $table->string('satuan_kegiatan')->nullable();
            $table->string('angka_kredit')->nullable();
            $table->string('volume_kegiatan')->nullable();
            $table->string('jumlah_kredit')->nullable();
            $table->string('jumlah_volume')->nullable();
            $table->string('sk_penugasan')->nullable();
            $table->string('bukti_kinerja')->nullable();
            $table->foreignId('user_id')->constrained()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengolahans');
    }
};
