<form action="#" wire:submit.prevent="submit">

    <div class="n-chk">
        <label class="new-control new-checkbox new-checkbox-text checkbox-success">
            <input type="checkbox" wire:model="mon" class="new-control-input" @if($item->mon) checked @endif>
            <span class="new-control-indicator"></span><span class="new-chk-content"> &nbsp; Monday</span>
        </label>
    </div>

    <div class="n-chk">
        <label class="new-control new-checkbox new-checkbox-text checkbox-success">
            <input type="checkbox" wire:model="tue" class="new-control-input" @if($item->tue) checked @endif>
            <span class="new-control-indicator"></span><span class="new-chk-content"> &nbsp; Tuesday</span>
        </label>
    </div>

    <div class="n-chk">
        <label class="new-control new-checkbox new-checkbox-text checkbox-success">
            <input type="checkbox" wire:model="wed" class="new-control-input" @if($item->wed) checked @endif>
            <span class="new-control-indicator"></span><span class="new-chk-content"> &nbsp; Wednesday</span>
        </label>
    </div>

    <div class="n-chk">
        <label class="new-control new-checkbox new-checkbox-text checkbox-success">
            <input type="checkbox" wire:model="thurs" class="new-control-input" @if($item->thurs) checked @endif>
            <span class="new-control-indicator"></span><span class="new-chk-content"> &nbsp; Thursday</span>
        </label>
    </div>

    <div class="n-chk">
        <label class="new-control new-checkbox new-checkbox-text checkbox-success">
            <input type="checkbox" wire:model="fri" class="new-control-input" @if($item->fri) checked @endif>
            <span class="new-control-indicator"></span><span class="new-chk-content"> &nbsp; Friday</span>
        </label>
    </div>

    <div class="n-chk">
        <label class="new-control new-checkbox new-checkbox-text checkbox-success">
            <input type="checkbox" wire:model="sat" class="new-control-input" @if($item->sat) checked @endif>
            <span class="new-control-indicator"></span><span class="new-chk-content"> &nbsp; Saturday</span>
        </label>
    </div>

    <div class="n-chk">
        <label class="new-control new-checkbox new-checkbox-text checkbox-success">
            <input type="checkbox" wire:model="sun" class="new-control-input" @if($item->sun) checked @endif>
            <span class="new-control-indicator"></span><span class="new-chk-content"> &nbsp; Sunday</span>
        </label>
    </div> 
    <hr>
    <div class="form-group mb-0">
        <label for="">Start Time</label>
        <input  value="12:00" wire:model="start"  class="form-control flatpickr flatpickr-input active" type="time" style="background-color:var(--inputBackground) !important; color:var(--inputColor); border:2px solid var(--imgBorder)"   placeholder="Select Date.." @if($settings->freeze_time) readonly @endif >
    </div>
    <br>
    <div class="form-group mb-0">
        <label for="">End Time</label>
        <input  value="12:00" wire:model="end" class="form-control flatpickr flatpickr-input" type="time" style="background-color:var(--inputBackground) !important; color:var(--inputColor); border:2px solid var(--imgBorder)" placeholder="Select Date.." @if($settings->freeze_time) readonly @endif>
    </div>
    <br>
    <br><br>
    <button type="submit" class="btn btn-success" style="display:block;  margin: auto;">Set</button>

</form>