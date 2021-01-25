@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-md-6">
        <div class="">
            <h5 class="text-strong py-2">From Create Type</h5>
        </div>
        <div class="card border-0 shadow">
          <div class="card-body">
            <form action="{{ route('data.payment.store') }}" enctype="multipart/form-data" method="post">
                @csrf
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success')}}
                    </div>
                @endif
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Nip</label>
                            <select name="employees_id" id="" class="form-control">
                                <option value="">Pilih Employees</option>
                                @foreach($employeess as $employees)
                                    <option value="{{$employees->id}}">{{$employees->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Total Gaji</label>
                            <select name="price_id" id="" class="form-control">
                                <option value="">Pilih Price</option>
                                @foreach($prices as $price)
                                    <option value="{{$price->id}}">{{$price->total_gaji}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="no_rek">Nomor Rekening</label>
                            <input type="number" name="no_rek" id="no_rek" value="" class="form-control" required>
                            <span class="text-danger" id="no_rek"></span>
                        </div>
                        <div class="form-group">
                            <label for="tgl_transfer">Tanggal Transfer</label>
                            <input type="date" name="tgl_transfer" id="tgl_transfer" value="" class="form-control" required>
                            <span class="text-danger" id="tgl_transfer"></span>
                        </div>
                    </div>
                </div>
                <div class="pt-2 mb-2">
                    <button type="submit" class="btn btn-outline-info">
                        Save
                    </button>
                    <a href="{{route('data.payment.index')}}" class="btn btn-outline-secondary">Kembali</a>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
