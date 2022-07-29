<?php

namespace App\Http\Livewire;

use App\Models\Role;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Roles extends Component
{

    use LivewireAlert;
    
    public $name;

    public function addRole()
    {
        if ($this->name) {
            Role::create([
                'name' => $this->name,
            ]);

            $this->name = null;

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

    public function deleteRole($id){
        $role = Role::find($id);
        $role->delete();
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
        return view('livewire.roles', [
            'roles' => Role::all()
        ]);
    }
}
