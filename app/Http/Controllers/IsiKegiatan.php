<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IsiKegiatan extends Controller
{
    function index()
    {
        return view('isikegiatan.index');
    }
}
