<?php $__env->startSection('content'); ?>
<div id="content-wrapper">
    <div class="container-fluid">
            <form action="<?php echo e(url('nilaiBobot/' . $data->id)); ?>" method="post" style="padding: 70px">
                <?php echo e(method_field('PUT')); ?> 
                <?php echo e(csrf_field()); ?>

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
<?php echo $__env->make('layouts.layoutApp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Skripsi Abang Gilang\SKRIPSI\SpkPenilaianKaryawan\resources\views/nilaiBobot/editData.blade.php ENDPATH**/ ?>