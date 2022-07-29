<?php

namespace App\Http\Livewire;

use App\CustomClasses\Activity;
use App\Models\Chat as ModelsChat;
use App\Models\ContactPerson;
use App\Models\SupportTeam;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Chat extends Component
{

    public $sender, $receiver, $message;

    public function mount()
    {
        //get the receiver
        if (Auth::user()['role']['name'] == "Superadmin") {
            $this->receiver = SupportTeam::first();
        } else {
            $this->receiver = ContactPerson::first();
        }

        //get the sender
        if (Auth::user()['role']['name'] == "Superadmin") {
            $this->sender = ContactPerson::first();
        } else {
            $this->sender = SupportTeam::first();
        }
    }

    public function render()
    {
        return view('livewire.chat', [
            'messages' => ModelsChat::all(),
            'lastMessage' => ModelsChat::latest()->first(),
            'firstMessage' => ModelsChat::first(),
        ]);
    }


    public function send(){
        ModelsChat::create([
            'role_id' => Auth::user()['role']['id'],
            'message' => $this->message,
        ]);

        Activity::logChanges('Chat Page', 'Support', 'chatted'); //log activities
    }
}
