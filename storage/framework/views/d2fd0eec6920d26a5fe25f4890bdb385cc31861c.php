<div>



<?php $__currentLoopData = $trainings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $training): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="modal fade" id="training<?php echo e($training->id); ?>" tabindex="-1" role="dialog" aria-labelledby="addContact1ModalTitle" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('training-form', [$training->id])->html();
} elseif ($_instance->childHasBeenRendered('l1968875169-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l1968875169-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1968875169-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1968875169-0');
} else {
    $response = \Livewire\Livewire::mount('training-form', [$training->id]);
    $html = $response->html();
    $_instance->logRenderedChild('l1968875169-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div><?php /**PATH C:\xampp\htdocs\CloudAppLaravel\CloudAppLaravel\resources\views/livewire/training-settings.blade.php ENDPATH**/ ?>