@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="">
            <h5 class="text-strong py-2">Data Price</h5>
        </div>
        <div class="mb-3">
            <a href="{{ route('data.price.create') }}" class="btn btn-warning py-2" style="background-color: #F0E68C;">
              tambah price
          </a>
          </div>
        <table class="table table-striped">
            <thead>
              <tr>
                <th>Gaji Pokok</th>
                <th>Uang Lembur</th>
                <th>Jam Lembur</th>
                <th>Total Gaji</th>
                <th>Option</th>
              </tr>
            </thead>
            <tbody>
                @foreach($prices as $price)
                <tr>
                    <td>{{ $price->gaji_pokok }}</td>
                    <td>{{ $price->uang_lembur }}</td>
                    <td>{{ $price->jam_lembur }}</td>
                    <td>{{ $price->total_gaji }}</td>
                    <td>
                        <form action="{{ route('data.price.delete', $price->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('data.price.edit', $price->id) }}" class="btn btn-outline btn-sm" style="background-color:#86c1c9;">Edit</a>
                            <button class="btn btn-outline btn-sm" style="background-color: #ff9b9b;">Delete</button>
                            <a href="{{ route('data.price.show', $price->id) }}" class="btn btn-outline btn-sm" style="background-color: #B0E0E6;">Detail</a>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
      </div>
    </div>
</div>
@endsection
