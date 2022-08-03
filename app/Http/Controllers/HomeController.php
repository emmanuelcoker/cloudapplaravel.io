<?php

namespace App\Http\Controllers;

use App\CustomClasses\Activity;
use App\CustomClasses\Permission;
use App\Models\Activity as ModelsActivity;
use App\Models\ContactPerson;
use App\Models\Faq;
use App\Models\GlobalSetting;
use App\Models\LoginLog;
use App\Models\Permission as ModalPermission;
use App\Models\Plan;
use App\Models\Role;
use App\Models\SupportTeam;
use App\Models\Tab;
use App\Models\Tutorial;
use App\Models\Tv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tv_id = session()->get('tv')['id'];
        $tv = Tv::findOrFail($tv_id);
        $data['setting'] = GlobalSetting::first();
        // $alloweredNoMediaFiles = $data['setting']['allowed_media'];
        $alloweredNoBannerFiles = $data['setting']['allowed_banner'];
        $alloweredNoLogos = $data['setting']['allowed_logo'];

        
        $data['logos'] = count($tv->logos->take($alloweredNoLogos));
        // $data['schedules'] = count($tv->medias->whereNotNull('start')->take($alloweredNoMediaFiles));
        $data['morning'] = count($tv->morningVideos($tv_id));
        $data['afternoon'] = count($tv->afternoonVideos($tv_id));
        $data['evening'] = count($tv->eveningVideos($tv_id));
        $data['rsss'] = $tv->rsses;
        $data['newss'] = $tv->newses;
        $data['tutorials'] = count(Tutorial::all());
        $data['tab'] = Tab::first();
        $data['faqs'] = count(Faq::all());

        //store data into local storage for graph
        $data['medias_videos'] = $tv->medias->where('type', 'video');
        $data['medias_images'] = $tv->medias->where('type', 'image');
        $data['banners'] = $tv->banners->take($alloweredNoBannerFiles);
        $data['json'] = json_encode(['videos' => count($data['medias_videos']), 'images' => count($data['medias_images']), 'banners' => count($data['banners'])]);
        
        $year = date('Y');
        for ($i=1; $i < 13; $i++) { 
            $data['activities'][] = count(ModelsActivity::whereYear('created_at', '=', $year)->whereMonth('created_at', '=', $i)->get());
        }
        for ($i=1; $i < 13; $i++) { 
            $data['logies'][] = count(LoginLog::whereYear('created_at', '=', $year)->whereMonth('created_at', '=', $i)->get());
        }
        $data['support'] = ContactPerson::first();
        return view('Client.home', $data);
    }


    public function plans()
    {
        if (Permission::check('visibility_activity_log')) {
            $data['setting'] = GlobalSetting::first();
            $data['plans'] = Plan::latest()->get();
            return view('Client.plans', $data);
        } else {
            return abort(404);
        }
    }


    // public function template_sample()
    // {
    //     $data['tv'] = Tv::first();
    //     $data['base_url'] = url('/'); //to specify the baseurl of the tv
    //     $data['app_url'] = url('/'); //to get the app url
    //     $data['tab'] = Tab::first();
    //     $data['custom_news'] = News::all();
    //     $data['rss_news'] = Rss::all();
    //     $data['banners'] = Banner::all();
    //     $data['medias'] = Media::orderBy('position', 'asc')->get();
    //     return view('Client.template.fx', $data);
    // }


    public function support()
    {
        if (Permission::check('visibility_activity_log')) {
            $data['support'] = SupportTeam::first();
            $data['clientSupport'] =  ContactPerson::first();
            return view('Client.support', $data);
        } else {
            return abort(404);
        }
    }


    public function support_store(Request $request)
    {
        $team = ContactPerson::first();
        $team->name = $request->name;
        $team->phone = $request->phone;
        $team->email = $request->email;

        if ($request->hasFile('file')) {
            $image_file = $request->file('file');
            $ext = strtolower($image_file->getClientOriginalExtension());

            $file = 'support' . '.' . $ext;
            $image_file->move('images/', $file);
            $team->image = $file;
        }
        Activity::logChanges('Contact Person', 'Support', 'updated'); //log activities
        $team->update();

        return back()->with('success', 'Contact Person has been updated successfully');
    }


    public function activities()
    {
        if (Permission::check('visibility_activity_log')) {
            $data['activities'] = ModelsActivity::orderBy('id', 'desc')->get();
            return view('Client.activities', $data);
        } else {
            return abort(404);
        }
    }

    public function permission()
    {
        $data['permissions'] = ModalPermission::all();
        $data['roles'] = Role::all();
        return view('superadmin.permission', $data);
    }

    public function permission_store(Request $request)
    {
        $permissions = ModalPermission::all();
        foreach ($permissions as $permission) {
            $updatePermission = ModalPermission::findOrFail($permission['id']);
            $key = $updatePermission['key'];
            if ($request->$key) {
                $roles = json_encode($request->$key);
            } else {
                $roles = null;
            }
            $updatePermission->role = $roles;
            $updatePermission->update();
        }
        return back()->with('success', 'All
         roles has been updated');
    }






    //dark mode
    public function darkmode(Request $request){
        if($request->status == 'true'){
            $status = 1;
        }else{
            $status = 0;
        }
        $user = Auth::user();
        $user->dark_mode = $status;
        $user->update();
    }
}
