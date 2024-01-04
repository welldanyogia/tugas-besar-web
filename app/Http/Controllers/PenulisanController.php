<?php

namespace App\Http\Controllers;

use App\Models\Penulisan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenulisanController extends Controller
{
    function index()
    {
        return view('penulisan.index');
    }
    function form2()
    {
        return view('penulisan.form2');
    }
    function form3()
    {
        return view('penulisan.form3');
    }

    public function storeForm1(Request $request)
    {
        $request->validate([
            'nip' => 'required',
            'nama_lengkap' => 'required',
            'jenis_karya' => 'required',
            'judul_karya' => 'required',
            'masa' => 'required',
            'tingkat' => 'required',
        ]);

        $penulisan = new Penulisan();

        $penulisan->nip = $request['nip'];
        $penulisan->nama_lengkap = $request['nama_lengkap'];
        $penulisan->jenis_karya = $request['jenis_karya'];
        $penulisan->judul_karya = $request['judul_karya'];
        $penulisan->masa = $request['masa'];
        $penulisan->tingkat = $request['tingkat'];
        $penulisan->user_id = Auth::user()->id;
        $penulisan->save();

        return redirect()->route('penulisan.form2')->with('success', 'Data saved successfully');

    }
    public function storeForm2(Request $request)
    {
        $request->validate([
            'no_sk' => 'required',
            'satuan_karya' => 'required',
            'angka_kredit' => 'required',
            'lingkup_karya' => 'required',
            'jumlah_karya' => 'required',
            'jumlah_volume' => 'required',
        ]);

        // Get the latest record for the authenticated user
        $penulisan = Penulisan::where('user_id', Auth::user()->id)->latest()->first();

        // If there is no existing record, redirect back or handle accordingly
        if (!$penulisan) {
            return redirect()->route('penulisan.form1')->with('error', 'Please complete Form 1 first.');
        }

        // Update the fields
        $penulisan->no_sk = $request['no_sk'];
        $penulisan->satuan_karya = $request['satuan_karya'];
        $penulisan->angka_kredit = $request['angka_kredit'];
        $penulisan->lingkup_karya = $request['lingkup_karya'];
        $penulisan->jumlah_karya = $request['jumlah_karya'];
        $penulisan->jumlah_volume = $request['jumlah_volume'];

        // Save the record
        $penulisan->save();

        return redirect()->route('penulisan.form3')->with('success', 'Data updated successfully');
    }
    public function storeForm3(Request $request)
    {
        $request->validate([
            'sk_penugasan' => 'required|file|mimes:pdf,doc,docx',
            'bukti_kinerja' => 'required|file|mimes:pdf,doc,docx',
        ]);

        // Get the latest record for the authenticated user
        $penulisan = Penulisan::where('user_id', Auth::user()->id)->latest()->first();

        // If there is no existing record, redirect back or handle accordingly
        if (!$penulisan) {
            return redirect()->route('penulisan.form1')->with('error', 'Please complete Form 1 first.');
        }

        // File Uploads
        $skPenugasanPath = $request->file('sk_penugasan')->store('sk_penugasan');
        $buktiKinerjaPath = $request->file('bukti_kinerja')->store('bukti_kinerja');

        // Update the fields
        $penulisan->sk_penugasan = $skPenugasanPath;
        $penulisan->bukti_kinerja = $buktiKinerjaPath;

        // Save the record
        $penulisan->save();

        return redirect()->route('home')->with('success', 'Data updated successfully');
    }
}
