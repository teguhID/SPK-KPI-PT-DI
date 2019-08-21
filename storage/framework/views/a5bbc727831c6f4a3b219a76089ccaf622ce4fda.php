<?php $__env->startSection('content'); ?>

<!-- Sidebar -->
<ul class="sidebar navbar-nav">
        <li class="nav-item" id="dashboard">
            <a class="nav-link" href="<?php echo e(url('/home')); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item active">
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
    <div class="container-fluid">
            <form style="padding: 70px" action="<?php echo e(url('dataKaryawan')); ?>" method="post">
                <?php echo e(csrf_field()); ?>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama">
                        <p style="color:red"><?php echo $errors->first('nama') ?></p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="nik" name="nik">
                        <p style="color:red"><?php echo $errors->first('nik') ?></p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" id="" name="alamat"></textarea>
                        <p style="color:red"><?php echo $errors->first('alamat') ?></p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="jenisKelamin" name="jenisKelamin">
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                        
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="tempatLahir" name="tempatLahir">
                        <p style="color:red"><?php echo $errors->first('tempatLahir') ?></p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="tanggalLahir" name="tanggalLahir">
                        <p style="color:red"><?php echo $errors->first('tanggalLahir') ?></p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Divisi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="divisi" name="divisi">
                        <p style="color:red"><?php echo $errors->first('divisi') ?></p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Jabatan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="jabatan" name="jabatan" readonly
                            <?php if( Auth::user()->jabatan == 'HRD' ): ?>
                                value="Manager"
                            <?php endif; ?>
                            <?php if( Auth::user()->jabatan == 'Manager' ): ?>
                                value="SPV"
                            <?php endif; ?>
                            <?php if( Auth::user()->jabatan == 'SPV' ): ?>
                                value="Staff"
                            <?php endif; ?>
                        >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email">
                        <p style="color:red"><?php echo $errors->first('email') ?></p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="phone" name="phone">
                        <p style="color:red"><?php echo $errors->first('phone') ?></p>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layoutApp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Laravel\SPK-KPI-PT-DI\resources\views/dataKaryawan/buatData.blade.php ENDPATH**/ ?>