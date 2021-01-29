<?php

namespace App\Http\Controllers;

use App\Employees;
use Illuminate\Http\Request;

class EmployeessController extends Controller
{
    public function index()
    {
        $employeess = Employees::all();
        return view('data.employees.index', compact('employeess'));
    }
    public function create()
    {
        return view('data.employees.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'nip'             => 'required',
            'nama'            => 'required',
            'jabatan'         => 'required',
            'gaji_pokok'      => 'required',
            'email'           => 'required',
            'tempat_lahir'    => 'required',
            'tanggal_lahir'   => 'required',
            'tanggal_masuk'   => 'required',
            'agama'           => 'required',
            'jenis_kelamin'   => 'required',
            'nomor_telepon'   => 'required',
            'alamat'          => 'required',
        ]);

        $employeess = Employees::create([
            'nip'             => $request->nip,
            'nama'            => $request->nama,
            'jabatan'         => $request->jabatan,
            'gaji_pokok'      => $request->gaji_pokok,
            'email'           => $request->email,
            'tempat_lahir'    => $request->tempat_lahir,
            'tanggal_lahir'   => $request->tanggal_lahir,
            'tanggal_masuk'   => $request->tanggal_masuk,
            'agama'           => $request->agama,
            'jenis_kelamin'   => $request->jenis_kelamin,
            'nomor_telepon'   => $request->nomor_telepon,
            'alamat'          => $request->alamat,
        ]);

        $employeess->save();

        return redirect()->back()->with(['success' => 'data karyawan berhasil dibuat' ]);
    }
    public function edit($id)
    {
        $employeess = Employees::findOrFail($id);

        return view("data.employees.edit", compact('employeess'));
    }
    public function update(Request $request, $id)
    {
        $employeess = Employees::find($id);

        $employeess->update($request-> all());

        return redirect()->back()->with(['success' => 'data karyawan berhasil diedit' ]);
    }
    public function destroy($id)
    {
        $employeess = Employees::find($id);

        $employeess -> delete($employeess->all());

        return redirect()->back();
    }
    public function show($id)
    {
        $employeess = Employees::find($id);
        return view('data.employees.show', compact('employeess'));
    }
}
