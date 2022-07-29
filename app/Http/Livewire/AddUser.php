<?php

namespace App\Http\Livewire;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class AddUser extends Component
{
    use LivewireAlert;
    
    public $name, $email, $role, $password, $confirm, $number;


    public function submit(){
        $user = User::where('email', $this->email)->first();
        if($user){
            $this->alert('error', 'User exist', [
                'position' =>  'center',
                'timer' =>  3000,
                'toast' =>  false,
                'text' =>  'A user with this email already exist',
                'showCancelButton' =>  false,
                'showConfirmButton' =>  false,
            ]);
        }else{
            if ($this->password == $this->confirm) {
                if (strlen($this->password) >= 8) {
                    $password = Hash::make($this->password);
                    
                    User::create([
                        'name' => $this->name,
                        'email' => $this->email,
                        'role_id' => $this->role,
                        'password' => $password,
                        'phone' => $this->number
                    ]);

                    $this->name = null;
                    $this->email = null;
                    $this->password = null;
                    $this->confirm = null;
                    $this->role = null;
                    $this->number = null;

                    $this->alert('success', 'User created!', [
                        'position' =>  'center',
                        'timer' =>  4000,
                        'toast' =>  false,
                        'text' =>  'User has been created successfully',
                        'showCancelButton' =>  false,
                        'showConfirmButton' =>  false,
                    ]);

                    $this->emit('refreshUsers');
                } else {
                    $this->alert('error', 'Password error', [
                        'position' =>  'center',
                        'timer' =>  3000,
                        'toast' =>  false,
                        'text' =>  'Password must be 8 characters and above',
                        'showCancelButton' =>  false,
                        'showConfirmButton' =>  false,
                    ]);
                }
            } else {
                $this->alert('error', 'Password error', [
                        'position' =>  'center',
                        'timer' =>  3000,
                        'toast' =>  false,
                        'text' =>  'Password confirmation failed',
                        'showCancelButton' =>  false,
                        'showConfirmButton' =>  false,
                    ]);
            }
        }
    }


    public function render()
    {
        return view('livewire.add-user', [
            'roles' => Role::where('name', '!=', 'Superadmin')->get()
        ]);
    }
}
