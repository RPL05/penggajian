@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex">
      <div class="col-md-12">
        <div class="">
            <h5 class="text-strong py-2">From Edit Employees</h5>
        </div>
        <div class="card border-0 shadow">
          <div class="card-body">
            <form action="{{ route('data.employees.update', $employeess->id) }}" enctype="multipart/form-data" method="post">
                @csrf
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success')}}
                    </div>
                @endif
                @method('PUT')
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="nip">Nip</label>
                            <input type="text" name="nip" id="nip" value="{{ $employeess->nip }}" class="form-control" required>
                            <span class="text-danger" id="nip"></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" id="nama" value="{{ $employeess->nama }}" class="form-control" required>
                            <span class="text-danger" id="nama"></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <input type="text" name="jabatan" id="jabatan" value="{{ $employeess->jabatan }}" class="form-control" required>
                            <span class="text-danger" id="jabatan"></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="gaji_pokok">Gaji Pokok</label>
                            <input type="text" name="gaji_pokok" id="gaji_pokok" value="{{ $employeess->gaji_pokok }}" class="form-control" required>
                            <span class="text-danger" id="gaji_pokok"></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" value="{{ $employeess->email }}" class="form-control" required>
                            <span class="text-danger" id="email"></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" id="tempat_lahir" value="{{ $employeess->tempat_lahir }}" class="form-control" required>
                            <span class="text-danger" id="tempat_lahir"></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="{{ $employeess->tanggal_lahir }}" class="form-control" required>
                            <span class="text-danger" id="tanggal_lahir"></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="tanggal_masuk">Tanggal Masuk</label>
                            <input type="date" name="tanggal_masuk" id="tanggal_masuk" value="{{ $employeess->tanggal_masuk }}" class="form-control" required>
                            <span class="text-danger" id="tanggal_masuk"></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Agama</label>
                            <select name="agama" id="" value="{{ $employeess->agama }}" class="form-control">
                                <option value="">Pilih Agama</option>
                                <option value="ISLAM">ISLAM</option>
                                <option value="HINDU">HINDU</option>
                                <option value="BUDHA">BUDHA</option>
                                <option value="KRISTEN">KRISTEN</option>
                            </select>
                        </div>
                    </div><div class="col-md-4">
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select name="jenis_kelamin" value="{{ $employeess->jenis_kelamin }}" id="" class="form-control">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="Laki-Laki">Laki - Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="nomor_telepon">Nomor Telepon</label>
                            <input type="text" name="nomor_telepon" id="nomor_telepon" value="{{ $employeess->nomor_telepon }}" class="form-control" required>
                            <span class="text-danger" id="nomor_telepon"></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" id="alamat" value="{{ $employeess->alamat }}" class="form-control" required>
                            <span class="text-danger" id="alamat"></span>
                        </div>
                    </div>
                </div>
                <div class="pt-2 mb-2">
                    <button type="submit" class="btn btn-outline-info">
                        Save
                    </button>
                    <a href="{{route('data.employees.index')}}" class="btn btn-outline-secondary">Kembali</a>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
