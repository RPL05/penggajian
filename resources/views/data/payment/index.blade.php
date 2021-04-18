@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
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
                @foreach ($payments as $payment)
                <tr>
                    <td>{{ $payment->employees->nip }}</td>
                    <td>{{ $payment->no_rek }}</td>
                    <td>{{ $payment->price->total_gaji }}</td>
                    <td>{{ $payment->tgl_transfer }}</td>
                    <td>
                        <form action="{{ route('data.payment.delete', $payment->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('data.payment.edit', $payment->id) }}" class="btn btn-outline btn-sm" style="background-color:#86c1c9;">Edit</a>
                            <button class="btn btn-outline btn-sm" style="background-color: #ff9b9b;">Delete</button>
                            <a href="{{ route('data.payment.show', $payment->id) }}" class="btn btn-outline btn-sm" style="background-color: #B0E0E6;">Detail</a>
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
