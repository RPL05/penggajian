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

       return redirect()->route('data.type.index')->with(['success' => "Terimakasih telah melakukan permintaan pada kami.            
       Silahkan cek sms dan email kamu untuk melihat status permintaan barang kamu, terimakasih."
        ]);
    }
    public function edit($id)
    {
        $types = Type::findOrFail($id);

        return view("data.type.edit", compact('types'));
    }
    public function update(Request $request, $id)
    {
        $types = Type::find($id);

        $types->update($request-> all());

        return redirect()->back()->with(['success' => 'data type berhasil diedit' ]);
    }
    public function destroy($id)
    {
        $types = Type::find($id);

        $types -> delete($types->all());

        return redirect()->back();
    }
    public function show($id)
    {
        $types = Type::find($id);

        return view('data.type.show', compact('types'));
    }
}
