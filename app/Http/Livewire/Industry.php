<?php

namespace App\Http\Livewire;

use App\Models\GlobalSetting;
use App\Models\Industry as ModelsIndustry;
use App\Models\Zone;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Industry extends Component
{
    use LivewireAlert;
    
    public $industryData, $industryID, $name, $is_active;

    public function mount($id)
    {
        $this->industryData = ModelsIndustry::find($id);
        $this->industryID = $id;
    }

    public function submit()
    {
        $setting = GlobalSetting::first();
        $setting->industry_id = $this->industryID;
        $setting->update();

        //update industry collection
        $this->industryData = ModelsIndustry::find($this->industryID);

        $this->alert('success', 'Industry Updated!', [
            'position' =>  'center',
            'timer' =>  4000,
            'toast' =>  false,
            'text' =>  '',
            'showCancelButton' =>  false,
            'showConfirmButton' =>  true,
        ]);
    }


    // public  function switch(){
    //     dd($this->is_active);
    // }


    public function addZone()
    {
        if ($this->name) {
            Zone::create([
                'industry_id' => $this->industryID,
                'name' => $this->name,
            ]);

            $this->name = null;
            //update industry collection
            $this->industryData = ModelsIndustry::find($this->industryID);

            $this->alert('success', 'Zone Added!', [
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

    public function render()
    {
        return view('livewire.industry', [
            'industries' => ModelsIndustry::get()
        ]);
    }
}
