<?php $__env->startSection('css'); ?>
<style>
    .form-form {
        width: 50%;
        display: flex;
        flex-direction: column;
        min-height: 100%;
        position: fixed;
        right: 0;
        background: whitesmoke;
    }

    .form-form .form-form-wrap {
        max-width: 700px;
        margin: 0 auto;
        min-width: 311px;
        min-height: 100%;
        height: 100vh;
        align-items: center;
        justify-content: center;
    }



    .form-image {
        position: fixed;
        right: 50%;
        min-height: auto;
        height: 100vh;
        width: 50%;
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

        <!-- //image -->
        <div class="form-image"></div>

    </div>
</body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.templates', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\CloudAppLaravel\CloudAppLaravel\resources\views/template/announce2.blade.php ENDPATH**/ ?>