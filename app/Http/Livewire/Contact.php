<?php

namespace App\Http\Livewire;

use App\CustomClasses\Activity;
use Livewire\Component;
use App\Mail\EmailMail;
use App\Models\GlobalSetting;
use Illuminate\Support\Facades\Mail;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Contact extends Component
{

    use LivewireAlert;
    public $subject, $email, $phone,  $message, $type = 'Email';


    public function send()
    {
        if ($this->subject &&  $this->message  && ($this->email || $this->phone) ) {

            if($this->type == 'Email'){
                $data = [
                    'email' => $this->email,
                    'message' => $this->message,
                    'type' => $this->type,
                    'subject' => $this->subject
                ];
            }else{
                $data = [
                    'phone' => $this->phone,
                    'message' => $this->message,
                    'type' => $this->type,
                    'subject' => $this->subject
                ];
            }

            try {
                Mail::to(env('APP_EMAIL'))->send(new EmailMail($data));
                $this->alert('success', 'Sent!', [
                    'position' =>  'center',
                    'timer' =>  4000,
                    'toast' =>  false,
                    'text' =>  '',
                    'showCancelButton' =>  false,
                    'showConfirmButton' =>  false,
                ]);

                Activity::logChanges('Support Mailing', 'Support', 'emailed');  //log activities

                $this->name = null;
                $this->email = null;
                $this->phone = null;
                $this->message = null;
            } catch (\Throwable $th) {
                $this->alert('error', 'We are Sorry, an error occurred while sending your message, please try again', [
                    'position' =>  'center',
                    'timer' =>  7000,
                    'toast' =>  false,
                    'text' =>  '',
                    'showCancelButton' =>  false,
                    'showConfirmButton' =>  true,
                ]);
            }

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



    public function render()
    {
        return view('livewire.contact');
    }
}
