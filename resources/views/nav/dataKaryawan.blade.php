@extends('layouts.layoutApp')
@section('content')
<?php $no = 1;?>
<div id="content-wrapper">
    <div class="container-fluid">
        <h3>Data Karyawan</h3><br>
        <a href="{{ url('/dataKaryawan/create') }}" class="btn btn-info float-right" style="margin-top: -50px; margin-right: 20px"><i class="fas fa-plus" style="margin-right: 10px;"></i>Tambah Karyawan</div></a>      
              <div class="table-responsive" style="padding: 30px">
                <table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>No</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th width="1000px">Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat Lahir</th>
                        <th>Tangga Lahir</th>
                        <th>Divisi</th>
                        <th>Jabatan</th>
                        <th>Contact Person</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $datas)
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td>{{ $datas->nik }}</td>
                        <td>{{ $datas->nama }}</td>
                        <td>{{ $datas->email }}</td>
                        <td>{{ $datas->alamat }}</td>
                        <td>{{ $datas->jenisKelamin }}</td>
                        <td>{{ $datas->tempatLahir }}</td>
                        <td>{{ $datas->tanggalLahir }}</td>
                        <td>{{ $datas->divisi }}</td>
                        <td>{{ $datas->jabatan }}</td>
                        <td>{{ $datas->phone }}</td>
                        <td>
                            <a href="{{ url('dataKaryawan/' . $datas->id . '/edit' ) }}" class="btn btn-success btn-sm" style="text-decoration: none"><i class="fas fa-edit"></i></a>
                            <form action="{{ url('dataKaryawan/' . $datas->id) }}" method="POST">
                              {{ csrf_field() }}
                              {{ method_field('DELETE') }}
                              <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Ingin Hapus Data {{ $datas->nama }} ?')"><i class="fas fa-trash"></i></button>
                            </form>
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