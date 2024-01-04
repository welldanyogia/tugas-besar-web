<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nip',
        'nama_lengkap',
        'kegiatan',
        'jabatan',
        'instansi',
        'masa_jabatan',
        'akhir_jabatan',
        'no_sk',
        'satuan_kegiatan',
        'volume_kegiatan',
        'jumlah_kredit',
        'jumlah_volume',
        'sk_penugasan',
        'bukti_kinerja',
        'user_id',
    ];
}
