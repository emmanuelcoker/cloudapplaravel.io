<?php

namespace App\Http\Controllers\Client;

use App\CustomClasses\Activity;
use App\CustomClasses\Permission;
use App\CustomClasses\Publish;
use App\exports\CsvExport;
use App\Http\Controllers\Controller;
use App\Models\GlobalSetting;
use App\Models\Tv;
use Illuminate\Http\Request;
use App\Models\Announce;

class IndexController extends Controller
{



    public function template_sample()
    {
        if (Permission::check('update_box_url')) {
            //global settings
            $data['settings'] = GlobalSetting::first();

            try {
                //this function is to run conversion to static
                Publish::toStatic();
            } catch (\Throwable $th) {
                throw $th;
                return back()->with('fail', 'Operation has an error, Please try again and if it persist. Please contact Cloud-app Support');
            }

            Activity::logChanges('Published to Static', 'Publish', 'published'); //log activities

            return back()->with('publish', 'Published Successfully');
        } else {
            return  back()->with('permission', 'You don\'t have permission to perform this operation!');
        }
    }


    public function publish_to_zip()
    {
        return 'here';
        if (Permission::check('update_box_url')) {
            //global settings
            $data['settings'] = GlobalSetting::first();
            if ($data['settings']['to_zip']) { //zip if client wants that lol
                Publish::toStatic();
                //this function is to push files to zip
                Publish::zip();

                Activity::logChanges('Published to Zip', 'Publishing', 'published'); //log activities

                return back()->with('zip', 'Published to Zip successfully');
            } else {
                return abort(404);
            }
        } else {
            return  back()->with('permission', 'You don\'t have permission to perform this operation!');
        }
    }



    public function publish_to_api()
    {
        if (Permission::check('update_box_url')) {
            //global settings
            $data['settings'] = GlobalSetting::first();
            if ($data['settings']['to_csv']) {
                if (session()->has('files')) {
                    return view('Client.changes_preview');
                } else {
                    return back()->with('onChanges', 'You do not have changes yet');
                }
            } else {
                return abort(404);
            }
        } else {
            return  back()->with('permission', 'You don\'t have permission to perform this operation!');
        }
    }


    public function publishToApi(Request $request)
    {
        return 'here';
        //global settings
        $data['settings'] = GlobalSetting::first();
        if ($data['settings']['to_csv']) {
            $update = $request->update;

            Publish::toStatic();
            Publish::apiCSV($update);
            Activity::logChanges('Published to Api', 'Publishing', 'published'); //log activities
            return redirect(route('home'))->with('publish', 'Published to Api successfully');
        } else {
            return abort(404);
        }
    }


    public function clearPreview()
    {
        session()->forget('files');
        Activity::logChanges('Cleared Changed files preview', 'Publishing', 'published'); //log activities
        return redirect(route('home'))->with('clear', 'All changed file log have been cleared');
    }



    public function changeTv($id)
    {
        $tv = Tv::findOrFail($id);
        session(['tv' => $tv]);
        Activity::logChanges('Changed Display', 'Display', 'published'); //log activities
        return back()->with('display', 'Display has changed successfully!');
    }
}
