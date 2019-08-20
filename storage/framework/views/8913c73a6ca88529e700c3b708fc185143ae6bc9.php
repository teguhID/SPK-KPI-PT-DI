<?php $__env->startSection('content'); ?>
    
    <div id="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-8" style="margin-top: 5vw; margin-left: 2vw">
                    <label class="col-sm-4 col-form-label"><strong><h4>Bobot <?php echo e($data->jabatan); ?></h4></strong></label>
                    <div class="card">
                    <div class="card-body">
                        <div class="form-group row" style="margin: -5px">
                            <label class="col-sm-4 col-form-label"><strong>General Knowledge </strong></label>
                            <label class="col-sm-2 col-form-label">
                                <strong>: <?php echo e($data->generalKnowledge); ?></strong>
                            </label>
                        </div>
                        <div class="form-group row" style="margin: -5px">
                            <label class="col-sm-4 col-form-label"><strong>Basic </strong></label>
                            <label class="col-sm-2 col-form-label">
                                <strong>: <?php echo e($data->basic); ?></strong>
                            </label>
                        </div>
                        <div class="form-group row" style="margin: -5px">
                            <label class="col-sm-4 col-form-label"><strong>Intermediate </strong></label>
                            <label class="col-sm-2 col-form-label">
                                <strong>: <?php echo e($data->intermediate); ?></strong>
                            </label>
                        </div>
                        <div class="form-group row" style="margin: -5px">
                            <label class="col-sm-4 col-form-label"><strong>Advance </strong></label>
                            <label class="col-sm-2 col-form-label">
                                <strong>: <?php echo e($data->advance); ?></strong>
                            </label>
                        </div>

                        <a href="<?php echo e(url('nilaiBobot/1/edit')); ?>" class="float-right btn btn-primary">Edit</a>
                    </div>
                    </div>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layoutApp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TeguhID\Desktop\SpkPenilaianKaryawan\resources\views/nav/nilaiBobot.blade.php ENDPATH**/ ?>