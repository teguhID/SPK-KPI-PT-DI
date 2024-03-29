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
    <li class="nav-item">
      <a class="nav-link active" href="{{url('/home/dataKaryawan')}}">
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
    <li class="nav-item active">
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
  

<?php $no = 1;?>
<div id="content-wrapper">
    <div class="container-fluid">
        <h3>Nilai Normalisasi</h3><br>
              <div class="table-responsive" style="padding: 30px">
                <table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>No</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>General Knowledge</th>
                        <th>Basic</th>
                        <th>Intermediate</th>
                        <th>Advance</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $datas)
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td>{{ $datas->nik }}</td>
                        <td>{{ $datas->nama }}</td>
                        <td>{{ $datas->jabatan }}</td>
                        <td>{{ $datas->generalKnowledge }}</td>
                        <td>{{ $datas->basic }}</td>
                        <td>{{ $datas->intermediate }}</td>
                        <td>{{ $datas->advance }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
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
@endsection