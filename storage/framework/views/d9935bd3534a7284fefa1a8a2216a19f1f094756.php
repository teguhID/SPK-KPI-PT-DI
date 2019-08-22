<?php $__env->startSection('content'); ?>


<!-- Sidebar -->
<ul class="sidebar navbar-nav">
        <li class="nav-item" id="dashboard">
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
        <li class="nav-item active">
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
    <div class="container-fluid">
            <form action="<?php echo e(url('dataNilaiKaryawan/' . $data->id)); ?>" method="post" style="padding: 70px">
                <?php echo e(method_field('PUT')); ?> 
                <?php echo e(csrf_field()); ?>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="nik" readonly value="<?php echo e($data->nik); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" readonly value="<?php echo e($data->nama); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Jabatan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="jabatan" name="jabatan" readonly value="<?php echo e($data->jabatan); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">General Knowledge</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="generalKnowledge" name="generalKnowledge" value="<?php echo e($data->generalKnowledge); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Basic</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="basic" name="basic" value="<?php echo e($data->basic); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Intermediate</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="intermediate" name="intermediate" value="<?php echo e($data->intermediate); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Advance</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="advance" name="advance" value="<?php echo e($data->advance); ?>">
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layoutApp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Laravel\SPK-KPI-PT-DI\resources\views/dataNilaiKaryawan/editData.blade.php ENDPATH**/ ?>