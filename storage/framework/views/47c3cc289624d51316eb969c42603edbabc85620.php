<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="<?php echo e(Path::asset('admin/assets/css/selectUI.css')); ?>">

<link href="<?php echo e(Path::asset('admin/assets/css/components/tabs-accordian/custom-accordions.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="layout-px-spacing">
    <?php if(Session::has('success')): ?>
    <script>
        swal("Uploaded", "<?php echo Session::get('success'); ?>", "success");
    </script>
    <?php endif; ?>
    <?php if(Session::has('fail')): ?>
    <script>
        swal("Ooosps", "<?php echo Session::get('fail'); ?>", "error");
    </script>
    <?php endif; ?>
    <?php if(Session::has('errors')): ?>
    <?php $__currentLoopData = Session::get('errors'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <script>
        swal("Ooosps", "<?php echo $error; ?>", "error");
    </script>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
    <div class="row">

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 filtered-list-search layout-spacing align-self-center" style="margin-top: 50px;">
            <div class="fq-header-wrapper">
                <h1 class="" style="color:var(--tableTitleColor1)"> Permission</h1>
                <p class="" style="color:var(--tableTitleColor2)">Manage Permission!</p>
            </div>
        </div>



        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('roles')->html();
} elseif ($_instance->childHasBeenRendered('JgZnibe')) {
    $componentId = $_instance->getRenderedChildComponentId('JgZnibe');
    $componentTag = $_instance->getRenderedChildComponentTagName('JgZnibe');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('JgZnibe');
} else {
    $response = \Livewire\Livewire::mount('roles');
    $html = $response->html();
    $_instance->logRenderedChild('JgZnibe', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>


        <div class="col-md-12 layout-spacing" style="padding:10px">
            <div class="statbox widget box box-shadow" style="border:2px solid var(--dashboardCard);">
                <!-- <div id="accordionIcons" class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <br>
                            <h4>Icons</h4>
                        </div>
                    </div>
                </div> -->
                <div class="widget-content widget-content-area" style="border:2px solid var(--dashboardCard); background:var(--dashboardCard)">

                    <div id="iconsAccordion" class="accordion-icons">


                        <form action="<?php echo e(route('permission.store')); ?>" method="post"> <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-12" style="padding-bottom:40px">
                            <button type="submit" class="btn btn-primary mt-4 btn-xs" style="display:block; margin:auto" >Update</button> 
                            </div>
                        </div>
                        <div class="row">
                            <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-6">
                                <div class="card" style="background:var(--tableDiv)">
                                    <div class="card-header" id="headingThree<?php echo e($permission->id); ?>">
                                        <section class="mb-0 mt-0">
                                            <div role="menu" class="" data-toggle="collapse" data-target="#iconAccordionThree<?php echo e($permission->id); ?>" aria-expanded="true" aria-controls="iconAccordionThree">
                                                <div class="accordion-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list">
                                                        <line x1="8" y1="6" x2="21" y2="6"></line>
                                                        <line x1="8" y1="12" x2="21" y2="12"></line>
                                                        <line x1="8" y1="18" x2="21" y2="18"></line>
                                                        <line x1="3" y1="6" x2="3.01" y2="6"></line>
                                                        <line x1="3" y1="12" x2="3.01" y2="12"></line>
                                                        <line x1="3" y1="18" x2="3.01" y2="18"></line>
                                                    </svg>
                                                </div>
                                                <span style="color:var(--tableFontColor)"><?php echo e($permission->name); ?></span>
                                                <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                                        <polyline points="6 9 12 15 18 9"></polyline>
                                                    </svg></div>
                                            </div>
                                        </section>
                                    </div>
                                    <div id="iconAccordionThree<?php echo e($permission->id); ?>" class="collapse" aria-labelledby="headingThree<?php echo e($permission->id); ?>" data-parent="#iconsAccordion">
                                        <div class="card-body">
                                                <ul class="ks-cboxtags">
                                                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li><input type="checkbox" <?php if($permission->role && in_array($role->name, json_decode($permission->role))): ?> checked <?php endif; ?> id="<?php echo e($permission->name); ?>-<?php echo e($role->id); ?>-checkboxOne" name="<?php echo e($permission->key); ?>[]" value="<?php echo e($role->name); ?>">
                                                        <label for="<?php echo e($permission->name); ?>-<?php echo e($role->id); ?>-checkboxOne"><?php echo e($role->name); ?></label>
                                                    </li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>
                                                <!-- <button type="submit" class="btn btn-primary mt-4 btn-xs" style="display:block; margin:auto">Update</button> -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>

    </div>

</div>






<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script src="<?php echo e(Path::asset('admin/plugins/highlight/highlight.pack.js')); ?>"></script>
<script src="<?php echo e(Path::asset('admin/assets/js/scrollspyNav.js')); ?>"></script>
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo e(Path::asset('admin/assets/js/components/ui-accordions.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.client.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\CloudAppLaravel\resources\views/superadmin/permission.blade.php ENDPATH**/ ?>