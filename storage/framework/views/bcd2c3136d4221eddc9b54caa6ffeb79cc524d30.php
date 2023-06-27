<?php $__env->startSection('css'); ?>
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
<link href="<?php echo e(Path::asset('admin/plugins/apex/apexcharts.css')); ?>" rel="stylesheet" type="text/css">
<link href="<?php echo e(Path::asset('admin/assets/css/dashboard/dash_1.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(Path::asset('admin/assets/css/dashboard/dash_2.css')); ?>" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
<link href="<?php echo e(Path::asset('admin/assets/css/elements/infobox.css')); ?>" rel="stylesheet" type="text/css" />
<style>
    .myLocation {
        border-radius: 30px;
        padding: 10px 20px;
        background: whitesmoke;
        margin-top: 30px 0px 10px 0px;
        font-size: 14px;
    }
</style>

<script>    
    window.localStorage.setItem('pieChart', '<?php echo $json;?>'); 
    window.localStorage.setItem('barChart', '<?php echo "[".implode(', ',$activities)."]";?>'); 
    window.localStorage.setItem('barChart1', '<?php echo "[".implode(', ',$logies)."]";?>'); 
</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>




<div class="layout-px-spacing">

    <div class="row layout-top-spacing">
        <?php if(Session::has('success')): ?>
        <script>
            swal("Updated", "<?php echo Session::get('success'); ?>", "success");
        </script>
        <?php endif; ?>
        <?php if(Session::has('fail')): ?>
        <script>
            swal("Ooosps", "<?php echo Session::get('fail'); ?>", "error");
        </script>
        <?php endif; ?>
        <?php if(Session::has('errors')): ?>
        <script>
            swal("Ooosps", "File type is not allowed", "error");
        </script>
        <?php endif; ?>



        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
            <div class="infobox-1 text-center" style="width: 100%; padding:43px 0px; background:var(--dashboardCard); border: 1px solid var(--dashboardCard)">
                <h5 class="info-heading" style="color:var(--blackText)">Welcome Back (<?php echo e(Auth::user()['role']['name']); ?>) </h5>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
            <div class="infobox-1 text-center" style="width: 100%; background:var(--dashboardCard); border: 1px solid var(--dashboardCard)">
                <div class="row">
                    <div class="col-md-4">
                        <div class="info-icon" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-5 text-center">
                        <div  >
                            <h5 class="info-heading" style="color:var(--blackText)"> <?php echo e(Auth::user()->name); ?> </h5>
                            <p class="info-text" style="color:var(--blackText)"><?php echo e(Auth::user()->email); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        
        <?php if(Permission::check('visibility_change_display')): ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard-form')->html();
} elseif ($_instance->childHasBeenRendered('oUkF3TO')) {
    $componentId = $_instance->getRenderedChildComponentId('oUkF3TO');
    $componentTag = $_instance->getRenderedChildComponentTagName('oUkF3TO');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('oUkF3TO');
} else {
    $response = \Livewire\Livewire::mount('dashboard-form');
    $html = $response->html();
    $_instance->logRenderedChild('oUkF3TO', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php endif; ?>

        


        <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing" style="height: 477px;">
            <div class="widget widget-chart-one" style="padding:10px; ">
                <div class="widget-heading">
                    <h5 class="" style="color:var(--blackText)">App Activities</h5>
                    <div class="task-action">
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" id="pendingTask" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="19" cy="12" r="1"></circle>
                                    <circle cx="5" cy="12" r="1"></circle>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="widget-content">
                    <div id="revenueMonthly"></div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing" style="left: 0px; right:0px; margin:auto; height: 482px;">
            <div class="widget widget-chart-two">
                <div class="widget-heading">
                    <h5 class="" style="color:var(--blackText)">Active Contents</h5>
                    <div class="w-icon">
                        <a class="btn btn-primary" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg></a>
                    </div>
                </div>
                <div class="widget-content" style="margin-top:-20px">
                    <div id="chart-2" class="" style="backgound:red"></div>
                </div>
            </div>
        </div>



        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
            <div class="widget-four">
                <div class="widget-heading">
                    <h5 class="" style="color:var(--blackText)"><?php echo e($tab->training); ?> Summary</h5>
                </div>
                <div class="widget-content">
                    <div class="vistorsBrowser">
                        <div class="browser-list">
                            <div class="w-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tv">
                                    <rect x="2" y="7" width="20" height="15" rx="2" ry="2"></rect>
                                    <polyline points="17 2 12 7 7 2"></polyline>
                                </svg>
                            </div>
                            <div class="w-browser-details">
                                <div class="w-browser-info">
                                    <h6>Morning DS Videos</h6>
                                    <p class="browser-count"><?php echo e($morning); ?></p>
                                </div>
                                <div class="w-browser-stats">
                                    <div class="progress">
                                        <div class="progress-bar bg-gradient-primary" role="progressbar" style="width: <?php echo e($morning); ?>0%" aria-valuenow="<?php echo e($morning); ?>0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="browser-list">
                            <div class="w-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tv">
                                    <rect x="2" y="7" width="20" height="15" rx="2" ry="2"></rect>
                                    <polyline points="17 2 12 7 7 2"></polyline>
                                </svg>
                            </div>
                            <div class="w-browser-details">

                                <div class="w-browser-info">
                                    <h6>Afternoon DS Videos</h6>
                                    <p class="browser-count"><?php echo e($afternoon); ?></p>
                                </div>

                                <div class="w-browser-stats">
                                    <div class="progress">
                                        <div class="progress-bar bg-gradient-danger" role="progressbar" style="width:<?php echo e($afternoon); ?>0%" aria-valuenow="<?php echo e($afternoon); ?>0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="browser-list">
                            <div class="w-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tv">
                                    <rect x="2" y="7" width="20" height="15" rx="2" ry="2"></rect>
                                    <polyline points="17 2 12 7 7 2"></polyline>
                                </svg>
                            </div>
                            <div class="w-browser-details">

                                <div class="w-browser-info">
                                    <h6>Evening DS Videos</h6>
                                    <p class="browser-count"><?php echo e($evening); ?></p>
                                </div>

                                <div class="w-browser-stats">
                                    <div class="progress">
                                        <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: <?php echo e($evening); ?>0%" aria-valuenow="<?php echo e($evening); ?>0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>




        <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="row widget-statistic">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
                    <div class="widget widget-one_hybrid widget-followers">
                        <div class="widget-heading">
                            <div class="w-title">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image">
                                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                        <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                        <polyline points="21 15 16 10 5 21"></polyline>
                                    </svg>
                                </div>
                                <div class="">
                                    <p class="w-value" style="color:var(--blackText)"><?php echo e($logos); ?></p>
                                    <h5 class="">Logos</h5>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content">
                            <div class="w-chart">
                                <div id="hybrid_followers"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
                    <div class="widget widget-one_hybrid widget-referral">
                        <div class="widget-heading">
                            <div class="w-title">
                                <div class="w-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                    <line x1="12" y1="17" x2="12.01" y2="17"></line>
                                </svg>
                                </div>
                                <div class="">
                                    <p class="w-value" style="color:var(--blackText)"><?php echo e($faqs); ?></p>
                                    <h5 class="">Faqs</h5>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content">
                            <div class="w-chart">
                                <div id="hybrid_followers1"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
                    <div class="widget widget-one_hybrid widget-engagement">
                        <div class="widget-heading">
                            <div class="w-title">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tv">
                                        <rect x="2" y="7" width="20" height="15" rx="2" ry="2"></rect>
                                        <polyline points="17 2 12 7 7 2"></polyline>
                                    </svg>
                                </div>
                                <div class="">
                                    <p class="w-value" style="color:var(--blackText)"><?php echo e($tutorials); ?></p>
                                    <h5 class="">Tutorials</h5>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content">
                            <div class="w-chart">
                                <div id="hybrid_followers3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>








        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-card-one">
                <div class="widget-content">

                    <div class="media">
                        <div class="w-img">
                            <img src="<?php echo e(Path::asset('images/'.$support['image'])); ?>" alt="avatar">
                        </div>
                        <div class="media-body">
                            <h6 style="color:var(--blackText)"><?php echo e($support->name); ?></h6>
                            <p class="meta-date-time"><?php echo e($support->email); ?> <bR>Support Person</p>
                        </div>
                    </div>

                    <p>Contact Help Desk anytime you need help or want more information about any seaction in this app.</p>

                    <div class="w-action">
                        <div class="card-like">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-at-sign">
                                <circle cx="12" cy="12" r="4"></circle>
                                <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
                            </svg>
                        </div>

                        <div class="read-more">
                            <a href="<?php echo e(route('support.index')); ?>">Help Desk <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-right">
                                    <polyline points="13 17 18 12 13 7"></polyline>
                                    <polyline points="6 17 11 12 6 7"></polyline>
                                </svg></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-card-two">
                <div class="widget-content">

                    <div class="media">
                        <div class="media-body">
                            <h6 style="color:var(--blackText)">RSS News</h6>
                            <p class="meta-date-time">Bringing the world to you.</p>
                        </div>
                    </div>

                    <div class="card-bottom-section">
                        <h5>RSS Channels</h5>
                        <div class="img-group">
                            <?php $__currentLoopData = $rsss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <img src="<?php echo e(Variables::tvPath('rss/images/'.$rss->image)); ?>" alt="avatar">
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <br>
                        <a href="<?php echo e(route('news.index')); ?>" class="btn">View RSS</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-card-two">
                <div class="widget-content">

                    <div class="media">
                        <div class="media-body">
                            <h6 style="color:var(--blackText)">Custom News</h6>
                            <p class="meta-date-time">Bringing the world to you.</p>
                        </div>
                    </div>

                    <div class="card-bottom-section">
                        <h5 >Custom Channels</h5>
                        <div class="img-group">
                            <?php $__currentLoopData = $newss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <img src="<?php echo e(Variables::tvPath('rss/images/'.$news->image)); ?>" alt="avatar">
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <br>
                        <a href="<?php echo e(route('news.index')); ?>" class="btn">View Custom News</a>
                    </div>
                </div>
            </div>
        </div>






    </div>
</div>





<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script src="<?php echo e(Path::asset('admin/plugins/apex/apexcharts.min.js')); ?>"></script>
<script src="<?php echo e(Path::asset('admin/assets/js/dashboard/dash_1.js')); ?>"></script>
<script src="<?php echo e(Path::asset('admin/assets/js/dashboard/dash_2.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.client.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\CloudAppLaravel\resources\views/Client/home.blade.php ENDPATH**/ ?>