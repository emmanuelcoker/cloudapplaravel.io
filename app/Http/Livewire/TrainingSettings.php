<?php

namespace App\Http\Livewire;

use App\Models\Training;
use Livewire\Component;

class TrainingSettings extends Component
{

    

    public function render()
    {
        return view('livewire.training-settings', [
            'trainings' => Training::get()
        ]);
    }


    
}
