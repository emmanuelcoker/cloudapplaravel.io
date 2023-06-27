<?php $__env->startSection('title'); ?>
Page Expired
<?php $__env->stopSection(); ?>

<?php $__env->startSection('error'); ?>
<h1 class="error-number " style="font-size:5em">Page Expired</h1>
<p class="mini-text">Ooops!</p>
<p class="error-text">Your session has expired, please login again!</p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('errors.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\CloudAppLaravel\resources\views/errors/419.blade.php ENDPATH**/ ?>