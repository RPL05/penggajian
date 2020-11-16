<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymenthomeCOntroller extends Controller
{
    public function index()
    {
        return view('penggajian.home.index');
    }
}
