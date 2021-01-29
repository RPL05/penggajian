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
                            <label for="gaji">Gaji</label>
                            <input type="number" name="gaji" id="gaji" value="" placeholder="{{ $types->gaji }}" class="form-control" disabled>
                            <span class="text-danger" id="gaji"></span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="lembur">Lembur</label>
                            <input type="number" name="lembur" id="lembur" value="" placeholder="{{ $types->lembur }}" class="form-control" disabled>
                            <span class="text-danger" id="lembur"></span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="bonus">Bonus</label>
                            <input type="number" name="bonus" id="bonus" value="" placeholder="{{ $types->bonus }}" class="form-control" disabled>
                            <span class="text-danger" id="bonus"></span>
                        </div>
                    </div>
                </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
