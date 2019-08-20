<?php $__env->startSection('content'); ?>
<?php $no = 1;?>
<div id="content-wrapper">
    <div class="container-fluid">
        <h3>Nilai Normalisasi</h3><br>
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
                    </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo e($datas->nik); ?></td>
                        <td><?php echo e($datas->nama); ?></td>
                        <td><?php echo e($datas->jabatan); ?></td>
                        <td><?php echo e($datas->generalKnowledge); ?></td>
                        <td><?php echo e($datas->basic); ?></td>
                        <td><?php echo e($datas->intermediate); ?></td>
                        <td><?php echo e($datas->advance); ?></td>
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
<?php echo $__env->make('layouts.layoutApp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Laravel\SpkPenilaianKaryawan\resources\views/nav/nilaiNormalisasi.blade.php ENDPATH**/ ?>