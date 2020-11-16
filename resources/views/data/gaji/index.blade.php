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
        <div class="py-4">
            <h5 class="text-strong">Data Gaji Karyawan</h5>
        </div>
        <table class="table">
            <thead>
              <tr>
                <th>Nama</th>
                <th>Gaji Pokok</th>
                <th>Jam Lembur</th>
                <th>Uang Lembur</th>
                <th>Tgl. Transfer</th>
                <th>Option</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Rachmat Ababil</td>
                    <td>Rp. 2.500.000</td>
                    <td>3 jam</td>
                    <td>Rp. 500.000</td>
                    <td>01 Januari</td>
                    <td>
                        <button class="btn btn-outline btn-sm" style="background-color:#B0E0E6;">Transfer Gaji</button>
                    </td>
                </tr>
            </tbody>
        </table>
      </div>
    </div>
</div>
@endsection
