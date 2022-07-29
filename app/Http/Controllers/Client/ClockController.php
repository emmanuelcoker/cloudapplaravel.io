<?php

namespace App\Http\Controllers\Client;

use App\CustomClasses\Activity;
use App\CustomClasses\Permission;
use App\CustomClasses\Publish;
use App\CustomClasses\Variables;
use App\Http\Controllers\Controller;
use App\Models\GlobalSetting;
use App\Models\Tv;
use Illuminate\Http\Request;

class ClockController extends Controller
{
    public function index()
    {
        if (Permission::check('visibility_clock')) {
            $tv_id = session()->get('tv')['id'];
            $data['tv'] = Tv::findOrFail($tv_id);
            return view('Client.clock', $data);
        } else {
            return abort(404);
        }
    }


    public function store_logo(Request $request)
    {

        $tv_id = session()->get('tv')['id'];

        //image upload
        if ($request->hasFile('file')) {
            $image_file = $request->file('file');
            $ext = 'png';

            $file = 'time' . '.' . $ext;
            $image_file->move(Variables::uploadPath('time'), $file);
        } else {
            return back()->with('fail', 'Add a file to upload');
        }

        $tv = Tv::find($tv_id);
        $tv->clockImage = $file;
        $tv->update();

        //root url
        $url = 'time/' . $file;
        Publish::logChangedFiles($url, 'Clock Feature');
        Activity::logChanges($file, 'Clock Background Image', 'updated'); //log activities

        return back()->with('success', 'Uploaded successfully');
    }



    public function logo_switch(Request $request)
    {
        $type = $request->id;
        if ($request->status == 'true') {
            $status = 1;
        } else {
            $status = 0;
        }
        $id = session()->get('tv')['id'];
        $tv = Tv::findOrFail($id);
        if ($type == 'show_date_image') {
            $tv->show_date_image = $status;
            $tv->update();

            Activity::logChanges('Clock Logo Switch', 'Clock Background Image', 'switched', $status); //log activities

            return 'Clock Background ';
        }
    }


    public function store_color(Request $request)
    {
        $tv_id = session()->get('tv')['id'];
        $tv = Tv::find($tv_id);
        $tv->clock_background_color = $request->color;
        $tv->update();

        Activity::logChanges($request->color, 'Clock Background Color', 'updated'); //log activities

        return back()->with('success', 'Background Color updated successfully');
    }
}
