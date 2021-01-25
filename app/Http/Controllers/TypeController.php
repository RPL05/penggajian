<?php

namespace App\Http\Controllers;

use App\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index()
    {
        $types = Type::all();
        return view('data.type.index', compact('types'));
    }
    public function create()
    {
        return view('data.type.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'gaji'      => 'required',
            'lembur'    => 'required',
            'bonus'     => 'required',
        ]);

        $types = Type::create([
            'gaji'      => $request->gaji,
            'lembur'    => $request->lembur,
            'bonus'     => $request->bonus,
       ]);

       $types->save();

       return redirect()->back();
    }
}
