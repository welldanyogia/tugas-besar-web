<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\Pengembangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengembanganController extends Controller
{
    function index()
    {
        return view('pengembangan.index');
    }
    function form2()
    {
        return view('pengembangan.form2');
    }
    function form3()
    {
        return view('pengembangan.form3');
    }

    public function storeForm1(Request $request)
    {
        $request->validate([
            'nip' => 'required',
            'nama_lengkap' => 'required',
            'kegiatan' => 'required',
//            'jabatan' => 'required',
            'judul' => 'required',
            'bidang' => 'required',
        ]);

        $pengmbangan = new Pengembangan();

        $pengmbangan->nip = $request['nip'];
        $pengmbangan->nama_lengkap = $request['nama_lengkap'];
        $pengmbangan->kegiatan = $request['kegiatan'];
        $pengmbangan->judul = $request['judul'];
        $pengmbangan->bidang = $request['bidang'];
        $pengmbangan->user_id = Auth::user()->id;
        $pengmbangan->save();

        return redirect()->route('pengembangan.form2')->with('success', 'Data saved successfully');

    }
    public function storeForm2(Request $request)
    {
        $request->validate([
            'no_sk' => 'required',
            'satuan' => 'required',
            'kredit' => 'required',
            'Volume' => 'required',
            'jumlah_volume' => 'required',
            'jumlah_kredit' => 'required',
        ]);

        // Get the latest record for the authenticated user
        $pengembangan = Pengembangan::where('user_id', Auth::user()->id)->latest()->first();

        // If there is no existing record, redirect back or handle accordingly
        if (!$pengembangan) {
            return redirect()->route('pengembangan.form1')->with('error', 'Please complete Form 1 first.');
        }

        // Update the fields
        $pengembangan->no_sk = $request['no_sk'];
        $pengembangan->satuan_kegiatan = $request['satuan'];
        $pengembangan->volume_kegiatan = $request['Volume'];
        $pengembangan->jumlah_volume = $request['jumlah_volume'];
        $pengembangan->jumlah_kredit = $request['jumlah_kredit'];

        // Save the record
        $pengembangan->save();

        return redirect()->route('pengembangan.form3')->with('success', 'Data updated successfully');
    }

    public function storeForm3(Request $request)
    {
        $request->validate([
            'sk_penugasan' => 'required|file|mimes:pdf,doc,docx',
            'bukti_kinerja' => 'required|file|mimes:pdf,doc,docx',
        ]);

        // Get the latest record for the authenticated user
        $pengembangan = Pengembangan::where('user_id', Auth::user()->id)->latest()->first();

        // If there is no existing record, redirect back or handle accordingly
        if (!$pengembangan) {
            return redirect()->route('pengembangan.form1')->with('error', 'Please complete Form 1 first.');
        }

        // File Uploads
        $skPenugasanPath = $request->file('sk_penugasan')->store('sk_penugasan');
        $buktiKinerjaPath = $request->file('bukti_kinerja')->store('bukti_kinerja');

        // Update the fields
        $pengembangan->sk_penugasan = $skPenugasanPath;
        $pengembangan->bukti_kinerja = $buktiKinerjaPath;

        // Save the record
        $pengembangan->save();

        return redirect()->route('home')->with('success', 'Data updated successfully');
    }
}
