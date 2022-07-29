<?php

namespace App\Http\Controllers\Client;

use App\CustomClasses\Permission;
use App\Http\Controllers\Controller;
use App\Models\GlobalSetting;
use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
    public function index()
    {
        if (Permission::check('visibility_location')) {
            //global settings
            $data['settings'] = GlobalSetting::first();
            $data['locations'] = Location::all();
            return view('Client.location', $data);
        } else {
            return abort(404);
        }
    }
}
