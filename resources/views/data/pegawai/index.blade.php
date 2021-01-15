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
        <div class="">
            <h5 class="text-strong py-2">Data Pegawai</h5>
        </div>
        <div class="mb-3">
            <a href="{{ route('data.pegawai.tampil-create') }}" class="btn btn-warning py-2" style="background-color: #F0E68C;">
              tambah pegawai
          </a>
          </div>
        <table class="table table-striped">
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
                @forelse ($datapegawais as $datapegawai)
                <tr>
                    <td>{{ $datapegawai->nip }}</td>
                    <td>{{ $datapegawai->nama }}</td>
                    <td>{{ $datapegawai->gaji_pokok }}</td>
                    <td>{{ $datapegawai->tanggal_masuk }}</td>
                    <td>
                        <button class="btn btn-outline btn-sm" style="background-color: #B0E0E6;">Detail</button>
                        <button class="btn btn-outline btn-sm" style="background-color: 	#ff9b9b;">Hapus</button>
                        <button class="btn btn-outline btn-sm" style="background-color: #86c1c9;">Transfer Gaji</button>
                    </td>
                </tr>
                @empty
                    <tr>
                        <td colspan="5">
                            Data Pegawai Belum Tersedia
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
      </div>
    </div>
</div>
@endsection
