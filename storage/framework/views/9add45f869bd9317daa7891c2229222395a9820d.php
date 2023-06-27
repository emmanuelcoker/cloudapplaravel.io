<?php $__env->startSection('title'); ?>
Page Not Found
<?php $__env->stopSection(); ?>

<?php $__env->startSection('error'); ?>
<h1 class="error-number " style="font-size:5em">Page Not Found</h1>
<p class="mini-text">Ooops!</p>
<p class="error-text">The page you requested was not found!</p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('errors.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\CloudAppLaravel\CloudAppLaravel\resources\views/errors/404.blade.php ENDPATH**/ ?>