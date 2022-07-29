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
        $setting = GlobalSetting::first()['is_registered'];
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
        return redirect('/app-setup');
    }

    public function index2(Request $request)
    {


        $setting = GlobalSetting::first();
        $setting->plan_id = $request->plan_id;
        $setting->path_id = $request->path_id;

        //company IMAGE
        if ($request->hasFile('logo')) {
            $image_file = $request->file('logo');
            // $ext = strtolower($image_file->getClientOriginalExtension());
            $file = 'logo' . '.png';
            $image_file->move('images', $file);
            $setting->company_logo = $file;
        }


        $ID = strtoupper(substr($request->company_name, 0, 3));
        $setting->company_ID = $ID;
        $setting->company_name = $request->company_name;
        $setting->company_address = $request->company_address;
        // $setting->company_country = $request->company_country;
        $setting->industry = $request->company_industry;

        if ($request->hasFile('contact_person_image')) {
            $image_file_person = $request->file('contact_person_image');
            $contact_person_image = 'support' . '.png';
            $image_file_person->move('images/', $contact_person_image);
        }

        ContactPerson::create([
            'name' => $request->contact_person_name,
            'email' => $request->contact_person_email,
            'phone' => $request->contact_person_phone,
            'image' => $contact_person_image ?? null
        ]);


        //users
        if ($request->user1_name && $request->user1_email && $request->user1_password && $request->user1_role) {
            User::create([
                'name' => $request->user1_name,
                'email' => $request->user1_email,
                'country_id' => $request->company_country,
                'password' => Hash::make($request->user1_password),
                'role_id' => $request->user1_role
            ]);
        }

        if ($request->user2_name && $request->user2_email && $request->user2_password && $request->user2_role) {
            User::create([
                'name' => $request->user2_name,
                'email' => $request->user2_email,
                'country_id' => $request->company_country,
                'password' => Hash::make($request->user2_password),
                'role_id' => $request->user2_role
            ]);
        }


        //template 
        $setting->template = $request->template;
        $setting->update();

        $location = Location::first();


        $name = 'DE_MO_2021000';
        $tvNewID = Tv::create([
            'name' => $name,
            'location_id' => $location->id,
            'zone_id' => Zone::first()['id'],
            'displayID' => 1
        ]);

        CustomClassesLocation::createNewDisplay($ID, $name);

        //morning
        Training::create(['tv_id' => $tvNewID->id, 'name' => 'Morning']);

        //afternoon
        Training::create(['tv_id' => $tvNewID->id, 'name' => 'afternoon']);

        //Evening
        Training::create(['tv_id' => $tvNewID->id, 'name' => 'Evening']);

        //create default media contents
        for ($i = 1; $i < 6; $i++) {
            Media::create([
                'tv_id' => $tvNewID->id,
                'file' => '0' . $i,
                'title' => 'title0' . $i,
                'description' => 'description0' . $i,
                'type' => 'video',
                // 'position' => $file_position,
                'extension' => 'mp4'
            ]);
        }

        for ($i = 1; $i < 4; $i++) {
            Banner::create([
                'tv_id' => $tvNewID->id,
                'file' => '0' . $i,
                'type' => 'image',
                'extension' => 'png'
            ]);
        }

        for ($i = 1; $i < 6; $i++) {
            Logo::create([
                'tv_id' => $tvNewID->id,
                'image' => '0' . $i,
                'extension' => 'png'
            ]);
        }

        //announcment
        Announce::create([
            'tv_id' => $tvNewID->id,
            'video1' => 'ann01.mp4',
            'video2' => 'ann02.mp4',
            'start' => date('Y-m--d H:i:s'),
            'end' => date('Y-m--d H:i:s'),
        ]);

        User::create([
            'name' => $request->admin_name,
            'email' => $request->email,
            'country_id' => $request->company_country,
            'password' => Hash::make($request->password),
            'role_id' => 1
        ]);

        return 'ok';
    }
}
