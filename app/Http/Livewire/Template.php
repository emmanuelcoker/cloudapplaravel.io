<?php

namespace App\Http\Livewire;

use App\CustomClasses\Activity;
use App\CustomClasses\Permission;
use App\Models\Tv;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Template extends Component
{

    use LivewireAlert;
    public $template;
    public $tv_id;

    public function mount()
    {
        $this->tv_id = session()->get('tv')['id'];
        $tv = Tv::find($this->tv_id);
        if ($tv->template) {
            $this->template = $tv->template;
        } else {
            $this->template = 6;
        }
    }


    public function update()
    {
        $hasPermission = Permission::check('can_change_template');  //check
        if ($hasPermission) {
            $tv = Tv::find($this->tv_id);
            $tv->template = $this->template;
            $tv->update();

            Activity::logChanges('Template Page', 'Template', 'updated');  //log activities
            $this->alert('success', 'Updated successfully!', [
                'position' =>  'center',
                'timer' =>  4000,
                'toast' =>  false,
                'text' =>  '',
                'showCancelButton' =>  false,
                'showConfirmButton' =>  true,
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

            $this->tv_id = session()->get('tv')['id'];
            $tv = Tv::find($this->tv_id);
            if ($tv->template) {
                $this->template = $tv->template;
            } else {
                $this->template = 6;
            }
        }
    }

    public function render()
    {
        return view('livewire.template');
    }
}
