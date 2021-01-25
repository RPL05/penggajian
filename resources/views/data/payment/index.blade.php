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
            <h5 class="text-strong py-2">Data Payment</h5>
        </div>
        <div class="mb-3">
            <a href="{{ route('data.payment.create') }}" class="btn btn-warning py-2" style="background-color: #F0E68C;">
              tambah payment
          </a>
          </div>
        <table class="table table-striped">
            <thead>
              <tr>
                <th>Nip</th>
                <th>Nomor Rekening</th>
                <th>Total Gaji</th>
                <th>Tanggal Transfer</th>
                <th>Option</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <form action="" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="" class="btn btn-outline btn-sm" style="background-color:#86c1c9;">Edit</a>
                            <button class="btn btn-outline btn-sm" style="background-color: #ff9b9b;">Delete</button>
                            <a href="http://" class="btn btn-outline btn-sm" style="background-color: #B0E0E6;">Detail</a>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
      </div>
    </div>
</div>
@endsection