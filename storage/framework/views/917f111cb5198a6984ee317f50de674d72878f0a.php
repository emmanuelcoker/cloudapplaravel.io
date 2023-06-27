<?php $__env->startSection('css'); ?>
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
<link href="<?php echo e(Path::asset('admin/plugins/apex/apexcharts.css')); ?>" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo e(Path::asset('admin/assets/css/widgets/modules-widgets.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(Path::asset('admin/assets/css/forms/theme-checkbox-radio.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<div class="layout-px-spacing">
    <div class="row layout-spacing layout-top-spacing" id="cancel-row">

        <div class="col-lg-12">
        <div class="fq-header-wrapper">
                <h1 class="" style="color:var(--tableTitleColor1)"> Templates</h1>
                <p class="" style="color:var(--tableTitleColor2)">Manage your template type!</p>
            </div>

                    </div>

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
                        <script>
                            swal("Ooosps", "File type is not allowed", "error");
                        </script>
                        <?php endif; ?>
  

        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('template')->html();
} elseif ($_instance->childHasBeenRendered('4tUPpWB')) {
    $componentId = $_instance->getRenderedChildComponentId('4tUPpWB');
    $componentTag = $_instance->getRenderedChildComponentTagName('4tUPpWB');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('4tUPpWB');
} else {
    $response = \Livewire\Livewire::mount('template');
    $html = $response->html();
    $_instance->logRenderedChild('4tUPpWB', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>



    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script src="<?php echo e(Path::asset('admin/assets/js/custom.js')); ?>"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script src="<?php echo e(Path::asset('admin/plugins/apex/apexcharts.min.js')); ?>"></script>
<script src="<?php echo e(Path::asset('admin/assets/js/widgets/modules-widgets.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.client.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\CloudAppLaravel\resources\views/Client/template.blade.php ENDPATH**/ ?>