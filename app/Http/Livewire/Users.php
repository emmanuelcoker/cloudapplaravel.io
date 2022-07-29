<?php

namespace App\Http\Livewire;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Users extends Component
{
    use LivewireAlert;
    
    public $refresh;
    protected $listeners = ['refreshUsers'];
    public $name, $email, $role, $password, $confirm, $number, $user_id;

    public function render()
    {
        return view('livewire.users', [
            'users' => User::where('role_id', '!=', 2)->orderBy('id', 'desc')->get(),
            'roles' => Role::where('name', '!=', 'Superadmin')->get()
        ]);
    }


    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();

        $this->alert('success', 'User Deleted!', [
            'position' =>  'center',
            'timer' =>  4000,
            'toast' =>  false,
            'text' =>  'User has been deleted successfully',
            'showCancelButton' =>  false,
            'showConfirmButton' =>  false,
        ]);
    }


    public function edit($id)
    {
        $user = User::find($id);
        $this->name = $user->name;
        $this->email = $user->email;
        $this->number = $user->phone;
        $this->role = $user->role_id;
        $this->user_id = $user->id;
    }








    public function update()
    {
        $edit  = User::find($this->user_id);
        $user = User::where('email', $this->email)->first();
        if ($this->email != $edit->email && $user) {
            $this->alert('error', 'User exist', [
                'position' =>  'center',
                'timer' =>  3000,
                'toast' =>  false,
                'text' =>  'A user with this email already exist',
                'showCancelButton' =>  false,
                'showConfirmButton' =>  false,
            ]);
        } else {

            $edit->name = $this->name;
            $edit->email = $this->email;
            $edit->phone = $this->number;

            if ($this->password || $this->confirm) {
                if ($this->password == $this->confirm) {
                    if (strlen($this->password) >= 8) {
                        $password = Hash::make($this->password);
                        $edit->password = $password;
                    } else {
                        $this->alert('error', 'Password error', [
                            'position' =>  'center',
                            'timer' =>  3000,
                            'toast' =>  false,
                            'text' =>  'Password must be 8 characters and above',
                            'showCancelButton' =>  false,
                            'showConfirmButton' =>  false,
                        ]);
                        return false;
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
                    return false;
                }
            }

            $edit->update();

            $this->password = null;
            $this->confirm = null;

            $this->alert('success', 'User updated!', [
                'position' =>  'center',
                'timer' =>  4000,
                'toast' =>  false,
                'text' =>  'User has been updated successfully',
                'showCancelButton' =>  false,
                'showConfirmButton' =>  false,
            ]);

            $this->emit('refreshUsers');
        }
    }




    public function refreshUsers()
    {
        $this->refresh = 'ok';
    }
}
