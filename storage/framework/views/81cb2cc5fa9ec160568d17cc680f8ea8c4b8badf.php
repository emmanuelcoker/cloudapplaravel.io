<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>Amazing Slider</title>

    <!-- Insert to your webpage before the </head> -->
    <script src="sliderengine/jquery.js"></script>
    <script type="text/javascript" src="sliderengine/html5gallery.js"></script>
    <!-- End of head section HTML codes -->

    <style type="text/css">
        body,
        html {
            margin: 0;
            padding: 0;
        }
    </style>

</head>

<body>



    <div style="display: block; margin: -9px auto 0px auto; position: relative; max-width: 100%; width:100vw; height: 100vh;" class="html5gallery" data-hidetitlewhenvideoisplaying="true" data-bgcolor="#f0f0f0" data-autoslide="true" data-autoplayvideo="true" data-onchange="onSlideChange" data-onthumbclick="onThumbClick" data-skin="gallery" data-autoplayvideo="false" data-responsive="true" data-resizemode="fill" data-html5player="true" data-autoslide="true" data-width="900" data-height="390" data-effect="fadeout"  data-padding="40">
        <?php $__currentLoopData = $tv->afternoonVideos($tv->id)->where('is_active', true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="train/item<?php echo e($video->video); ?>.mp4" style="display: none;">
            <img src="train/item01.png" alt="<?php echo e($video->title); ?>" data-description="<?php echo e($video->title); ?>">
        </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>



    <!-- NOTE:
1 - monday
2 - tuesday
3 - wednesday
4 - thursday
5 - friday
6 - saturday
7 - sunday -->


    <!-- afternoon section -->
    <?php if($settings->afternoon): ?>

    <?php
    $afternoonTime = $afternoon->end;
    $hour = date('H', strtotime($afternoonTime));
    $min = date('i', strtotime($afternoonTime));
    ?>

    <?php if($afternoon->mon): ?>
    <!-- monday-->
    <script>
        window.setInterval(function() {
            var date = new Date();
            var myday = date.getDay();
            var hours = date.getHours();
            var minutes = date.getMinutes();
            if (myday == 1 && hours == '<?php echo e($hour); ?>' && minutes == '<?php echo e($min); ?>') {
                window.location.href = "index.html";
            }
        }, 1000);
    </script>
    <?php endif; ?>

    <?php if($afternoon->tue): ?>
    <!-- tuesday-->
    <script>
        window.setInterval(function() {
            var date = new Date();
            var myday = date.getDay();
            var hours = date.getHours();
            var minutes = date.getMinutes();
            if (myday == 2 && hours == '<?php echo e($hour); ?>' && minutes == '<?php echo e($min); ?>') {
                window.location.href = "index.html";
            }
        }, 1000);
    </script>
    <?php endif; ?>

    <?php if($afternoon->wed): ?>
    <!-- wednesday-->
    <script>
        window.setInterval(function() {
            var date = new Date();
            var myday = date.getDay();
            var hours = date.getHours();
            var minutes = date.getMinutes();
            if (myday == 3 && hours == '<?php echo e($hour); ?>' && minutes == '<?php echo e($min); ?>') {
                window.location.href = "index.html";
            }
        }, 1000);
    </script>
    <?php endif; ?>

    <?php if($afternoon->thurs): ?>
    <!-- thursday-->
    <script>
        window.setInterval(function() {
            var date = new Date();
            var myday = date.getDay();
            var hours = date.getHours();
            var minutes = date.getMinutes();
            if (myday == 4 && hours == '<?php echo e($hour); ?>' && minutes == '<?php echo e($min); ?>') {
                window.location.href = "index.html";
            }
        }, 1000);
    </script>
    <?php endif; ?>

    <?php if($afternoon->fri): ?>
    <!-- friday-->
    <script>
        window.setInterval(function() {
            var date = new Date();
            var myday = date.getDay();
            var hours = date.getHours();
            var minutes = date.getMinutes();
            if (myday == 5 && hours == '<?php echo e($hour); ?>' && minutes == '<?php echo e($min); ?>') {
                window.location.href = "index.html";
            }
        }, 1000);
    </script>
    <?php endif; ?>

    <?php if($afternoon->sat): ?>
    <!-- saturday-->
    <script>
        window.setInterval(function() {
            var date = new Date();
            var myday = date.getDay();
            var hours = date.getHours();
            var minutes = date.getMinutes();
            if (myday == 6 && hours == '<?php echo e($hour); ?>' && minutes == '<?php echo e($min); ?>') {
                window.location.href = "index.html";
            }
        }, 1000);
    </script>
    <?php endif; ?>

    <?php if($afternoon->sun): ?>
    <!-- sunday-->
    <script>
        window.setInterval(function() {
            var date = new Date();
            var myday = date.getDay();
            var hours = date.getHours();
            var minutes = date.getMinutes();
            if (myday == 7 && hours == '<?php echo e($hour); ?>' && minutes == '<?php echo e($min); ?>') {
                window.location.href = "index.html";
            }
        }, 1000);
    </script>
    <?php endif; ?>
    <?php endif; ?>
    <!-- end afternoon section -->









</body>

</html><?php /**PATH C:\xampp\htdocs\CloudAppLaravel\CloudAppLaravel\resources\views/template/afternoon.blade.php ENDPATH**/ ?>