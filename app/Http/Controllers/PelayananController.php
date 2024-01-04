<?php

namespace App\Http\Controllers;

use App\Models\Pelayanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PelayananController extends Controller
{
    function index()
    {
        return view('pelayanan.index');
    }

    function form2()
    {
        return view('pelayanan.form2');
    }
    function form3()
    {
        return view('pelayanan.form3');
    }

    public function storeForm1(Request $request)
    {
        $request->validate([
            'nip' => 'required',
            'nama_lengkap' => 'required',
            'nama_kegiatan' => 'required',
            'lokasi' => 'required',
            'masa_kegiatan' => 'required',
            'tingkat_kegiatan' => 'required',
        ]);

        $pelayanan = new Pelayanan();

        $pelayanan->nip = $request['nip'];
        $pelayanan->nama_lengkap = $request['nama_lengkap'];
        $pelayanan->nama_kegiatan = $request['nama_kegiatan'];
        $pelayanan->lokasi = $request['lokasi'];
        $pelayanan->masa_kegiatan = $request['masa_kegiatan'];
        $pelayanan->tingkat_kegiatan = $request['tingkat_kegiatan'];
        $pelayanan->user_id = Auth::user()->id;
        $pelayanan->save();

        return redirect()->route('pelayanan.form2')->with('success', 'Data saved successfully');

    }
    public function storeForm2(Request $request)
    {
        $request->validate([
            'no_sk' => 'required',
            'satuan_kegiatan' => 'required',
            'angka_kredit' => 'required',
            'volume_kegiatan' => 'required',
            'jumlah_kredit' => 'required',
            'jumlah_volume' => 'required',
        ]);

        // Get the latest record for the authenticated user
        $pelayanan = Pelayanan::where('user_id', Auth::user()->id)->latest()->first();

        // If there is no existing record, redirect back or handle accordingly
        if (!$pelayanan) {
            return redirect()->route('pelayanan.form1')->with('error', 'Please complete Form 1 first.');
        }

        // Update the fields
        $pelayanan->no_sk = $request['no_sk'];
        $pelayanan->satuan_kegiatan = $request['satuan_kegiatan'];
        $pelayanan->angka_kredit = $request['angka_kredit'];
        $pelayanan->volume_kegiatan = $request['volume_kegiatan'];
        $pelayanan->jumlah_kredit = $request['jumlah_kredit'];
        $pelayanan->jumlah_volume = $request['jumlah_volume'];

        // Save the record
        $pelayanan->save();

        return redirect()->route('pelayanan.form3')->with('success', 'Data updated successfully');
    }
    public function storeForm3(Request $request)
    {
        $request->validate([
            'sk_penugasan' => 'required|file|mimes:pdf,doc,docx',
            'bukti_kinerja' => 'required|file|mimes:pdf,doc,docx',
        ]);

        // Get the latest record for the authenticated user
        $pelayanan = Pelayanan::where('user_id', Auth::user()->id)->latest()->first();

        // If there is no existing record, redirect back or handle accordingly
        if (!$pelayanan) {
            return redirect()->route('pelayanan.form1')->with('error', 'Please complete Form 1 first.');
        }

        // File Uploads
        $skPenugasanPath = $request->file('sk_penugasan')->store('sk_penugasan');
        $buktiKinerjaPath = $request->file('bukti_kinerja')->store('bukti_kinerja');

        // Update the fields
        $pelayanan->sk_penugasan = $skPenugasanPath;
        $pelayanan->bukti_kinerja = $buktiKinerjaPath;

        // Save the record
        $pelayanan->save();

        return redirect()->route('home')->with('success', 'Data updated successfully');
    }
}
