@extends('layouts.layoutApp')
@section('content')
<?php $no = 1;?>
<div id="content-wrapper">
    <div class="container-fluid">
        <h3>Nilai Hasil</h3><br>
              <div class="table-responsive" style="padding: 30px">
                <table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>No</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Divisi</th>
                        <th>Nilai</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $datas)
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td>{{ $datas->nik }}</td>
                        <td>{{ $datas->nama }}</td>
                        <td>{{ $datas->jabatan }}</td>
                        <td>{{ $datas->divisi }}</td>
                        <td>{{ $datas->hasil }}</td>
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