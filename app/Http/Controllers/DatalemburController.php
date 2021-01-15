<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatalemburController extends Controller
{
    public function index()
    {
        return view('data.lembur.index');
    }
    public function create()
    {
        return view('data.lembur.create');
    }
}
