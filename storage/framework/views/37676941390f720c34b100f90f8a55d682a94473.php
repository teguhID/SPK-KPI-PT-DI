<?php $__env->startSection('content'); ?>
<?php $no = 1;?>
<div id="content-wrapper">
    <div class="container-fluid">
        <h3>Data Karyawan</h3><br>
        <a href="<?php echo e(url('/dataKaryawan/create')); ?>" class="btn btn-info float-right" style="margin-top: -50px; margin-right: 20px"><i class="fas fa-plus" style="margin-right: 10px;"></i>Tambah Karyawan</div></a>      
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
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo e($datas->nik); ?></td>
                        <td><?php echo e($datas->nama); ?></td>
                        <td><?php echo e($datas->email); ?></td>
                        <td><?php echo e($datas->alamat); ?></td>
                        <td><?php echo e($datas->jenisKelamin); ?></td>
                        <td><?php echo e($datas->tempatLahir); ?></td>
                        <td><?php echo e($datas->tanggalLahir); ?></td>
                        <td><?php echo e($datas->divisi); ?></td>
                        <td><?php echo e($datas->jabatan); ?></td>
                        <td><?php echo e($datas->phone); ?></td>
                        <td>
                            <a href="<?php echo e(url('dataKaryawan/' . $datas->id . '/edit' )); ?>" class="btn btn-success btn-sm" style="text-decoration: none"><i class="fas fa-edit"></i></a>
                            <form action="<?php echo e(url('dataKaryawan/' . $datas->id)); ?>" method="POST">
                              <?php echo e(csrf_field()); ?>

                              <?php echo e(method_field('DELETE')); ?>

                              <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Ingin Hapus Data <?php echo e($datas->nama); ?> ?')"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layoutApp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TeguhID\Desktop\SpkPenilaianKaryawan\resources\views/nav/dataKaryawan.blade.php ENDPATH**/ ?>