<?php

namespace App\Http\Controllers;

use App\Datapegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function __construct()
    {
        $this->pegawai = new Datapegawai();
    }
    public function index()
    {
        $datapegawais = Datapegawai::all();
        return view('data.pegawai.index', compact('datapegawais'));
    }
    public function create()
    {
        return view('data.pegawai.create');
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
            'telepon'         => 'required',
            'alamat'          => 'required',
        ]);

        $datapegawais = Datapegawai::create([
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
            'telepon'         => $request->telepon,
            'alamat'          => $request->alamat,
        ]);

        $datapegawais->save();

        return redirect()->back()->with(['success' => 'data pegawai berhasil dibuat' ]);
    }
    public function destroy($id)
    {
        $datapegawais = Datapegawai::find($id);

        $datapegawais -> delete($datapegawais->all());

        return redirect()->back();
    }
}
