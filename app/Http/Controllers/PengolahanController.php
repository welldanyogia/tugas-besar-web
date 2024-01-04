<?php

namespace App\Http\Controllers;

use App\Models\Pengolahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengolahanController extends Controller
{
    function index()
    {
        return view('pengolahan.index');
    }
    function form2()
    {
        return view('pengolahan.form2');
    }
    function form3()
    {
        return view('pengolahan.form3');
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

        $pengolahan = new Pengolahan();

        $pengolahan->nip = $request['nip'];
        $pengolahan->nama_lengkap = $request['nama_lengkap'];
        $pengolahan->nama_kegiatan = $request['nama_kegiatan'];
        $pengolahan->lokasi = $request['lokasi'];
        $pengolahan->masa_kegiatan = $request['masa_kegiatan'];
        $pengolahan->tingkat_kegiatan = $request['tingkat_kegiatan'];
        $pengolahan->user_id = Auth::user()->id;
        $pengolahan->save();

        return redirect()->route('pengolahan.form2')->with('success', 'Data saved successfully');

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
        $pengolahan = Pengolahan::where('user_id', Auth::user()->id)->latest()->first();

        // If there is no existing record, redirect back or handle accordingly
        if (!$pengolahan) {
            return redirect()->route('pengolahan.form1')->with('error', 'Please complete Form 1 first.');
        }

        // Update the fields
        $pengolahan->no_sk = $request['no_sk'];
        $pengolahan->satuan_kegiatan = $request['satuan_kegiatan'];
        $pengolahan->angka_kredit = $request['angka_kredit'];
        $pengolahan->volume_kegiatan = $request['volume_kegiatan'];
        $pengolahan->jumlah_kredit = $request['jumlah_kredit'];
        $pengolahan->jumlah_volume = $request['jumlah_volume'];

        // Save the record
        $pengolahan->save();

        return redirect()->route('pengolahan.form3')->with('success', 'Data updated successfully');
    }
    public function storeForm3(Request $request)
    {
        $request->validate([
            'sk_penugasan' => 'required|file|mimes:pdf,doc,docx',
            'bukti_kinerja' => 'required|file|mimes:pdf,doc,docx',
        ]);

        // Get the latest record for the authenticated user
        $pengolahan = Pengolahan::where('user_id', Auth::user()->id)->latest()->first();

        // If there is no existing record, redirect back or handle accordingly
        if (!$pengolahan) {
            return redirect()->route('pengolahan.form1')->with('error', 'Please complete Form 1 first.');
        }

        // File Uploads
        $skPenugasanPath = $request->file('sk_penugasan')->store('sk_penugasan');
        $buktiKinerjaPath = $request->file('bukti_kinerja')->store('bukti_kinerja');

        // Update the fields
        $pengolahan->sk_penugasan = $skPenugasanPath;
        $pengolahan->bukti_kinerja = $buktiKinerjaPath;

        // Save the record
        $pengolahan->save();

        return redirect()->route('home')->with('success', 'Data updated successfully');
    }
}
