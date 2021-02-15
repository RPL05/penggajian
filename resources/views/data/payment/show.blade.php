@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-md-6">
        <div class="">
            <h5 class="text-strong py-2"></h5>
        </div>
        <div class="card border-0 shadow">
          <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Nip</label>
                                @foreach($employeess as $employees)
                                <input type="number" name="employes_id" id="employes_id" value="" placeholder="{{ $employees->nip }}" class="form-control" disabled>
                                <span class="text-danger" id="employes_id"></span>
                                @endforeach
                        </div>
                        <div class="form-group">
                            <label for="">Total Gaji</label>
                            @foreach($prices as $price)
                            <input type="number" name="price_id" id="price_id" value="" placeholder="{{ $price->total_gaji }}" class="form-control" disabled>
                            <span class="text-danger" id="price_id"></span>
                            @endforeach
                        </div>
                        <div class="form-group">
                            <label for="no_rek">Nomor Rekening</label>
                            <input type="number" name="no_rek" id="no_rek" value="" placeholder="{{ $payments->no_rek }}" class="form-control" disabled>
                            <span class="text-danger" id="no_rek"></span>
                        </div>
                        <div class="form-group">
                            <label for="tgl_transfer">Tanggal Transfer</label>
                            <input type="date" name="tgl_transfer" id="tgl_transfer" value="" placeholder="{{ $payments->tgl_transfer }}" class="form-control" disabled>
                            <span class="text-danger" id="tgl_transfer"></span>
                        </div>
                    </div>
                </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
