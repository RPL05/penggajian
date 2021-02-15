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
                            <label for="">Type</label>
                            @foreach ($types as $type)
                            <input type="number" name="type_id" id="type_id" value="" placeholder="{{ $type->gaji }}" class="form-control" disabled>
                            <span class="text-danger" id="type_id"></span>
                            @endforeach
                        </div>
                        <div class="form-group">
                            <label for="gaji_pokok">Gaji Pokok</label>
                            <input type="number" name="gaji_pokok" id="gaji_pokok" value="" placeholder="{{ $prices->gaji_pokok }}" class="form-control" disabled>
                            <span class="text-danger" id="gaji_pokok"></span>
                        </div>
                        <div class="form-group">
                            <label for="uang_lembur">Uang Lembur</label>
                            <input type="number" name="uang_lembur" id="uang_lembur" value="" placeholder="{{ $prices->uang_lembur }}" class="form-control" disabled>
                            <span class="text-danger" id="uang_lembur"></span>
                        </div>
                        <div class="form-group">
                            <label for="jam_lembur">Jam Lembur</label>
                            <input type="text" name="jam_lembur" id="jam_lembur" value="" placeholder="{{ $prices->jam_lembur }}" class="form-control" disabled>
                            <span class="text-danger" id="jam_lembur"></span>
                        </div>
                        <div class="form-group">
                            <label for="total_gaji">Total Gaji</label>
                            <input type="number" name="total_gaji" id="total_gaji" value="" placeholder="{{ $prices->total_gaji }}" class="form-control" disabled>
                            <span class="text-danger" id="total_gaji"></span>
                        </div>
                    </div>
                </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
