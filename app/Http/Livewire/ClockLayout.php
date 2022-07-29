<?php

namespace App\Http\Livewire;

use App\CustomClasses\Activity;
use App\CustomClasses\Permission;
use App\Models\Tv;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ClockLayout extends Component
{
    use LivewireAlert;
    
    public $tv_id, $layout;

    public function mount()
    {
        $this->tv_id = session()->get('tv')['id'];
        $this->layout = Tv::find($this->tv_id)['clockLayout'];
    }

    public function change()
    {
        if (Permission::check('can_change_time_and_date')) {
            $tv = Tv::find($this->tv_id);
            $tv->clockLayout = $this->layout;
            $tv->update();

            $this->alert('success', 'Changed to Layout ' . $this->layout, [
                'position' =>  'center',
                'timer' =>  3000,
                'toast' =>  false,
                'text' =>  '',
                'showCancelButton' =>  false,
                'showConfirmButton' =>  false,
            ]);

            Activity::logChanges('Clock Layout', 'Clock Feature', 'updated');  //log activities
        } else {
            $this->alert('info', 'No Permission', [
                'position' =>  'center',
                'timer' =>  10000,
                'toast' =>  false,
                'text' =>  'you don\'t have permission to perform this operation!',
                'showCancelButton' =>  false,
                'showConfirmButton' =>  true,
            ]);

            $this->tv_id = session()->get('tv')['id'];
            $this->layout = Tv::find($this->tv_id)['clockLayout'];
        }
    }



    public function render()
    {
        return view('livewire.clock-layout');
    }
}
