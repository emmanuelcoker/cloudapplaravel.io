<?php

namespace App\Http\Livewire;

use App\Models\Location;
use App\Models\Tv;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class DashboardForm extends Component
{
    use LivewireAlert;
    
    public $location, $display, $displays;

    public function mount()
    {
        $this->display = session()->get('tv')['id'];
        $this->displays = [];
    }


    public function getDisplays()
    {
        if ($this->location > 0) {
            $location = Location::findOrFail($this->location);
            $this->displays = $location->tvs;
        } else {
            $this->displays = [];
            $this->display = 0;
        }
    }



    public function changeDisplay()
    {
        if ($this->display > 0) {
            $tv = Tv::findOrFail($this->display);
            session(['tv' => $tv]);

            $this->alert('success', 'Changed!', [
                'position' =>  'center',
                'timer' =>  4000,
                'toast' =>  false,
                'text' =>  'Display has changed successfully',
                'showCancelButton' =>  false,
                'showConfirmButton' =>  true,
            ]);

            $this->dispatchBrowserEvent('refreshPage');  //TO refresh after change
        }
    }


    public function render()
    {
        return view('livewire.dashboard-form', [
            'locations' => Location::all()
        ]);
    }
}
