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
                        <p style="color:red"><?php echo $errors->first('nama') ?></p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="" name="nik" value="<?php echo e($data->nik); ?>">
                        <p style="color:red"><?php echo $errors->first('nik') ?></p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea type="tes" class="form-control" id="" name="alamat" ><?php echo e($data->alamat); ?></textarea>
                        <p style="color:red"><?php echo $errors->first('alamat') ?></p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="jenisKelamin" name="jenisKelamin">
                            <option <?php if($data->jenisKelamin == 'Pria'): ?>
                                <?php echo e('selected'); ?>

                            <?php else: ?>
                                <?php echo e(''); ?>

                            <?php endif; ?>
                            value="Pria">Pria</option>
                            <option <?php if($data->jenisKelamin == 'Wanita'): ?>
                                <?php echo e('selected'); ?>

                            <?php else: ?>
                                <?php echo e(''); ?>

                            <?php endif; ?>
                            value="Wanita">Wanita</option>
                        </select>
                        
                        <p style="color:red"><?php echo $errors->first('jenisKelamin') ?></p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="tempatLahir" name="tempatLahir" value="<?php echo e($data->tempatLahir); ?>">
                        <p style="color:red"><?php echo $errors->first('tempatlahir') ?></p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="tanggalLahir" name="tanggalLahir" value="<?php echo e($data->tanggalLahir); ?>">
                        <p style="color:red"><?php echo $errors->first('tanggalLahir') ?></p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Divisi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="divisi" name="divisi" value="<?php echo e($data->divisi); ?>">
                        <p style="color:red"><?php echo $errors->first('divisi') ?></p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Jabatan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="jabatan" name="jabatan" readonly value="<?php echo e($data->jabatan); ?>">
                        <p style="color:red"><?php echo $errors->first('jabatan') ?></p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo e($data->email); ?>">
                        <p style="color:red"><?php echo $errors->first('email') ?></p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="phone" name="phone" value="<?php echo e($data->phone); ?>">
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layoutApp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Laravel\SPK-KPI-PT-DI\resources\views/dataKaryawan/editData.blade.php ENDPATH**/ ?>