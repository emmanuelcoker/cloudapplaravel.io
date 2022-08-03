<?php

namespace App\Http\Controllers;

use App\Models\ContactPerson;
use App\Models\Country;
use App\Models\GlobalSetting;
use App\Models\Industry;
use App\Models\Location;
use App\Models\Path;
use App\Models\Plan;
use App\Models\Role;
use App\Models\Tv;
use App\Models\User;
use App\Models\Zone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\CustomClasses\Location as CustomClassesLocation;
use App\Models\Announce;
use App\Models\Banner;
use App\Models\Logo;
use App\Models\Media;
use App\Models\Training;

class SetupController extends Controller
{
    public function index()
    {
        $setting = GlobalSetting::first()['is_registered'] ?? null;
        if (!$setting) {
            $data['countries'] = Country::all();
            $data['paths'] = Path::all();
            $data['plans'] = Plan::all();
            $data['zones'] = Zone::all();
            $data['roles'] = Role::all();
            $data['industries'] = Industry::all();
            return view('setup.index', $data);
        } else {
            return abort(404);
        }
    }


    public function move_to_setup(Request $request)
    {
        session(['company' => $request->name, 'country' => $request->location]);
        $global_settings = GlobalSetting::first();
        if (!$global_settings) {
            GlobalSetting::create(['company_name' => $request->name, 'country' => $request->location]);
        }
        $demoLocation = Location::first();
        if (!$demoLocation) {
            Location::create(['name' => 'Demo', 'country_id' => $request->location, 'address' => 'Demo Location', 'supervisor' => 'Demo agent', 'supervisor_phone' => '0000', 'supervisor_email' => 'admin@demo.com']);
        }
        return redirect('/app-setup');
    }

}
