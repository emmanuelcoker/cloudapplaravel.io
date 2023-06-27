<?php $__env->startSection('css'); ?>
<style>
    .form-form {
  width: 100%;
  display: flex;
  flex-direction: column;
  min-height: 100%; 
  position: fixed;
  right: 0;
  background: whitesmoke;
}

    .form-form .form-form-wrap {
        max-width: 60%;
        margin: 0 auto;
        min-width: 311px;
        min-height: 100%;
        height: 100vh;
        align-items: center;
        justify-content: center;
    }
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<body class="form">
    <div class="form-container">

        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">
                        <h1 class="text-center titleHead">
                            <b> <?php echo e($announce->title); ?></b>
                        </h1>
                        <div class="titleDivider"></div>
                        <br><br><bR>
                        <h5 class="h5Font">
                            <?php echo e($announce->text); ?>

                        </h5>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.templates', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\CloudAppLaravel\resources\views/template/announce1.blade.php ENDPATH**/ ?>