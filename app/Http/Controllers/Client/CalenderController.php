<?php

namespace App\Http\Controllers\Client;

use App\CustomClasses\Calender;
use App\CustomClasses\Permission;
use App\Http\Controllers\Controller;
use App\Models\Tab;

class CalenderController extends Controller
{
    public function index()
    {
        if (Permission::check('visibility_calendar')) {
            Calender::events(); //publish events to json for calender
            $data['tab'] = Tab::first();
            return view('Client.calender', $data);
        } else {
            return abort(404);
        }
    }
}
