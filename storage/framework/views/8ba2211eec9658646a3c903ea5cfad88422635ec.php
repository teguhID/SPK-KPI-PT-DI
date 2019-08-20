<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Login System</title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link href="<?php echo e(asset('')); ?>vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo e(asset('')); ?>css/sb-admin.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>

<!-- Bootstrap core JavaScript-->
<script src="<?php echo e(asset('')); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?php echo e(asset('')); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo e(asset('')); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Page level plugin JavaScript-->
<script src="<?php echo e(asset('')); ?>vendor/chart.js/Chart.min.js"></script>
<script src="<?php echo e(asset('')); ?>vendor/datatables/jquery.dataTables.js"></script>
<script src="<?php echo e(asset('')); ?>vendor/datatables/dataTables.bootstrap4.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo e(asset('')); ?>js/sb-admin.min.js"></script>

<!-- Demo scripts for this page-->
<script src="<?php echo e(asset('')); ?>js/demo/datatables-demo.js"></script>
<script src="<?php echo e(asset('')); ?>js/demo/chart-area-demo.js"></script>
</body>
</html>
<?php /**PATH C:\Users\TeguhID\Desktop\SpkPenilaianKaryawan\resources\views/layouts/app.blade.php ENDPATH**/ ?>