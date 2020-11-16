<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatagajiController extends Controller
{
    Public function index()
    {
        return view('data.gaji.index');
    }
}
