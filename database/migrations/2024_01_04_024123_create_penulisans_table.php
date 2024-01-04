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
        Schema::create('penulisans', function (Blueprint $table) {
            $table->id();
            $table->string('nip')->nullable();
            $table->string('nama_lengkap')->nullable();
            $table->string('jenis_karya')->nullable();
            $table->string('judul_karya')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('masa')->nullable();
            $table->string('tingkat')->nullable();
            $table->string('no_sk')->nullable();
            $table->string('satuan_karya')->nullable();
            $table->string('angka_kredit')->nullable();
            $table->string('lingkup_karya')->nullable();
            $table->string('jumlah_karya')->nullable();
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
        Schema::dropIfExists('penulisans');
    }
};
