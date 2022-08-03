<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\ContactPerson;
use App\Models\GlobalSetting;
use App\Models\Location;
use App\Models\Tv;
use App\Models\Zone;
use App\CustomClasses\Location as CustomClassesLocation;
use App\Models\Announce;
use App\Models\Banner;
use App\Models\Country;
use App\Models\Logo;
use App\Models\Media;
use App\Models\Training;
use App\Models\TrainingVideo;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create()
    {
        $request = request();

        $setting = GlobalSetting::first();
        $setting->plan_id = $request->plan_id;
        $setting->path_id = $request->path_id;

        //company IMAGE
        if ($request->hasFile('logo')) {
            $image_file = $request->file('logo');
            $file = 'logo' . '.png';
            $image_file->move('images', $file);
            $setting->company_logo = $file;
        }


        $ID_D = strtoupper(substr($request->company_name, 0, 3));
        $setting->company_ID = $ID_D;
        $setting->company_name = $request->company_name;
        $setting->company_address = $request->company_address;

        //get country is_object
        $country = Country::find($request->company_country);

        $setting->company_country = $request->company_country;
        $setting->country = $country->iso2;
        $setting->industry_id = $request->company_industry;

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
                'clientID' => self::generateClientID(),
                'country_id' => $request->company_country,
                'password' => Hash::make($request->user1_password),
                'role_id' => $request->user1_role
            ]);
        }

        if ($request->user2_name && $request->user2_email && $request->user2_password && $request->user2_role) {
            User::create([
                'name' => $request->user2_name,
                'email' => $request->user2_email,
                'clientID' => self::generateClientID(),
                'country_id' => $request->company_country,
                'password' => Hash::make($request->user2_password),
                'role_id' => $request->user2_role
            ]);
        }


        $location = Location::first();


        $name = 'DE_MO_2021000';
        $tvNewID = Tv::create([
            'name' => $name,
            'location_id' => $location->id,
            'zone_id' => Zone::first()['id'],
            'displayID' => 1,
            'template' => $request->template
        ]);

        session(['tv' => $tvNewID]);

        CustomClassesLocation::createNewDisplay($ID_D, $name);

        //morning
        Training::create(['tv_id' => $tvNewID->id, 'name' => 'Morning']);

        //afternoon
        Training::create(['tv_id' => $tvNewID->id, 'name' => 'afternoon']);

        //Evening
        Training::create(['tv_id' => $tvNewID->id, 'name' => 'Evening']);

        //create default media contents
        for ($i = 1; $i < 6; $i++) {
            Media::create(
                [
                    'tv_id' => $tvNewID->id,
                    'file' => '0' . $i,
                    'title' => 'title0' . $i,
                    'description' => 'description0' . $i,
                    'type' => 'video',
                    'position' => $i,
                    'content_type' => 'master',
                    'extension' => 'mp4'
                ]
            );
        }

        for ($i = 1; $i < 6; $i++) {
            Banner::create([
                'tv_id' => $tvNewID->id,
                'file' => '0' . $i,
                'type' => 'image',
                'extension' => 'png',
                'position' => $i,
            ]);
        }

        for ($i = 1; $i < 6; $i++) {
            $file_Index = '0' . $i;
            TrainingVideo::create([
                'tv_id' => $tvNewID->id,
                'title' => 'Training ' . $file_Index,
                'video' => $file_Index,
                'm_position' => $i,
                'a_position' => $i,
                'e_position' => $i,
            ]);
        }

        for ($i = 1; $i < 6; $i++) {
            Logo::create([
                'tv_id' => $tvNewID->id,
                'image' => '0' . $i,
                'extension' => 'png',
                'position' => $i,
            ]);
        }

        //announcment
        Announce::create([
            'tv_id' => $tvNewID->id,
            'video1' => 'ann01.mp4',
            'video2' => 'ann02.mp4',
        ]);

        //update global settings
        $setting->is_registered = true;
        $setting->update();

        return User::create([
            'name' => $request->admin_name,
            'email' => $request->email,
            'clientID' => self::generateClientID(),
            'country_id' => $request->company_country,
            'password' => Hash::make($request->password),
            'role_id' => 2
        ]);
    }



    private static function generateClientID()
    {
        //generate customerID
        $customerID = 'ID' . rand(200000, 9999);
        $user_id = User::where('clientID', $customerID)->first();
        if ($user_id) {
            $customerID2 = 'ID' . rand(500000, 9999);
            $user_id2 = User::where('clientID', $customerID2)->first();
            if ($user_id2) {
                $ID = 'ID' . rand(800000, 9999);
            } else {
                $ID = $customerID2;
            }
        } else {
            $ID = $customerID;
        }
        return $ID;
    }
}
