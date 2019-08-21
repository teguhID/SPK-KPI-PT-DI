@extends('layouts.layoutApp')
@section('content')

<!-- Sidebar -->
<ul class="sidebar navbar-nav">
        <li class="nav-item" id="dashboard">
            <a class="nav-link" href="{{ url('/home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{url('/home/dataKaryawan')}}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Data Karyawan</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/home/dataNilaiKaryawan')}}">
            <i class="fas fa-fw fa-table"></i>
            <span>Data Nilai karyawan</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/home/nilaiBobot')}}">
            <i class="fas fa-fw fa-table"></i>
            <span>Nilai Bobot</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/home/nilaiNormalisasi')}}">
            <i class="fas fa-fw fa-table"></i>
            <span>Nilai Normalisasi</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/home/nilaiHasil')}}">
            <i class="fas fa-fw fa-table"></i>
            <span>Nilai Hasil</span></a>
        </li>
      </ul>
      

<div id="content-wrapper">
    <div class="container-fluid">
            <form action="{{ url('dataKaryawan/' . $data->id) }}" method="post" style="padding: 70px">
                {{ method_field('PUT') }} 
                {{ csrf_field() }}
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $data->nama }}">
                        <p style="color:red"><?php echo $errors->first('nama') ?></p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="" name="nik" value="{{ $data->nik }}">
                        <p style="color:red"><?php echo $errors->first('nik') ?></p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea type="tes" class="form-control" id="" name="alamat" >{{ $data->alamat }}</textarea>
                        <p style="color:red"><?php echo $errors->first('alamat') ?></p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="jenisKelamin" name="jenisKelamin">
                            <option @if ($data->jenisKelamin == 'Pria')
                                {{ 'selected' }}
                            @else
                                {{ '' }}
                            @endif
                            value="Pria">Pria</option>
                            <option @if ($data->jenisKelamin == 'Wanita')
                                {{ 'selected' }}
                            @else
                                {{ '' }}
                            @endif
                            value="Wanita">Wanita</option>
                        </select>
                        {{-- <input type="text" class="form-control" id="jenisKelamin" name="jenisKelamin" value="{{ $data->jenisKelamin }}"> --}}
                        <p style="color:red"><?php echo $errors->first('jenisKelamin') ?></p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="tempatLahir" name="tempatLahir" value="{{ $data->tempatLahir }}">
                        <p style="color:red"><?php echo $errors->first('tempatlahir') ?></p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="tanggalLahir" name="tanggalLahir" value="{{ $data->tanggalLahir }}">
                        <p style="color:red"><?php echo $errors->first('tanggalLahir') ?></p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Divisi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="divisi" name="divisi" value="{{ $data->divisi }}">
                        <p style="color:red"><?php echo $errors->first('divisi') ?></p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Jabatan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="jabatan" name="jabatan" readonly value="{{ $data->jabatan }}">
                        <p style="color:red"><?php echo $errors->first('jabatan') ?></p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" value="{{ $data->email }}">
                        <p style="color:red"><?php echo $errors->first('email') ?></p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="phone" name="phone" value="{{ $data->phone }}">
                        <p style="color:red"><?php echo $errors->first('phone') ?></p>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Edit Data</button>
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