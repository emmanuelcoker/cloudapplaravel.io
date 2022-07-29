<?php

namespace App\Http\Livewire;

use App\Models\Feature;
use App\Models\Plan;
use App\Models\Section;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class Sections extends Component
{

    use LivewireAlert;
    
    public $feature, $section;


    public function addSection()
    {
        if ($this->section) {
            Section::create([
                'name' => $this->section
            ]);

            $this->section = null;

            $this->alert('success', 'Added Successfully!', [
                'position' =>  'center',
                'timer' =>  4000,
                'toast' =>  false,
                'text' =>  '',
                'showCancelButton' =>  false,
                'showConfirmButton' =>  true,
            ]);
        } else {
            $this->alert('error', 'Field are required!', [
                'position' =>  'center',
                'timer' =>  4000,
                'toast' =>  false,
                'text' =>  '',
                'showCancelButton' =>  true,
                'showConfirmButton' =>  false,
            ]);
        }
    }

    public function deleteSection($id){
        $section = Section::find($id);
        $section->delete();
        $this->alert('success', 'Deleted Successfully!', [
            'position' =>  'center',
            'timer' =>  4000,
            'toast' =>  false,
            'text' =>  '',
            'showCancelButton' =>  false,
            'showConfirmButton' =>  true,
        ]);
    }





    public function addFeature()
    {
        if ($this->feature) {
            Feature::create([
                'item' => $this->feature,
            ]);

            $this->feature = null;

            $this->alert('success', 'Added Successfully!', [
                'position' =>  'center',
                'timer' =>  4000,
                'toast' =>  false,
                'text' =>  '',
                'showCancelButton' =>  false,
                'showConfirmButton' =>  true,
            ]);
        } else {
            $this->alert('error', 'All fields are required!', [
                'position' =>  'center',
                'timer' =>  4000,
                'toast' =>  false,
                'text' =>  '',
                'showCancelButton' =>  true,
                'showConfirmButton' =>  false,
            ]);
        }
    }

    public function deleteFeature($id){
        $feature = Feature::find($id);
        $feature->delete();
        $this->alert('success', 'Deleted Successfully!', [
            'position' =>  'center',
            'timer' =>  4000,
            'toast' =>  false,
            'text' =>  '',
            'showCancelButton' =>  false,
            'showConfirmButton' =>  true,
        ]);
    }


    
  
    public function render()
    {
        return view('livewire.sections', [
            'sections' => Section::all(),
            'features' => Feature::all()
        ]);
    }
}
