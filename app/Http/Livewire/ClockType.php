<?php

namespace App\Http\Livewire;

use App\CustomClasses\Activity;
use App\CustomClasses\Permission;
use App\Models\Tv;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ClockType extends Component
{
    use LivewireAlert;
    
    public $type, $tv_id;

    public function mount()
    {
        $this->tv_id =  session()->get('tv')['id'];
        $this->type =  Tv::findOrFail($this->tv_id)['show_time'];
    }


    public function timeType()
    {
        if (Permission::check('can_change_time_and_date')) {
            $tv = Tv::findOrFail($this->tv_id);
            $tv->show_time = $this->type;
            $tv->update();
            if ($this->type == 0) {
                $type = 'Date Only';
            }
            if ($this->type == 1) {
                $type = 'Date & Time';
            }
            if ($this->type == 2) {
                $type = 'Time Only';
            }

            Activity::logChanges($type, 'Clock Feature', 'updated');  //log activities

            $this->alert('success', 'Changed to ' . $type, [
                'position' =>  'center',
                'timer' =>  3000,
                'toast' =>  false,
                'text' =>  '',
                'showCancelButton' =>  false,
                'showConfirmButton' =>  false,
            ]);
        } else {
            $this->alert('info', 'No Permission', [
                'position' =>  'center',
                'timer' =>  10000,
                'toast' =>  false,
                'text' =>  'you don\'t have permission to perform this operation!',
                'showCancelButton' =>  false,
                'showConfirmButton' =>  true,
            ]);

            $this->tv_id  = session()->get('tv')['id'];
            $this->type =  Tv::findOrFail($this->tv_id)['show_time'];
        }
    }


    public function render()
    {
        return view('livewire.clock-type');
    }
}
