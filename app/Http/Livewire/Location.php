<?php

namespace App\Http\Livewire;

use App\CustomClasses\Activity;
use App\Models\Country;
use App\Models\GlobalSetting;
use App\Models\Location as ModelsLocation;
use App\Models\State;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Location extends Component
{

    use LivewireAlert;
    public $name, $address, $country, $state, $city, $supervisor, $phone, $email, $manager, $manager_phone, $manager_email;
    public $cities = [], $states = [];

    public function save()
    {

        $limit = GlobalSetting::first()['plan']['locations'];

        $noOfLocations = count(ModelsLocation::all());

        if($noOfLocations < $limit){
            ModelsLocation::create([
                'name' => $this->name,
                'address' => $this->address,
                'country_id' => $this->country,
                'state_id' => $this->state,
                'city_id' => $this->city,
                'supervisor' => $this->supervisor,
                'supervisor_phone' => $this->phone,
                'supervisor_email' => $this->email,
                'manager' => $this->manager,
                'manager_phone' => $this->manager_phone,
                'manager_email' => $this->manager_email,
            ]);
    
            $this->alert('success', 'Location added successfully!', [
                'position' =>  'center',
                'timer' =>  4000,
                'toast' =>  false,
                'text' =>  '',
                'showCancelButton' =>  false,
                'showConfirmButton' =>  true,
            ]);

            Activity::logChanges($this->name, 'Location', 'added');  //log activities
    
            $this->name = null;
            $this->country = null;
            $this->state = null;
            $this->city = null;
            $this->supervisor = null;
            $this->phone = null;
            $this->email = null;
            $this->manager = null;
            $this->manager_phone = null;
            $this->manager_email = null;
            $this->address = null;
    
            $this->emit('refreshLocationList');
        }else{
            $this->alert('error', 'You have exceeded your location limit. To upgrade please contact Cloudapp support', [
                'position' =>  'center',
                'timer' =>  4000,
                'toast' =>  false,
                'text' =>  '',
                'showCancelButton' =>  false,
                'showConfirmButton' =>  true,
            ]);
        }
    }


    public  function getStates()
    {
        if ($this->country) {
            $this->states = Country::find($this->country)['states'];
        } else {
            $this->states = [];
            $this->cities = [];
        }
    }


    public  function getCities()
    {
        if ($this->state) {
            $this->cities = State::find($this->state)['cities'];
        } else {
            $this->cities = [];
        }
    }



  



    public function render()
    {
        return view('livewire.location', [
            'countries' => Country::all()
        ]);
    }
}
