<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\Pelayanan;
use App\Models\Pengabdian;
use App\Models\Pengembangan;
use App\Models\Penulisan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TranskripController extends Controller
{
    public function index()
    {
        // Fetch data from each controller
        $jabatanData = Jabatan::where('user_id', Auth::user()->id)->get();
        $pelayananData = Pelayanan::where('user_id', Auth::user()->id)->get();
        $pengabdianData = Pengabdian::where('user_id', Auth::user()->id)->get();
        $pengembanganData = Pengembangan::where('user_id', Auth::user()->id)->get();
        $penulisanData = Penulisan::where('user_id', Auth::user()->id)->get();

        return view('transkrip.index', [
            'jabatanData' => $jabatanData,
            'pelayananData' => $pelayananData,
            'pengabdianData' => $pengabdianData,
            'pengembanganData' => $pengembanganData,
            'penulisanData' => $penulisanData,
        ]);
    }
}
