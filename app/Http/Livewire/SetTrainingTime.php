<?php

namespace App\Http\Livewire;

use App\CustomClasses\Activity;
use App\CustomClasses\Publish;
use App\Models\Tab;
use App\Models\GlobalSetting;
use App\Models\Training;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class SetTrainingTime extends Component
{

    use LivewireAlert;
    
    public $IID, $item;
    public $mon, $tue, $wed, $thurs, $fri, $sat, $sun, $start, $end;

    private static function getStatus($value)
    {
        if ($value == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function mount($id)
    {
        $this->IID = $id;
        $item = Training::find($id);
        $this->item = $item;
        $this->mon = self::getStatus($item->mon);
        $this->tue = self::getStatus($item->tue);
        $this->wed = self::getStatus($item->wed);
        $this->thurs = self::getStatus($item->thurs);
        $this->fri = self::getStatus($item->fri);
        $this->sat = self::getStatus($item->sat);
        $this->sun = self::getStatus($item->sun);
        $this->start = $item->start;
        $this->end = $item->end;
    }

    public function submit()
    {
        $tabName = Tab::first()['training'];
        if ($this->item['name'] == "Morning" && (date('H', strtotime($this->start)) >= 12 || date('H', strtotime($this->end)) >= 12)) {
            $this->alert('error', 'Your Schedule must be within the morning hours (00:00 - 11:59)', [
                'position' =>  'center',
                'timer' =>  4000,
                'toast' =>  false,
                'text' =>  '',
                'showCancelButton' =>  false,
                'showConfirmButton' =>  true,
            ]);
        } elseif ($this->item['name'] == "Afternoon" && (date('H', strtotime($this->start)) < 12 || date('H', strtotime($this->start)) > 17) ) {
            $this->alert('error', 'Your Schedule must be within the afternoon hours (12:00 - 16:59)', [
                'position' =>  'center',
                'timer' =>  4000,
                'toast' =>  false,
                'text' =>  '',
                'showCancelButton' =>  false,
                'showConfirmButton' =>  true,
            ]);
        } elseif ($this->item['name'] == "Afternoon" && (date('H', strtotime($this->end)) < 12 || date('H', strtotime($this->end)) > 17)) {
            $this->alert('error', 'Your Schedule must be within the afternoon hours (12:00 - 16:59)', [
                'position' =>  'center',
                'timer' =>  4000,
                'toast' =>  false,
                'text' =>  '',
                'showCancelButton' =>  false,
                'showConfirmButton' =>  true,
            ]);
        } 
        elseif ($this->item['name'] == "Evening" && (date('H', strtotime($this->start)) < 17 || date('H', strtotime($this->end)) < 17)) {
            $this->alert('error', 'Your Schedule must be within the evening hours (17:00 - 23:59)', [
                'position' =>  'center',
                'timer' =>  4000,
                'toast' =>  false,
                'text' =>  '',
                'showCancelButton' =>  false,
                'showConfirmButton' =>  true,
            ]);
        } else {
            if ($this->end > $this->start) {
                $item = Training::find($this->IID);
                $item->mon = $this->mon;
                $item->tue = $this->tue;
                $item->wed = $this->wed;
                $item->thurs = $this->thurs;
                $item->fri = $this->fri;
                $item->sat = $this->sat;
                $item->sun = $this->sun;
                $item->start = $this->start;
                $item->end = $this->end;
                $item->update();

                //publish changes 
                Publish::training();
                $url = 'morning.html';
                Publish::logChangedFiles($url, $tabName);
                $url = 'afternoon.html';
                Publish::logChangedFiles($url, $tabName);
                $url = 'evening.html';
                Publish::logChangedFiles($url, $tabName);
                // $url = 'all_schedule.html';
                // Publish::logChangedFiles($url, $tabName);

                Activity::logChanges($item->name.' '.$tabName.' Time', $tabName, 'updated');  //log activities

                $this->alert('success', 'Training Successfully set!', [
                    'position' =>  'center',
                    'timer' =>  4000,
                    'toast' =>  false,
                    'text' =>  '',
                    'showCancelButton' =>  false,
                    'showConfirmButton' =>  true,
                ]);
            } else {
                $this->alert('error', 'End time must be greater than start time!', [
                    'position' =>  'center',
                    'timer' =>  4000,
                    'toast' =>  false,
                    'text' =>  '',
                    'showCancelButton' =>  false,
                    'showConfirmButton' =>  true,
                ]);
            }
        }
    }



    public function render()
    {
        return view('livewire.set-training-time', [
            'settings' => GlobalSetting::first(),
        ]);
    }
}
