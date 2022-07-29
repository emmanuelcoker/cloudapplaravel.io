<?php

namespace App\Http\Livewire;

use App\Models\Country;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;


class EditProfile extends Component
{
    public $name, $email, $country_id;
    public $user;

    public function mount(){
        $user = Auth::user();
        $this->user = $user;
    }

    public function update(){
dd($this->name);
    }


    public function render()
    {
        return view('livewire.edit-profile', [
            'countries' => Country::all(),
            'user' => 'promise'
        ]);
    }
}
