<?php

namespace App\Http\Livewire;

use App\CustomClasses\Activity;
use App\CustomClasses\Location as CustomClassesLocation;
use App\Models\Announce;
use App\Models\Banner;
use App\Models\Country;
use App\Models\GlobalSetting;
use App\Models\Location;
use App\Models\Logo;
use App\Models\Media;
use App\Models\State;
use App\Models\Training;
use App\Models\Tv;
use App\Models\Zone;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class LocationList extends Component
{
    use LivewireAlert;

    protected $listeners = ['refreshLocationList'];
    public $refresh;
    public $displayIDD, $displayIDName, $zone,  $locationID, $template;
    public $displayName, $displays = [];
    public $name, $address, $country, $state, $city, $supervisor, $phone, $email;
    public $cities = [], $states = [];
    public $locationDetails = [];



    public function render()
    {
        return view('livewire.location-list', [
            'locations' => Location::all(),
            'zones' => Zone::all(),
            'countries' => Country::all(),
            'settings' => GlobalSetting::first()
        ]);
    }





    public function setLocation($id)
    {
        $this->locationID = $id;
    }



    public function getLocationDetail($id)
    {
        $this->locationDetails = Location::findOrFail($id);
    }






    public function getZoneLastID()
    {
        if ($this->zone == null) {
            $this->displayIDD = null;
            $this->displayIDName = null;
        } else {
            $tv = Tv::orderBy('id', 'desc')->where('location_id', $this->locationID)->where('zone_id', $this->zone)->first();
            if ($tv) {
                $this->displayIDD = $tv['displayID'] + 1;
                $this->displayIDName = 'Display' . $this->displayIDD;
            } else {
                $this->displayIDD = 1;
                $this->displayIDName = 'Display' . $this->displayIDD;
            }
        }
    }








    public function addDisplay()
    {
        $location = Location::findOrFail($this->locationID);
        $name = $location['country']['iso2'] . '_' . $location['state']['iso2'] . '_' . date('Ymdi');
        $companyName  = GlobalSetting::first()['company_ID'];


        $limit = GlobalSetting::first()['plan']['displays'];

        $noOfDiaplay = count(Tv::all());

        if ($noOfDiaplay < $limit) {
            $tv = Tv::where('name', $name)->first();
            if (!$tv) {
                $tvNewID = Tv::create([
                    'name' => $name,
                    'location_id' => $this->locationID,
                    'zone_id' => $this->zone,
                    'displayID' => $this->displayIDD,
                    'template' => $this->template
                ]);

                CustomClassesLocation::createNewDisplay($companyName, $name);

                //morning
                Training::create(['tv_id' => $tvNewID->id, 'name' => 'Morning']);

                //afternoon
                Training::create(['tv_id' => $tvNewID->id, 'name' => 'afternoon']);

                //Evening
                Training::create(['tv_id' => $tvNewID->id, 'name' => 'Evening']);

                //create default media contents
                for ($i = 1; $i < 6; $i++) {
                    Media::create([
                        'tv_id' => $tvNewID->id,
                        'file' => '0' . $i,
                        'title' => 'title0' . $i,
                        'description' => 'description0' . $i,
                        'type' => 'video',
                        'position' => $i,
                        'extension' => 'mp4',
                        'content_type' => 'master'
                    ]);
                }

                for ($i = 1; $i < 6; $i++) {
                    Banner::create([
                        'tv_id' => $tvNewID->id,
                        'file' => '0' . $i,
                        'type' => 'image',
                        'extension' => 'png'
                    ]);
                }

                for ($i = 1; $i < 6; $i++) {
                    Logo::create([
                        'tv_id' => $tvNewID->id,
                        'image' => '0' . $i,
                        'extension' => 'png'
                    ]);
                }

                //announcment
                Announce::create([
                    'tv_id' => $tvNewID->id,
                    'text' => 'My announcement is what you need to know now, thanks.',
                    'start' => date('Y-m--d H:i:s'),
                    'end' => date('Y-m--d H:i:s'),
                ]);

                Activity::logChanges($name, 'Display', 'added');  //log activities

                $this->alert('success', 'Display added to ' . $location->name . ' Location successfully!', [
                    'position' =>  'center',
                    'timer' =>  4000,
                    'toast' =>  false,
                    'text' =>  '',
                    'showCancelButton' =>  false,
                    'showConfirmButton' =>  true,
                ]);
                $this->zone = null;
                $this->displayIDName = null;
            } else {
                $this->alert('error', 'Display already exist', [
                    'position' =>  'center',
                    'timer' =>  4000,
                    'toast' =>  false,
                    'text' =>  '',
                    'showCancelButton' =>  false,
                    'showConfirmButton' =>  true,
                ]);
            }
        } else {
            $this->alert('error', 'You have exceeded your display limit. To upgrade please contact Cloudapp support', [
                'position' =>  'center',
                'timer' =>  4000,
                'toast' =>  false,
                'text' =>  '',
                'showCancelButton' =>  false,
                'showConfirmButton' =>  true,
            ]);
        }
    }







    public function setupEdit($id)
    {
        $location = Location::find($id);
        $this->name = $location->name;
        $this->country = $location->country_id;
        $this->address = $location->address;
        $this->supervisor = $location->supervisor;
        $this->phone = $location->supervisor_phone;
        $this->email = $location->supervisor_email;
        $this->state = $location->state_id;
        $this->city = $location->city_id;

        $this->states =  Country::find($location->country_id)['states'];
        $this->cities =  State::find($location->state_id)['cities'];

        $this->locationID = $id;
    }





    public function editLocation()
    {
        $location = Location::find($this->locationID);
        $location->name = $this->name;
        $location->country_id = $this->country;
        $location->state_id = $this->state;
        $location->city_id = $this->city;
        $location->supervisor = $this->supervisor;
        $location->supervisor_phone = $this->phone;
        $location->supervisor_email = $this->email;
        $location->address = $this->address;
        $location->update();

        Activity::logChanges($this->name, 'Location', 'updated');  //log activities

        $this->alert('success', $location->name . ' Updated successfully!', [
            'position' =>  'center',
            'timer' =>  4000,
            'toast' =>  false,
            'text' =>  '',
            'showCancelButton' =>  false,
            'showConfirmButton' =>  true,
        ]);
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




    public function getDisplays($id)
    {
        $location = Location::findOrFail($id);
        $this->displays = $location['tvs'];
        $this->displayName  = $location->name;
        $this->locationID = $id;
    }




    public function deleteDisplay($id)
    {
        $display = Tv::findOrFail($id);
        Activity::logChanges($display->name, 'Display', 'deleted');  //log activities
        $display->delete();

        $this->alert('success', 'Display deleted successfully!', [
            'position' =>  'center',
            'timer' =>  4000,
            'toast' =>  false,
            'text' =>  '',
            'showCancelButton' =>  false,
            'showConfirmButton' =>  true,
        ]);

        $location = Location::findOrFail($this->locationID);
        $this->displays = $location['tvs'];
    }




    public function delete($id)
    {
        $location = Location::findOrFail($id);
        Activity::logChanges($location->name, 'Location', 'deleted');  //log activities
        $location->delete();

        $this->alert('success', 'Location deleted successfully!', [
            'position' =>  'center',
            'timer' =>  4000,
            'toast' =>  false,
            'text' =>  '',
            'showCancelButton' =>  false,
            'showConfirmButton' =>  true,
        ]);
    }



    public function switch($id)
    {
        $display = Tv::find($id);
        if ($display->is_active) {
            $status = false;
        } else {
            $status = true;
        }
        $display->is_active = $status;
        $display->update();

        Activity::logChanges($display->name, 'Display', 'switched', $status);  //log activities

        $this->alert('success', $display->name . ' has been switched successfully!', [
            'position' =>  'center',
            'timer' =>  4000,
            'toast' =>  false,
            'text' =>  '',
            'showCancelButton' =>  false,
            'showConfirmButton' =>  true,
        ]);
    }


    public function refreshLocationList()
    {
        $this->refresh = 'ok';
    }
}
