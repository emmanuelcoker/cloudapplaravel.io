<?php

namespace App\Http\Controllers;

use App\CustomClasses\Path;
use App\Models\ContactPerson;
use App\Models\Country;
use App\Models\Faq;
use App\Models\Feature;
use App\Models\FeaturePlan;
use App\Models\GlobalSetting;
use App\Models\Industry;
use App\Models\LoginLog;
use App\Models\Plan;
use App\Models\PlanFeature;
use App\Models\Section;
use App\Models\Settings;
use App\Models\SupportTeam;
use App\Models\Tab;
use App\Models\Training;
use App\Models\Tutorial;
use App\Models\Zone;
use Illuminate\Http\Request;

class GlobalController extends Controller
{
    public function index()
    {
        $data['settings'] = GlobalSetting::first();
        $data['tabs'] = Tab::first();
        $data['countries'] = Country::get();
        $data['trainings'] = Training::get();
        $data['industries'] = Industry::get();
        $data['zones'] = Zone::get();
        $data['plans'] = Plan::get();
        $data['contact'] = SupportTeam::first();
        return view('superadmin.global_settings', $data);
    }


    public function store(Request $request)
    {
        $settings = GlobalSetting::first();

        //IMAGE
        if ($request->hasFile('file')) {
            $image_file = $request->file('file');
            // $ext = strtolower($image_file->getClientOriginalExtension());
            $file = 'logo' . '.png';
            $image_file->move('images', $file);
            $settings->company_logo = $file;
        }

        $settings->country = $request->country;
        $settings->time_zone = $request->time_zone;
        $settings->company_name = $request->company_name;
        $settings->plan_id = $request->company_plan;
        $settings->expiry_date = $request->expiry_date;
        $settings->time_type = $request->time_type;
        $settings->update();

        $tabs = Tab::first();
        $tabs->news_title = $request->news_title;
        $tabs->announcement = $request->announcement;
        $tabs->training = $request->training;
        $tabs->update();


        //add or edit contact person
        $contactPerson = SupportTeam::first();
        //image
        if ($request->hasFile('file2')) {
            $contact_image = $request->file('file2');
            $extension = strtolower($contact_image->getClientOriginalExtension());
            $profileImage = 'ContactProfile' . '.' . $extension;
            $contact_image->move('images',  $profileImage);
        }
        if ($contactPerson) {
            $contactPerson->name = $request->contact_name;
            $contactPerson->phone =  $request->contact_phone;
            $contactPerson->email =  $request->contact_email;
            if ($request->hasFile('file2')) {
                $contactPerson->image =  $profileImage;
            }
            $contactPerson->update();
        } else {
            SupportTeam::create([
                'name' => $request->contact_name,
                'phone' => $request->contact_phone,
                'email' => $request->contact_email,
                'image' => $profileImage,
            ]);
        }

        return back()->with('success', 'Updated successfully');
    }









    //for various training sections control
    public function trainingBtn(Request $request)
    {
        $id = $request->id;
        if ($request->status == 'true') {
            $status = 1;
        } else {
            $status = 0;
        }
        $train = Training::find($id);
        $train->is_active = $status;
        $train->update();

        return true;
    }



    public function zoneSwitch(Request $request)
    {
        $id = $request->id;

        if ($request->status == 'false') {
            $status = false;
        }
        if ($request->status == 'true') {
            $status = true;
        }

        $zone = Zone::findOrFail($id);
        $zone->is_active = $status;
        $zone->update();
    }






    public function pageVisibilityControl(Request $request)
    {
        $id = $request->id;
        if ($request->status == 'true') {
            $status = 1;
        } else {
            $status = 0;
        }

        $setting = GlobalSetting::first();

        if ($id == 'show_logo') {
            $setting->show_logo = $status;
            $setting->update();
            return 'Logo';
        }


        if ($id == 'show_template') {
            $setting->show_template = $status;
            $setting->update();
            return 'Template';
        }

        if ($id == 'show_clock') {
            $setting->show_clock = $status;
            $setting->update();
            return 'Clock';
        }

        if ($id == 'show_banner') {
            $setting->show_banner = $status;
            $setting->update();
            return 'Banner';
        }

        if ($id == 'show_rate') {
            $setting->show_rate = $status;
            $setting->update();
            return 'Rates';
        }

        if ($id == 'show_news') {
            $setting->show_news = $status;
            $setting->update();
            return 'News';
        }

        if ($id == 'allow_scheduling') {
            $setting->allow_scheduling = $status;
            $setting->update();
            return 'Scheduling';
        }

        if ($id == 'allow_custom_news') {
            $setting->allow_custom_news = $status;
            $setting->update();
            return 'Custom News';
        }

        if ($id == 'allow_rss_news') {
            $setting->allow_rss_news = $status;
            $setting->update();
            return 'Rss';
        }


        if ($id == 'training') {
            $setting->show_training = $status;
            $setting->update();
            return 'Daily Schedule';
        }

        if ($id == 'announce') {
            $setting->show_announcement = $status;
            $setting->update();
            return 'Announcement';
        }

        if ($id == 'freeze_time') {
            $setting->freeze_time = $status;
            $setting->update();
            return 'Freeze time';
        }

        if ($id == 'to_zip') {
            $setting->to_zip = $status;
            $setting->update();
            return 'To Zip';
        }

        if ($id == 'to_csv') {
            $setting->to_csv = $status;
            $setting->update();
            return 'To CSV';
        }

        if ($id == 'add_display') {
            $setting->add_display = $status;
            $setting->update();
            return 'Add display';
        }

        if ($id == 'add_location') {
            $setting->add_location = $status;
            $setting->update();
            return 'Add location';
        }
        
        if ($id == 'morning') {
            $setting->morning = $status;
            $setting->update();
            return 'Morning Training';
        }
       
        if ($id == 'afternoon') {
            $setting->afternoon = $status;
            $setting->update();
            return 'Afternoon Training';
        }
        
        if ($id == 'evening') {
            $setting->evening = $status;
            $setting->update();
            return 'Evening Training';
        }
        
        if ($id == 'show_company_branding') {
            $setting->show_company_branding = $status;
            $setting->update();
            return 'Company branding';
        }



        return false;
    }





