<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class JabatanController extends Controller
{
    function index()
    {
        return view('jabatan.index');
    }
    function form2()
    {
        return view('jabatan.form2');
    }
    function form3()
    {
        return view('jabatan.form3');
    }

    public function storeForm1(Request $request)
    {
        $request->validate([
            'nip' => 'required',
            'nama_lengkap' => 'required',
            'kegiatan' => 'required',
            'jabatan' => 'required',
            'instansi' => 'required',
            'masa_jabatan' => 'required|date',
            'akhir_jabatan' => 'required|date',
        ]);

        $jabatan = new Jabatan();

        $jabatan->nip = $request['nip'];
        $jabatan->nama_lengkap = $request['nama_lengkap'];
        $jabatan->kegiatan = $request['kegiatan'];
        $jabatan->instansi = $request['instansi'];
        $jabatan->masa_jabatan = $request['masa_jabatan'];
        $jabatan->akhir_jabatan = $request['akhir_jabatan'];
        $jabatan->user_id = Auth::user()->id;
        $jabatan->save();

        return redirect()->route('jabatan.form2')->with('success', 'Data saved successfully');

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
        $jabatan = Jabatan::where('user_id', Auth::user()->id)->latest()->first();

        // If there is no existing record, redirect back or handle accordingly
        if (!$jabatan) {
            return redirect()->route('jabatan.form1')->with('error', 'Please complete Form 1 first.');
        }

        // Update the fields
        $jabatan->no_sk = $request['no_sk'];
        $jabatan->satuan_kegiatan = $request['satuan'];
        $jabatan->volume_kegiatan = $request['Volume'];
        $jabatan->jumlah_volume = $request['jumlah_volume'];
        $jabatan->jumlah_kredit = $request['jumlah_kredit'];

        // Save the record
        $jabatan->save();

        return redirect()->route('jabatan.form3')->with('success', 'Data updated successfully');
    }

    public function storeForm3(Request $request)
    {
        $request->validate([
            'sk_penugasan' => 'required|file|mimes:pdf,doc,docx',
            'bukti_kinerja' => 'required|file|mimes:pdf,doc,docx',
        ]);

        // Get the latest record for the authenticated user
        $jabatan = Jabatan::where('user_id', Auth::user()->id)->latest()->first();

        // If there is no existing record, redirect back or handle accordingly
        if (!$jabatan) {
            return redirect()->route('jabatan.form1')->with('error', 'Please complete Form 1 first.');
        }

        $skPenugasan = $request->file('sk_penugasan');
        $buktiKinerja = $request->file('bukti_kinerja');
        // File Uploads
        $skPenugasanPath = time() . '_' . $skPenugasan->getClientOriginalName();
        $buktiKinerjaPath = time() . '_' . $buktiKinerja->getClientOriginalName();

        $skPenugasan->storeAs('public/sk_penugasan',$skPenugasanPath);
        $buktiKinerja->storeAs('public/bukti_kinerja',$buktiKinerjaPath);

        // Update the fields
        $jabatan->sk_penugasan = $skPenugasanPath;
        $jabatan->bukti_kinerja = $buktiKinerjaPath;

        // Save the record
        $jabatan->save();

        return redirect()->route('home')->with('success', 'Data updated successfully');
    }



    public function downloadFile($fileType, $fileName)
    {
        $filePath = storage_path("app/public/{$fileType}/{$fileName}");

        if (!Storage::exists("public/{$fileType}/{$fileName}")) {
            return redirect()->back()->with('error', 'File not found.');
        }

        return response()->download($filePath, $fileName);
    }

}
