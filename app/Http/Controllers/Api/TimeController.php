<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\GlobalSetting;
use Illuminate\Http\Request;

class TimeController extends Controller
{
    public function index()
    {
        $time_settings = GlobalSetting::first();

        $currentTime = time();

        //The amount of hours that you want to add.
        $hoursToAdd = $time_settings->time_zone;

        //Convert the hours into seconds.
        $secondsToAdd = $hoursToAdd * (60 * 60);

        //Add the seconds onto the current Unix timestamp.
        $newTime = $currentTime + $secondsToAdd;
        $time = date("H", $newTime);
        $day = date("d");
        $hour = $time;
        $date = date("Y-m-d H:i:s");
        $new_date = date("Y-m-d H:i:s", strtotime('+0 hours', strtotime($date)));
        $json = array('full_date' => $new_date, 'hours' => $time - 0, 'minutes' => date("i", time()) - 0, 'seconds' => date("s", time()) - 0, 'date' => $day - 0, 'day' => date("l", time()), 'month' => date("F", time()), 'year' => date("Y", time()));
        // $json = array('key' => 0, 'txt' => 'Username has been taken');
        if ($json) {
            echo json_encode($json);
            exit(1);
        }
    }
   
   
   
    public function raw_time()
    {
        $currentTime = time();

        //Add the seconds onto the current Unix timestamp.
        $newTime = $currentTime;
        $time = date("H", $newTime);
        $day = date("d");
        $hour = $time;
        $date = date("Y-m-d H:i:s");
        $new_date = date("Y-m-d H:i:s", strtotime('+0 hours', strtotime($date)));
        $json = array('full_date' => $new_date, 'hours' => $time - 0, 'minutes' => date("i", time()) - 0, 'seconds' => date("s", time()) - 0, 'date' => $day - 0, 'day' => date("l", time()), 'month' => date("F", time()), 'year' => date("Y", time()));
        // $json = array('key' => 0, 'txt' => 'Username has been taken');
        if ($json) {
            echo json_encode($json);
            exit(1);
        }
    }




    public function present_time(){
        $time_settings = GlobalSetting::first();

        $currentTime = strtotime('now');

        //The amount of hours that you want to add.
        $hoursToAdd = $time_settings->time_zone;

        //Convert the hours into seconds.
        $secondsToAdd = $hoursToAdd * (60 * 60);
        $newTime = $currentTime + $secondsToAdd;
        return $newTime;
    }
}
