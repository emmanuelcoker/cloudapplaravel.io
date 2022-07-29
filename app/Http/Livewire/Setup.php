<?php

namespace App\Http\Livewire;

use App\Models\Country;
use App\Models\Path;
use App\Models\State;
use Livewire\Component;


class Setup extends Component
{
    public  $location_country, $location_state, $location_city;
    public $cities = [], $states = [];

    public function render()
    {
        return view('livewire.setup', [
            'countries' => Country::all(),
        ]);
    }


    public  function getStatesOnSetup()
    {
        if ($this->location_country) {
            $this->states = Country::find($this->location_country)['states'];
        } else {
            $this->states = [];
            $this->cities = [];
        }
    }


    public  function getCitiesOnSetup()
    {
        if ($this->location_state) {
            $this->cities = State::find($this->location_state)['cities'];
        } else {
            $this->cities = [];
        }
    }
    
    public  function onCity()
    {
        if ($this->location_state) {
            $this->cities = State::find($this->location_state)['cities'];
        } else {
            $this->cities = [];
        }
    }
}
