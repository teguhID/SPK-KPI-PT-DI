<?php $__env->startSection('content'); ?>
<div id="content-wrapper">
    <div class="container-fluid">
            <form action="<?php echo e(url('nilaiBobot/' . $data->id)); ?>" method="post" style="padding: 70px">
                <?php echo e(method_field('PUT')); ?> 
                <?php echo e(csrf_field()); ?>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">General Knowledge</label>
                    <div class="col-sm-10">
                        <input type="number" step="0.01" class="form-control" id="generalKnowledge" name="generalKnowledge" value="<?php echo e($data->generalKnowledge); ?>">
                        <p style="color:red"><?php echo $errors->first('generalKnowledge') ?></p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Basic</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="basic" name="basic" value="<?php echo e($data->basic); ?>">
                        <p style="color:red"><?php echo $errors->first('basic') ?></p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Intermediate</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="intermediate" name="intermediate" value="<?php echo e($data->intermediate); ?>">
                        <p style="color:red"><?php echo $errors->first('intermediate') ?></p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Advance</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="advance" name="advance" value="<?php echo e($data->advance); ?>">
                        <p style="color:red"><?php echo $errors->first('advance') ?></p>
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
<?php echo $__env->make('layouts.layoutApp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Laravel\SPK-KPI-PT-DI\resources\views/nilaiBobot/editData.blade.php ENDPATH**/ ?>