<?php

namespace App\Http\Controllers\Client;

use App\CustomClasses\Activity;
use App\CustomClasses\Path;
use App\CustomClasses\Permission;
use App\CustomClasses\Publish;
use App\CustomClasses\Variables;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\GlobalSetting;
use App\Models\Tv;
use Illuminate\Support\Facades\Auth;

class BrandingController extends Controller
{

    public function choose_template()
    {
        return view('Client.template');
    }



    public function branding()
    {
        $data['settings'] = GlobalSetting::first();
        if ($data['settings']['show_company_branding'] && Permission::check('visibility_branding')) {
            $tv_id = session()->get('tv')['id'];
            $data['tv'] = Tv::findOrFail($tv_id);
            return view('Client.branding', $data);
        } else {
            return abort(404);
        }
    }



    public function logo_store(Request $request)
    {
        $this->validate($request, [
            'file' => ['file', 'mimes:jpg,jpeg,png,gif'],
        ]);
        $type = $request->type;

        //store background image for menu
        if ($type == 'menuBg') {
            //image upload
            if ($request->hasFile('file')) {
                $image_file = $request->file('file');
                $ext = 'png';

                $file = 'menuBackground' . '.' . $ext;
                $image_file->move('images/', $file);
            } else {
                return back()->with('fail', 'Add a file to upload');
            }

            $settings = GlobalSetting::first();
            $settings->menuBackground = $file;
            $settings->update();

            Activity::logChanges($file, 'Menu Background Image', 'updated'); //log activities

            return back()->with('success', 'Uploaded successfully');
        }


        //store localUpdateLogo
        if ($type == 'localUpdateLogo') {
            //image upload
            if ($request->hasFile('file')) {
                $image_file = $request->file('file');
                $ext = 'png';

                $file = 'local' . '.' . $ext;
                $image_file->move(Variables::uploadPath('logo'), $file);
            } else {
                return back()->with('fail', 'Add a file to upload');
            }

            //root url
            $url = 'logo/' . $file;
            Publish::logChangedFiles($url, 'Company Branding');
            Activity::logChanges($file, 'Local Update Image', 'updated'); //log activities

            $tv_id = session()->get('tv')['id'];
            $tv = Tv::find($tv_id);
            $tv->localUpdateLogo = $file;
            $tv->update();

            return back()->with('success', 'Uploaded successfully');
        }
    }






    public function color_store(Request $request)
    {
        $setting = GlobalSetting::first();
        $setting->tv_background = $request->color;
        $setting->update();

        Activity::logChanges($request->color, 'Background color', 'updated'); //log activities

        return back()->with('success', 'Color chosen successfully');
    }
}
