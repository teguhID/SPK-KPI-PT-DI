<?php $__env->startSection('content'); ?>
<div id="content-wrapper">
    <div class="container-fluid">
            <form action="<?php echo e(url('dataKaryawan/' . $data->id)); ?>" method="post" style="padding: 70px">
                <?php echo e(method_field('PUT')); ?> 
                <?php echo e(csrf_field()); ?>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo e($data->nama); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="nik" value="<?php echo e($data->nik); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" name="alamat" value="<?php echo e($data->alamat); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="jenisKelamin" name="jenisKelamin" value="<?php echo e($data->jenisKelamin); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="tempatLahir" name="tempatLahir" value="<?php echo e($data->tempatLahir); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="tanggalLahir" name="tanggalLahir" value="<?php echo e($data->tanggalLahir); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Divisi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="divisi" name="divisi" value="<?php echo e($data->divisi); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Jabatan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="jabatan" name="jabatan" readonly value="<?php echo e($data->jabatan); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email" value="<?php echo e($data->email); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="phone" name="phone" value="<?php echo e($data->phone); ?>">
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
<?php echo $__env->make('layouts.layoutApp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Laravel\SpkPenilaianKaryawan\resources\views/dataKaryawan/editData.blade.php ENDPATH**/ ?>