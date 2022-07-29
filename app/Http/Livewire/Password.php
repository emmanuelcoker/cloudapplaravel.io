<?php

namespace App\Http\Livewire;

use App\CustomClasses\Activity;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Password extends Component
{
    use LivewireAlert;
    public $password, $confirm;

    public function render()
    {
        return view('livewire.password');
    }


    public function change(){
        $user = Auth::user();
        //to check if password is up to 8
        if (strlen($this->password) >= 8) {
            //to check if password1 and confirm password is the same
            if ($this->password == $this->confirm) {
                $password = Hash::make($this->password);

                $user->update([
                    'password' => $password,
                ]);

                $this->alert('success', 'Password changed successfully', [
                    'position' =>  'center',
                    'timer' =>  4000,
                    'toast' =>  false,
                    'text' =>  '',
                    'showCancelButton' =>  false,
                    'showConfirmButton' =>  true,
                ]);

                Activity::logChanges('Password', 'Profile', 'updated');  //log activities

                $this->password = null;
                $this->confirm = null;

                $this->dispatchBrowserEvent('closePassword'); 
            } else {
                $this->alert('error', 'Please confirm your the password', [
                    'position' =>  'center',
                    'timer' =>  4000,
                    'toast' =>  false,
                    'text' =>  '',
                    'showCancelButton' =>  false,
                    'showConfirmButton' =>  true,
                ]);
            }
            //end  if

        } else {
            $this->alert('error', 'Password must be greater than 8 characters', [
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
