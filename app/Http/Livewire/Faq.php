<?php

namespace App\Http\Livewire;

use App\Models\Faq as ModelsFaq;
use App\Models\Section;
use Livewire\Component;

class Faq extends Component
{

    public $faqs;
    public $search;


    public function mount(){
        $this->search = 0;
        $this->faqs = ModelsFaq::get();
    }


    public $rules = [
        'search' => 'required',
    ];

    public function findFAQ(){
        $this->validate(); 

        if($this->search > 0){
            $section = Section::find($this->search);
            $this->faqs = $section['faqs'];
        }else{
            $this->faqs = ModelsFaq::get();
        }
    }
 
    public function render()
    {
        return view('livewire.faq', [
            'sections' => Section::all()
        ]);
    }
}
