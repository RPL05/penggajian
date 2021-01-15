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
                    {{--  <div class="d-flex" style="margin-left: auto;">
                        <img src="{{ asset('image/images.jpg') }}" alt="" class="rounded-circle" width="27px" height="27px">
                        <div class="dropdown show px-2 mt-1">
                            <a class="dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                              <a class="dropdown-item" href="#">Login</a>
                              <a class="dropdown-item" href="#">Logout</a>
                            </div>
                        </div>
                    </div>  --}}
                </ol>
            </nav>
        </div>
      <div class="col-md-12">
        <div class="py-4">
            <h5 class="text-strong">Data Gaji Karyawan</h5>
        </div>
        <table class="table table-striped">
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
                        <a href="{{ route('data.gaji.creategaji') }}" class="btn btn-outline btn-sm" style="background-color:#B0E0E6;">Transfer Gaji</a>
                    </td>
                </tr>
            </tbody>
        </table>
      </div>
    </div>
</div>
@endsection
