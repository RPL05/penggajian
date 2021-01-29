@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex">
      <div class="col-md-12">
        <div class="">
            <h5 class="text-strong py-2">Employee Data Is Listed Below</h5>
        </div>
        <div class="card border-0 shadow">
          <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="nip">Nip</label>
                            <input type="text" name="nip" id="nip" value="" placeholder="{{ $employeess->nip }}" class="form-control" disabled>
                            <span class="text-danger" id="nip"></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" id="nama" value="" placeholder="{{ $employeess->nama }}" class="form-control" disabled>
                            <span class="text-danger" id="nama"></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <input type="text" name="jabatan" id="jabatan" value="" placeholder="{{ $employeess->jabatan }}" class="form-control" disabled>
                            <span class="text-danger" id="jabatan"></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="gaji_pokok">Gaji Pokok</label>
                            <input type="text" name="gaji_pokok" id="gaji_pokok" value="" placeholder="{{ $employeess->gaji_pokok }}" class="form-control" disabled>
                            <span class="text-danger" id="gaji_pokok"></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" value="" placeholder="{{ $employeess->email }}" class="form-control" disabled>
                            <span class="text-danger" id="email"></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" id="tempat_lahir" value="" placeholder="{{ $employeess->tempat_lahir }}" class="form-control" disabled>
                            <span class="text-danger" id="tempat_lahir"></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="" placeholder="{{ $employeess->tanggal_lahir }}" class="form-control" disabled>
                            <span class="text-danger" id="tanggal_lahir"></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="tanggal_masuk">Tanggal Masuk</label>
                            <input type="date" name="tanggal_masuk" id="tanggal_masuk" value="" placeholder="{{ $employeess->tanggal_masuk }}" class="form-control" disabled>
                            <span class="text-danger" id="tanggal_masuk"></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="agama">Agama</label>
                            <input type="text" name="agama" id="" value="" placeholder="{{ $employeess->agama }}" class="form-control" disabled>
                        </div>
                    </div><div class="col-md-4">
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <input type="text" name="jenis_kelamin" id="" value="" placeholder="{{ $employeess->jenis_kelamin }}" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="nomor_telepon">Nomor Telepon</label>
                            <input type="text" name="nomor_telepon" id="nomor_telepon" value="" placeholder="{{ $employeess->nomor_telepon }}" class="form-control" disabled>
                            <span class="text-danger" id="nomor_telepon"></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" id="alamat" value="" placeholder="{{ $employeess->alamat }}" class="form-control" disabled>
                            <span class="text-danger" id="alamat"></span>
                        </div>
                    </div>
                </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
