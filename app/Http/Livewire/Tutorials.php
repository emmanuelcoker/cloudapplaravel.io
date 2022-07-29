<?php

namespace App\Http\Livewire;

use App\Models\Section;
use App\Models\Tutorial;
use Livewire\Component;

class Tutorials extends Component
{


    public $tutorials;
    public $search;


    public function mount(){
        $this->search = 0;
        $this->tutorials = Tutorial::get();
    }


    public $rules = [
        'search' => 'required',
    ];

    public function findTutorial(){
        $this->validate(); 

        if($this->search > 0){
            $section = Section::find($this->search);
            $this->tutorials = $section['tutorials'];
        }else{
            $this->tutorials = Tutorial::get();
        }
    }


    public function render()
    {
        return view('livewire.tutorials', [
            'sections' => Section::all()
        ]);
    }
}
