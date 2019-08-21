<?php $__env->startSection('content'); ?>

<!-- Sidebar -->
<ul class="sidebar navbar-nav">
  <li class="nav-item active" id="dashboard">
      <a class="nav-link" href="<?php echo e(url('/home')); ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo e(url('/home/dataKaryawan')); ?>">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Data Karyawan</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo e(url('/home/dataNilaiKaryawan')); ?>">
      <i class="fas fa-fw fa-table"></i>
      <span>Data Nilai karyawan</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo e(url('/home/nilaiBobot')); ?>">
      <i class="fas fa-fw fa-table"></i>
      <span>Nilai Bobot</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo e(url('/home/nilaiNormalisasi')); ?>">
      <i class="fas fa-fw fa-table"></i>
      <span>Nilai Normalisasi</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo e(url('/home/nilaiHasil')); ?>">
      <i class="fas fa-fw fa-table"></i>
      <span>Nilai Hasil</span></a>
  </li>
</ul>


<div id="content-wrapper">
  
    <div class="container-fluid" style="padding: 3vw">

        <div class="alert alert-success" role="alert">
          <h4 class="alert-heading">Indonesian Aerospace (IAe).</h4>
          <p>Support Decision System.</p>
          <hr>
          <p class="mb-0"><i><b>”SISTEM PENILAIAN KARYAWAN"</b></i></p>
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
              <div class="mr-5"><strong style="font-size: 30px"><?php echo e($jumlahKaryawan); ?></strong> Data Karyawan</div>
            </div>
              <a class="card-footer text-white clearfix small z-1" href="<?php echo e(url('/home/dataKaryawan')); ?>">
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
              <div class="mr-5"><?php echo e($terbaik->nama); ?> (<?php echo e($terbaik->hasil); ?>)</div>
            </div>
              <a class="card-footer text-white clearfix small z-1" href="<?php echo e(url('/home/nilaiHasil')); ?>">
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
              <div class="mr-5"><strong style="font-size: 20px"><?php echo e(number_format((float)$rata2Nilai, 2, '.', '')); ?></strong></div>
            </div>
              <a class="card-footer text-white clearfix small z-1" href="<?php echo e(url('/home/nilaiHasil')); ?>">
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
          <span>Copyright © Gilang Herfi Ramadhan, 2019</span>
        </div>
      </div>
    </footer>

  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layoutApp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Laravel\SPK-KPI-PT-DI\resources\views/nav/dashboard.blade.php ENDPATH**/ ?>