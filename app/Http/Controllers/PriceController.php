<?php

namespace App\Http\Controllers;

use App\Price;
use App\Type;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function index()
    {
        $prices = Price::all();

        $types = Type::all();

        return view('data.price.index', compact('prices','types'));
    }
    public function create()
    {
        $prices = Price::all();

        $types = Type::all();

        return view('data.price.create', compact('prices','types'));
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'type_id'      => 'required',
            'gaji_pokok'   => 'required',
            'uang_lembur'  => 'required',
            'jam_lembur'   => 'required',
            'total_gaji'   => 'required',
        ]);
        $prices = Price::create([
            'type_id'       => $request->type_id,
            'gaji_pokok'    => $request->gaji_pokok,
            'uang_lembur'   => $request->uang_lembur,
            'jam_lembur'    => $request->jam_lembur,
            'total_gaji'    => $request->total_gaji,
        ]);
        $prices->save();

        return redirect()->back();
    }
}
