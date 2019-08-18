@extends('layouts.layoutApp')
@section('content')
<div id="content-wrapper">
  
    <div class="container-fluid" style="padding: 3vw">

        <div class="alert alert-success" role="alert">
          <h4 class="alert-heading">Hellooww !!!</h4>
          <p>Selamat datang di sistem penilaian karyawan.</p>
          <hr>
          <p class="mb-0"><i><b>”Tidak beriman seseorang di antara kalian hingga ia mencintai Saudaranya sebagaimana mencintai dirinya sendiri.” (H.R. Bukhari dan Muslim).</b></i></p>
        </div>
        <br>

      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-user-friends"></i>
              </div>
              <div class="mr-5"><strong style="font-size: 30px">{{ $jumlahKaryawan }}</strong> Data Karyawan</div>
            </div>
              <a class="card-footer text-white clearfix small z-1" href="{{ url('/home/dataKaryawan') }}">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fas fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-5 col-sm-6 mb-3">
          <div class="card text-white o-hidden h-100" style="background-color: darkorange">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-crown"></i>
              </div>
              <div class="mr-5" style="font-size: 15px"><strong>Karyawan Terbaik</strong></div>
              <div class="mr-5">{{ $terbaik->nama }} ({{ $terbaik->hasil }})</div>
            </div>
              <a class="card-footer text-white clearfix small z-1" href="{{ url('/home/nilaiHasil') }}">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fas fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-4 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-balance-scale"></i>
              </div>
              <div class="mr-7">Nilai Rata-Rata karyawan</div>
              <div class="mr-5"><strong style="font-size: 20px">{{ number_format((float)$rata2Nilai, 2, '.', '') }}</strong></div>
            </div>
              <a class="card-footer text-white clearfix small z-1" href="{{ url('/home/nilaiHasil') }}">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fas fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
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