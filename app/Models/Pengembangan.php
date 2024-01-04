<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengembangan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nip',
        'nama_lengkap',
        'kegiatan',
        'judul',
        'lokasi',
        'bidang',
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
