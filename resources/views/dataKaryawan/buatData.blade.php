@extends('layouts.layoutApp')
@section('content')
<div id="content-wrapper">
    <div class="container-fluid">
            <form style="padding: 70px" action="{{ url('dataKaryawan') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="nik">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="alamat">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="jenisKelamin" name="jenisKelamin">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="tempatLahir" name="tempatLahir">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="tanggalLahir" name="tanggalLahir">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Divisi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="divisi" name="divisi">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Jabatan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="jabatan" name="jabatan" readonly
                            @if ( Auth::user()->jabatan == 'HRD' )
                                value="Manager"
                            @endif
                            @if ( Auth::user()->jabatan == 'Manager' )
                                value="SPV"
                            @endif
                            @if ( Auth::user()->jabatan == 'SPV' )
                                value="Staff"
                            @endif
                        >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="phone" name="phone">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Input Data</button>
            </form>    
    </div>
</div>
    <!-- /.container-fluid -->

    <!-- Sticky Footer -->
    <footer class="sticky-footer">
      <div class="container my-auto">
        <div class="copyright text-center my-auto">
          <span>Copyright © Your Website 2019</span>
        </div>
      </div>
    </footer>

  </div>
@endsection