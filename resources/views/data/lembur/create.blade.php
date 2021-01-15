@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-md-12">
        <div class="">
            <h5 class="text-strong py-2">Lembur Pegawai</h5>
        </div>
        <div class="card border-0 shadow">
          <div class="card-body">
              <form action="" method="post">
                  <div class="row">
                      <div class="col-md-4">
                          <div class="form-group">
                              <label for="">Nip</label>
                              <input type="text" name="" id="" value="" class="form-control" required>
                              <span class="text-danger" id=""></span>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-group">
                              <label for="">Nama</label>
                              <input type="text" name="" id="" value="" class="form-control" required>
                              <span class="text-danger" id=""></span>
                            </div>
                        </div>
                      <div class="col-md-4">
                          <div class="form-group">
                              <label for="">No Rekening</label>
                              <input type="text" name="" id="" value="" class="form-control" required>
                              <span class="text-danger" id=""></span>
                            </div>
                        </div>
                      <div class="col-md-4">
                          <div class="form-group">
                              <label for="">Jabatan</label>
                              <input type="text" name="" id="" value="" class="form-control" required>
                              <span class="text-danger" id=""></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Gaji Pokok</label>
                                <input type="text" name="" id="" value="" class="form-control" required>
                                <span class="text-danger" id=""></span>
                            </div>
                        </div>
                      <div class="col-md-4">
                          <div class="form-group">
                              <label for="">Tanggal Masuk</label>
                              <input type="text" name="" id="" value="" class="form-control" required>
                              <span class="text-danger" id=""></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Jam Lembur</label>
                                <input type="text" name="" id="" value="" class="form-control" required>
                                <span class="text-danger" id=""></span>
                              </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Uang Lembur</label>
                                <input type="text" name="" id="" value="" class="form-control" required>
                                <span class="text-danger" id=""></span>
                              </div>
                          </div>
                    </div>
                <div class="pt-2 mb-2">
                    <button type="submit" class="btn btn-outline-info" >
                        Save
                    </button>
                    <a href="{{route('data.pegawai.tampil-index')}}" class="btn btn-outline-secondary">Kembali</a>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
