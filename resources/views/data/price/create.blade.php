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
            <form action="{{ route('data.price.store') }}" method="post">
                @csrf
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success')}}
                    </div>
                @endif
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Type</label>
                            <select name="type_id" id="" class="form-control">
                                <option value="">Pilih Type</option>
                                @foreach($types as $type)
                                    <option value="{{$type->id}}">Gaji = {{$type->gaji}}</option>
                                    <option value="{{$type->id}}">Lembur = {{$type->lembur}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="gaji_pokok">Gaji Pokok</label>
                            <input type="number" name="gaji_pokok" id="gaji_pokok" value="" class="form-control" required>
                            <span class="text-danger" id="gaji_pokok"></span>
                        </div>
                        <div class="form-group">
                            <label for="uang_lembur">Uang Lembur</label>
                            <input type="number" name="uang_lembur" id="uang_lembur" value="" class="form-control" required>
                            <span class="text-danger" id="uang_lembur"></span>
                        </div>
                        <div class="form-group">
                            <label for="jam_lembur">Jam Lembur</label>
                            <input type="text" name="jam_lembur" id="jam_lembur" value="" class="form-control" required>
                            <span class="text-danger" id="jam_lembur"></span>
                        </div>
                        <div class="form-group">
                            <label for="total_gaji">Total Gaji</label>
                            <input type="number" name="total_gaji" id="total_gaji" value="" class="form-control" required>
                            <span class="text-danger" id="total_gaji"></span>
                        </div>
                    </div>
                </div>
                <div class="pt-2 mb-2">
                    <button type="submit" class="btn btn-outline-info">
                        Save
                    </button>
                    <a href="{{route('data.price.index')}}" class="btn btn-outline-secondary">Kembali</a>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
