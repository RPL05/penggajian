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
            <form action="{{ route('data.type.store') }}" method="post">
                @csrf
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success')}}
                    </div>
                @endif
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="gaji">Gaji</label>
                            <input type="number" name="gaji" id="gaji" value="" class="form-control" required>
                            <span class="text-danger" id="gaji"></span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="lembur">Lembur</label>
                            <input type="number" name="lembur" id="lembur" value="" class="form-control" required>
                            <span class="text-danger" id="lembur"></span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="bonus">Bonus</label>
                            <input type="number" name="bonus" id="bonus" value="" class="form-control" required>
                            <span class="text-danger" id="bonus"></span>
                        </div>
                    </div>
                </div>
                <div class="pt-2 mb-2">
                    <button type="submit" class="btn btn-outline-info">
                        Save
                    </button>
                    <a href="{{route('data.type.index')}}" class="btn btn-outline-secondary">Kembali</a>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
