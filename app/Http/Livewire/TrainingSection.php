<?php

namespace App\Http\Livewire;

use App\Models\Training;
use App\Models\Tv;
use Livewire\Component;

class TrainingSection extends Component
{
    public $tv_id;  
    public $refresh;

    protected $listeners = ['refreshTrainingSections'];

    public function mount(){
        $this->tv_id = session()->get('tv')['id'];
    }


    public function refreshTrainingSections()
    {
        $this->refresh = 'ok';
    }


    public function render()
    {
        return view('livewire.training-section', [
            'morning' => Training::where('tv_id', $this->tv_id)->where('name', 'Morning')->first(),
            'afternoon' => Training::where('tv_id', $this->tv_id)->where('name', 'Afternoon')->first(),
            'evening' => Training::where('tv_id', $this->tv_id)->where('name', 'Evening')->first(),
            'tv' => Tv::find($this->tv_id)
        ]);
    }
}
