@extends('layouts.layoutApp')
@section('content')
<?php $no = 1;?>
<div id="content-wrapper">
    <div class="container-fluid">
        <h3>Data Nilai Karyawan</h3><br>
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
                        <th>Action</th>
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
                        <td>
                            <a href="{{ url('dataNilaiKaryawan/' . $datas->id . '/edit' ) }}" class="btn btn-success btn-sm" style="text-decoration: none"><i class="fas fa-edit"></i></a>
                        </td>
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