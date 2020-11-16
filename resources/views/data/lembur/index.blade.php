@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb" style="margin-top: -16px">
                <ol class="breadcrumb bg-white">
                    <li class="breadcrumb-item active" aria-current="page">
                        <h6 style="margin-left: -18px;">Aplikasi Penggajian Karyawan</h6>
                    </li>
                </ol>
            </nav>
        </div>
      <div class="col-md-12">
        <div class="py-3">
            <h5 class="text-strong">Data Lembur Pegawai</h5>
        </div>
        <table class="table">
            <thead>
              <tr>
                <th>Nip</th>
                <th>Nama</th>
                <th>No. Rek</th>
                <th>Jabatan</th>
                <th>Gaji Pokok</th>
                <th>Tgl. Masuk</th>
                <th>Option</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1234567</td>
                    <td>Rachmat Ababil</td>
                    <td>2312321</td>
                    <td>Montir</td>
                    <td>Rp. 2.500.000</td>
                    <td>01 Januari 2020</td>
                    <td>
                        <button class="btn btn-outline btn-sm" style="background-color:#B0E0E6;">Lembur Pegawai</button>
                    </td>
                </tr>
            </tbody>
        </table>
      </div>
    </div>
</div>
@endsection
