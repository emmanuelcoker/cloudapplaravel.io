<?php

namespace App\CustomClasses;

use App\Models\Activity as ModelsActivity;
use Illuminate\Support\Facades\Auth; 

class Activity
{

    /*
    NOTE:
    Action is either added, updated, switched, uploaded, scheduled,re-arranged, chatted, emailed, deleted and published
    */

    public static function logChanges($file, $section, $action, $switch = null)
    {
        //store to database
        ModelsActivity::create([
            'user_id' => Auth::user()->id,
            'file' => $file,
            'section' => $section,
            'action' => $action,
            'switch' => $switch,
        ]);


    }
}
