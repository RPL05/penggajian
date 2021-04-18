@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="">
            <h5 class="text-strong py-2">Data Karyawan</h5>
        </div>
        <div class="mb-3">
            <a href="{{ route('data.employees.create') }}" class="btn btn-warning py-2" style="background-color: #F0E68C;">
              tambah karyawan
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
                @forelse ($employeess as $employees)
                <tr>
                    <td>{{ $employees->nip }}</td>
                    <td>{{ $employees->nama }}</td>
                    <td>{{ $employees->gaji_pokok }}</td>
                    <td>{{ $employees->tanggal_masuk }}</td>
                    <td>
                        <form action="{{ route('data.employees.delete', $employees->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('data.employees.edit', $employees->id) }}" class="btn btn-outline btn-sm" style="background-color:#86c1c9;">Edit</a>
                            <button class="btn btn-outline btn-sm" style="background-color: #ff9b9b;">Delete</button>
                            <a href="{{ route('data.employees.show', $employees->id) }}" class="btn btn-outline btn-sm" style="background-color: #B0E0E6;">Detail</a>
                        </form>
                    </td>
                </tr>
                @empty
                    <tr>
                        <td colspan="5">
                            Data Karyawan Belum Tersedia
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
      </div>
    </div>
</div>
@endsection