    //faq management 
    public function faq()
    {
        $data['sections'] = Section::all();
        return view('superadmin.faq', $data);
    }



    public function store_faq(Request $request)
    {
        Faq::create(['section_id' => $request->section_id, 'question' => $request->question, 'answer' => $request->answer]);
        return back()->with('success', 'Faq added');
    }


    public function update_faq(Request $request)
    {
        $id = $request->id;
        $faq = Faq::findOrFail($id);
        $faq->section_id = $request->section_id;
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->update();
        return back()->with('success', 'Faq updated');
    }




    //tutorial management 
    public function tutorial()
    {
        $data['tutorials'] = Tutorial::all();
        $data['sections'] = Section::all();
        return view('superadmin.tutorial', $data);
    }


    public function store_tutorial(Request $request)
    {
        $this->validate($request, [
            'file' => ['file', 'mimes:mp4,pdf'],
        ]);

        $title = $request->title;
        if ($request->hasFile('file')) {
            $image_file = $request->file('file');
            $ext = strtolower($image_file->getClientOriginalExtension());

            $file = $title . '_' . time() . '.' . $ext;
            $image_file->move('tutorial', $file);
        }

        Tutorial::create([
            'title' => $title,
            'section_id' => $request->section_id,
            'video' => $file,
            'type' => $ext
        ]);

        return back()->with('success', 'Tutorial added successfully');
    }


    public function update_tutorial(Request $request)
    {
        $this->validate($request, [
            'file' => ['file', 'mimes:mp4,pdf'],
        ]);
        $id = $request->id;
        $tutorial = Tutorial::findOrFail($id);

        $title = $request->title;
        if ($request->hasFile('file')) {
            $image_file = $request->file('file');
            $ext = strtolower($image_file->getClientOriginalExtension());

            $file = $title . '_' . time() . '.' . $ext;
            $image_file->move('tutorial', $file);
            $tutorial->video = $file;
            $tutorial->type = $ext;
        }

        $tutorial->title = $title;
        $tutorial->section_id = $request->section_id;
        $tutorial->update();

        return back()->with('success', 'Tutorial Updated successfully');
    }



    public function delete_tutorial($id)
    {
        $tutorial = Tutorial::findOrFail($id);
        unlink('tutorial/' . $tutorial->video);
        $tutorial->delete();
        return back()->with('success', 'Tutorial deleted successfully');
    }



    public function plans()
    {
        $data['setting'] = GlobalSetting::first();
        $data['plans'] = Plan::latest()->get();
        $data['features'] = Feature::latest()->get();
        return view('superadmin.plans', $data);
    }


    ///plans 
    public function plan_store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'unique:plans'],
            'file' => ['required', 'image'],
            'price' => ['required'],
        ]);

        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $extension = strtolower($image->getClientOriginalExtension());
            $imageName = 'Plan_' . $request->name . '.' . $extension;
            $image->move('images',  $imageName);
        }


         Plan::create([
            'name' => $request->name,
            'price' => $request->price,
            'image' => $imageName,
            'banners' => $request->banners,
            'logos' => $request->logos,
            'media' => $request->media,
            'schedule_video' => $request->media_schedule,
            'locations' => $request->locations,
            'displays' => $request->displays,
        ]);

        // $features = $request->features;
        // foreach ($features as $feature) {
        //     FeaturePlan::create([
        //         'plan_id' => $plan->id,
        //         'feature_id' => $feature
        //     ]);
        // }

        return back()->with('success', 'Plan added successfully');
    }



    public function plan_update(Request $request)
    {
        $this->validate($request, [
            'name' => ['required'],
            'file' => ['image'],
            'price' => ['required', 'integer'],
        ]);

        $id = $request->id;
        $plan = Plan::findOrFail($id);

        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $extension = strtolower($image->getClientOriginalExtension());
            $imageName = 'Plan_' . $request->name . '.' . $extension;
            $image->move('images',  $imageName);
            $plan->image = $imageName;
        }

        if($request->schedule == 'on'){
            $schedule = true;
        }else{
            $schedule = false;
        }

        $plan->name = $request->name;
        $plan->price = $request->price;
        $plan->banners = $request->banners;
        $plan->logos = $request->logos;
        $plan->media = $request->media;
        $plan->daily_scheduling = $schedule;
        $plan->update();

        //delete features before creating another records
        // $plan->features()->detach();
        // $features = $request->features;
        // foreach ($features as $feature) {
        //     FeaturePlan::create([
        //         'plan_id' => $plan->id,
        //         'feature_id' => $feature
        //     ]);
        // }

        return back()->with('success', 'Plan updated successfully');
    }


    public function plan_delete($id)
    {
        $plan = Plan::findOrFail($id);
        unlink('images/' . $plan->image);
        // $plan->delete();
        return back()->with('success', 'Plan deleted successfully');
    }


    public function login_log(){
        $data['logs'] = LoginLog::latest()->paginate(30);
        return view('superadmin.login_logs', $data);
    }
}
