<div class="row" style="margin-top: 30px;">

    <div class="col-md-8" style="left:0px; right: 0px; margin:auto">
        <div class="form-group" style="width:60%; display:block; margin:auto">
            <select wire:model="layout" wire:change="change" class="form-control" style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)">
                <option value="1">Layout 1</option>
                <option value="2">Layout 2</option> 
                <option value="3">Layout 3</option>
                <option value="4">Layout 4</option> 
                <option value="5">Layout 5</option>
            </select>
        </div>
        <br><br>
        <iframe src="<?php echo e(Path::asset('clock/'.$layout.'/index.html')); ?>" scrolling="no" style="border:none; overflow:hidden; " width="400" height="200" style="display:block; margin-left:-50px">
        </iframe>
    </div>
</div><?php /**PATH C:\laragon\www\CloudAppLaravel\resources\views/livewire/clock-layout.blade.php ENDPATH**/ ?>