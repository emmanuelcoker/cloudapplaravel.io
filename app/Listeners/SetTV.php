<?php

namespace App\Listeners;

use App\Models\LoginLog;
use App\Models\Tv;
use Illuminate\Auth\Events\Login;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Auth;
class SetTV
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Login  $event
     * @return void
     */
    public function handle(Login $event)
    {
        //set up default tv/display when a user login
        $tv = Tv::first();
        session(['tv' => $tv]);

        //log client login activities
        LoginLog::create([
            'user_id' => Auth::user()->id,
            'role_id' => Auth::user()->role_id,
            'user_agent' => \Illuminate\Support\Facades\Request::header('User_Agent'),
            'ip_address' => \Illuminate\Support\Facades\Request::ip()
        ]);
    }
}
