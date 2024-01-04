<?php

namespace App\Http\Controllers;

use App\Models\Pengabdian;
use App\Models\Pengembangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengabdianController extends Controller
{
    function index()
    {
        return view('pengabdian.index');
    }

    function form2()
    {
        return view('pengabdian.form2');
    }
    function form3()
    {
        return view('pengabdian.form3');
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

        $pengabdian = new Pengabdian();

        $pengabdian->nip = $request['nip'];
        $pengabdian->nama_lengkap = $request['nama_lengkap'];
        $pengabdian->nama_kegiatan = $request['nama_kegiatan'];
        $pengabdian->lokasi = $request['lokasi'];
        $pengabdian->masa_kegiatan = $request['masa_kegiatan'];
        $pengabdian->tingkat_kegiatan = $request['tingkat_kegiatan'];
        $pengabdian->user_id = Auth::user()->id;
        $pengabdian->save();

        return redirect()->route('pengabdian.form2')->with('success', 'Data saved successfully');

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
        $pengabdian = Pengabdian::where('user_id', Auth::user()->id)->latest()->first();

        // If there is no existing record, redirect back or handle accordingly
        if (!$pengabdian) {
            return redirect()->route('pengabdian.form1')->with('error', 'Please complete Form 1 first.');
        }

        // Update the fields
        $pengabdian->no_sk = $request['no_sk'];
        $pengabdian->satuan_kegiatan = $request['satuan_kegiatan'];
        $pengabdian->angka_kredit = $request['angka_kredit'];
        $pengabdian->volume_kegiatan = $request['volume_kegiatan'];
        $pengabdian->jumlah_kredit = $request['jumlah_kredit'];
        $pengabdian->jumlah_volume = $request['jumlah_volume'];

        // Save the record
        $pengabdian->save();

        return redirect()->route('pengabdian.form3')->with('success', 'Data updated successfully');
    }

    public function storeForm3(Request $request)
    {
        $request->validate([
            'sk_penugasan' => 'required|file|mimes:pdf,doc,docx',
            'bukti_kinerja' => 'required|file|mimes:pdf,doc,docx',
        ]);

        // Get the latest record for the authenticated user
        $pengabdian = Pengabdian::where('user_id', Auth::user()->id)->latest()->first();

        // If there is no existing record, redirect back or handle accordingly
        if (!$pengabdian) {
            return redirect()->route('pengabdian.form1')->with('error', 'Please complete Form 1 first.');
        }

        // File Uploads
        $skPenugasanPath = $request->file('sk_penugasan')->store('sk_penugasan');
        $buktiKinerjaPath = $request->file('bukti_kinerja')->store('bukti_kinerja');

        // Update the fields
        $pengabdian->sk_penugasan = $skPenugasanPath;
        $pengabdian->bukti_kinerja = $buktiKinerjaPath;

        // Save the record
        $pengabdian->save();

        return redirect()->route('home')->with('success', 'Data updated successfully');
    }
}
