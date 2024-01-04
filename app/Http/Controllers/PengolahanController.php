<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengolahanController extends Controller
{
    function index()
    {
        return view('pengolahan.index');
    }
}
