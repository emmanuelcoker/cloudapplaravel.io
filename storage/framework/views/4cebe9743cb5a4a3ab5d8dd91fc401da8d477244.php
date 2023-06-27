<?php $__env->startSection('css'); ?>
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="<?php echo e(Path::asset('admin/assets/css/forms/switches.css')); ?>">
<link href="<?php echo e(Path::asset('admin/plugins/jquery-ui/jquery-ui.min.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(Path::asset('admin/assets/css/apps/contacts.css')); ?>" rel="stylesheet" type="text/css" />


<!--  BEGIN CUSTOM STYLE FILE  -->
<link href="<?php echo e(Path::asset('admin/assets/css/components/tabs-accordian/custom-tabs.css')); ?>" rel="stylesheet" type="text/css" />

<!-- END THEME GLOBAL STYLES -->

<!--  BEGIN CUSTOM STYLE FILE  -->
<link href="<?php echo e(Path::asset('admin/assets/css/scrollspyNav.css')); ?>" rel="stylesheet" type="text/css" />
<style>
    .fillColor:hover {
        fill: white 
    }

    .fillColor::selection { 
        fill: white
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<div class="layout-px-spacing">
    <div class="row layout-spacing layout-top-spacing" id="cancel-row">
        <div class="col-lg-12">
            <div class="widget-content searchable-container list">

                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-5 col-sm-7 filtered-list-search layout-spacing align-self-center">
                    <div class="fq-header-wrapper" style="">
                            <h1 class="" style="color:var(--tableTitleColor1)"> Locations</h1>
                            <p class="" style="color:var(--tableTitleColor2)">Manage your displays!</p>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7 col-md-7 col-sm-5 text-sm-right text-center layout-spacing align-self-center">
                        <div class="d-flex justify-content-sm-end justify-content-center">
                            <div class="switch align-self-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list view-list active-view">
                                    <line x1="8" y1="6" x2="21" y2="6"></line>
                                    <line x1="8" y1="12" x2="21" y2="12"></line>
                                    <line x1="8" y1="18" x2="21" y2="18"></line>
                                    <line x1="3" y1="6" x2="3" y2="6"></line>
                                    <line x1="3" y1="12" x2="3" y2="12"></line>
                                    <line x1="3" y1="18" x2="3" y2="18"></line>
                                </svg>
                            </div>
                        </div>
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

                    </div>
                </div>



                <div class="widget-content widget-content-area rounded-pills-icon">

                    <ul class="nav nav-pills mb-4 mt-3  justify-content-center" id="rounded-pills-icon-tab" role="tablist">
                        <li class="nav-item ml-2 mr-2">
                            <a class="nav-link mb-2 active text-center fillColor" id="rounded-pills-icon-home-tab" data-toggle="pill" href="#rounded-pills-icon-home" role="tab" aria-controls="rounded-pills-icon-home" aria-selected="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                                Locations
                            </a>
                        </li>
                        <?php if($settings['add_location']): ?>
                        <li class="nav-item ml-2 mr-2">
                            <a class="nav-link mb-2 text-center fillColor" id="rounded-pills-icon-profile-tab" data-toggle="pill" href="#rounded-pills-icon-profile" role="tab" aria-controls="rounded-pills-icon-profile" aria-selected="false">

                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>Add </a>
                        </li>
                        <?php endif; ?>
                    </ul>
                    <div class="tab-content" id="rounded-pills-icon-tabContent">
                        <div class="tab-pane fade show active" id="rounded-pills-icon-home" role="tabpanel" aria-labelledby="rounded-pills-icon-home-tab">

                            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('location-list')->html();
} elseif ($_instance->childHasBeenRendered('jvkaVU4')) {
    $componentId = $_instance->getRenderedChildComponentId('jvkaVU4');
    $componentTag = $_instance->getRenderedChildComponentTagName('jvkaVU4');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('jvkaVU4');
} else {
    $response = \Livewire\Livewire::mount('location-list');
    $html = $response->html();
    $_instance->logRenderedChild('jvkaVU4', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                        </div>

                        <?php if($settings['add_location']): ?>
                        <div class="tab-pane fade" id="rounded-pills-icon-profile" role="tabpanel" aria-labelledby="rounded-pills-icon-profile-tab">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-12 layout-spacing" style="margin: 40px auto 0px auto; ">
                                    <div class="widget widget-card-two">
                                        <div class="widget-content">
                                            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('location')->html();
} elseif ($_instance->childHasBeenRendered('kMXURrO')) {
    $componentId = $_instance->getRenderedChildComponentId('kMXURrO');
    $componentTag = $_instance->getRenderedChildComponentTagName('kMXURrO');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('kMXURrO');
} else {
    $response = \Livewire\Livewire::mount('location');
    $html = $response->html();
    $_instance->logRenderedChild('kMXURrO', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>













<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo e(Path::asset('admin/assets/js/scrollspyNav.js')); ?>"></script>

<script src="<?php echo e(Path::asset('admin/plugins/highlight/highlight.pack.js')); ?>"></script>
<script src="<?php echo e(Path::asset('admin/assets/js/custom.js')); ?>"></script>
<!-- END GLOBAL MANDATORY STYLES -->
<script src="<?php echo e(Path::asset('admin/assets/js/scrollspyNav.js')); ?>"></script>






<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.client.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\CloudAppLaravel\resources\views/Client/location.blade.php ENDPATH**/ ?>