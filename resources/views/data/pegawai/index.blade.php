@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb" style="margin-top: -16px">
                <ol class="breadcrumb bg-white">
                    <li class="breadcrumb-item active" aria-current="page">
                        <h6 style="margin-left: -18px;">Aplikasi Penggajian Karyawan</h6>
                        {{--  <img src="{{ asset('image/download (1).jpg') }}" class="rounded-circle" width="30" height="30" alt="">  --}}
                    </li>
                </ol>
            </nav>
        </div>
      <div class="col-md-12">
        <div class="">
            <h5 class="text-strong py-2">Data Pegawai</h5>
        </div>
        <div class="mb-3">
            <a href="" class="btn btn-warning py-2" style="background-color: #F0E68C;">
              tambah pegawai
          </a>
          </div>
        <table class="table">
            <thead>
              <tr>
                <th>Nip</th>
                <th>Nama</th>
                <th>Gaji Pokok</th>
                <th>Tanggal Masuk</th>
                <th>Option</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1234567</td>
                    <td>Rachmat Ababil</td>
                    <td>Rp. 2.500.000</td>
                    <td>01 Januari 2020</td>
                    <td>
                        <button class="btn btn-outline btn-sm" style="background-color: #B0E0E6;">Detail</button>
                        <button class="btn btn-outline btn-sm" style="background-color: 	#ff9b9b;">Hapus</button>
                        <button class="btn btn-outline btn-sm" style="background-color: #86c1c9;">Transfer Gaji</button>
                    </td>
                </tr>
            </tbody>
        </table>
      </div>
    </div>
</div>
@endsection
