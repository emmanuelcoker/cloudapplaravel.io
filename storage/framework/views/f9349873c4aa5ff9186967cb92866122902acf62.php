<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title><?php echo e(env('APP_NAME')); ?></title>
    <link rel="icon" type="image/x-icon" href="<?php echo e(Path::asset('images/cloudAppImage.png')); ?>" />
    <link href="<?php echo e(Path::asset('admin/assets/css/loader.css')); ?>" rel="stylesheet" type="text/css" />
    <script src="<?php echo e(Path::asset('admin/assets/js/loader.js')); ?>"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="<?php echo e(Path::asset('admin/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(Path::asset('admin/assets/css/plugins.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(Path::asset('admin/assets/css/structure.css')); ?>" rel="stylesheet" type="text/css" class="structure" />
    <link href="<?php echo e(Path::asset('admin/assets/css/authentication/form-1.css')); ?>" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(Path::asset('admin/assets/css/forms/theme-checkbox-radio.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(Path::asset('admin/assets/css/forms/switches.css')); ?>">

    <?php echo $__env->yieldContent('css'); ?> 
</head>

<body class="form">


    <div class="form-container">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">

                    <?php echo $__env->yieldContent('content'); ?>


                </div>
            </div>
        </div>
        <div class="form-image" >
            <video autoplay muted loop style="width: 100vw; min-height: 100vh">
                <source src="<?php echo e(Path::asset('images/bg.mp4')); ?>" type="video/mp4">
            </video>
            <div style="position: absolute; top:37%; right:37%">
                <img src="<?php echo e(Path::asset('images/cloudAppImage.png')); ?>"  width="200" alt="" srcset="">
            </div>
        </div>
    </div>


    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="<?php echo e(Path::asset('admin/assets/js/libs/jquery-3.1.1.min.js')); ?>"></script>
    <script src="<?php echo e(Path::asset('admin/bootstrap/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(Path::asset('admin/bootstrap/js/bootstrap.min.js')); ?>"></script>

    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="<?php echo e(Path::asset('admin/assets/js/authentication/form-1.js')); ?>"></script>
<?php echo $__env->yieldContent('js'); ?>
</body>

</html><?php /**PATH C:\xampp\htdocs\CloudAppLaravel\CloudAppLaravel\resources\views/layouts/client/auth.blade.php ENDPATH**/ ?>