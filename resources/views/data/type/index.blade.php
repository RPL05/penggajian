@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="">
            <h5 class="text-strong py-2">Data Type</h5>
        </div>
        <div class="mb-3">
            <a href="{{ route('data.type.create') }}" class="btn btn-warning py-2" style="background-color: #F0E68C;">
              tambah type
          </a>
          </div>
          @if(session('success'))
                <div class="alert alert-success">
                    {{--  {{ session('success')}}  --}}
                    Terimakasih telah melakukan permintaan pada kami.
                    <p>Silahkan cek sms dan email kamu untuk melihat status permintaan barang kamu, terimakasih.</p>
                </div>
            @endif
        <table class="table table-striped">
            <thead>
              <tr>
                <th>Gaji</th>
                <th>Lembur</th>
                <th>Bonus</th>
                <th>Option</th>
              </tr>
            </thead>
            <tbody>
                @forelse($types as $type)
                <tr>
                    <td>{{ $type->gaji }}</td>
                    <td>{{ $type->lembur }}</td>
                    <td>{{ $type->bonus }}</td>
                    <td>
                        <form action="{{ route('data.type.delete', $type->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('data.type.edit', $type->id) }}" class="btn btn-outline btn-sm" style="background-color:#86c1c9;">Edit</a>
                            <button class="btn btn-outline btn-sm" style="background-color: #ff9b9b;">Delete</button>
                            <a href="{{ route('data.type.show', $type->id) }}" class="btn btn-outline btn-sm" style="background-color: #B0E0E6;">Detail</a>
                        </form>
                    </td>
                </tr>
                @empty
                    <tr>
                        <td colspan="5">
                            Data Type Belum Tersedia
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
      </div>
    </div>
</div>
@endsection
