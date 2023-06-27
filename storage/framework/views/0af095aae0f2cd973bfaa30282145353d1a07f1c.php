<div class="row">
    <div class="col-md-12">
        <hr>
        <br>
        <label for=""><b>Show Time or Date</b></label>
        <Br><Br>
    </div>
    <div class="col-md-4">
        <div class="n-chk">
            <label class="new-control new-radio new-radio-text radio-classic-success">
                <input type="radio" class="new-control-input" wire:click="timeType" value="0" wire:model="type">
                <span class="new-control-indicator"></span><span class="new-radio-content"> &nbsp;&nbsp;Date Only</span>
            </label>
        </div>

    </div>
    <div class="col-md-4">
        <div class="n-chk">
            <label class="new-control new-radio new-radio-text radio-classic-success">
                <input type="radio" class="new-control-input" wire:click="timeType" value="1" wire:model="type">
                <span class="new-control-indicator"></span><span class="new-radio-content"> &nbsp;&nbsp;Date & Time</span>
            </label>
        </div>

    </div>
    <div class="col-md-4">
        <div class="n-chk">
            <label class="new-control new-radio new-radio-text radio-classic-success">
                <input type="radio" class="new-control-input" wire:click="timeType" value="2" wire:model="type">
                <span class="new-control-indicator"></span><span class="new-radio-content"> &nbsp;&nbsp;Time Only</span>
            </label>
        </div>
    </div>
</div><?php /**PATH C:\laragon\www\CloudAppLaravel\resources\views/livewire/clock-type.blade.php ENDPATH**/ ?>