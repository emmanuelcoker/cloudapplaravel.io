<div>



@foreach($trainings as $training)
<div class="modal fade" id="training{{$training->id}}" tabindex="-1" role="dialog" aria-labelledby="addContact1ModalTitle" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            @livewire('training-form', [$training->id]  )
        </div>
    </div>
</div>
@endforeach

</div>