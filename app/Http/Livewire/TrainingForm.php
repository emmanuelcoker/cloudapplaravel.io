<?php

namespace App\Http\Livewire;

use App\Models\Training;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class TrainingForm extends Component
{

    // public $start, $end, $T_ID;
    

    // public function mount($id){
    //     $train = Training::find($id);
    //     $this->start = $train->start;
    //     $this->end = $train->end;
    //     $this->T_ID = $train->id;
    // }

    // public function render()
    // {
    //     return view('livewire.training-form');
    // }

    // public function update(){
    //     $training = Training::findOrFail($this->T_ID);
    //     $training->start = $this->start;
    //     $training->end = $this->end;
    //     $training->update();

    //     $this->alert('success', 'Added successfully!', [
    //         'position' =>  'center',
    //         'timer' =>  4000,
    //         'toast' =>  false,
    //         'text' =>  '',
    //         'showCancelButton' =>  false,
    //         'showConfirmButton' =>  true,
    //     ]);

    //     $this->dispatchBrowserEvent('closeModal');  //TO CLOSE MODAL

    // }
}
