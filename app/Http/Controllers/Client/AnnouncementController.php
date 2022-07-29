<?php

namespace App\Http\Controllers\Client;

use App\CustomClasses\Activity;
use App\CustomClasses\Path;
use App\CustomClasses\Permission;
use App\CustomClasses\Publish;
use App\CustomClasses\Variables;
use App\Http\Controllers\Controller;
use App\Models\Announce;
use App\Models\GlobalSetting;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{

    public function index()
    {
        $data['settings'] = GlobalSetting::first();
        if ($data['settings']['show_announcement'] && Permission::check('visibility_annouce')) {
            $tv_id = session()->get('tv')['id'];
            $data['announce'] = Announce::where('tv_id', $tv_id)->first();
            return view('Client.announcement', $data);
        } else {
            return abort(404);
        }
    }





    public function store(Request $request)
    {
        $tv_id = session()->get('tv')['id'];
        $announce = Announce::where('tv_id', $tv_id)->first();

        if ($announce->template != 1) {
            if ($request->hasFile('file')) {
                $image_file = $request->file('file');
                $ext = strtolower($image_file->getClientOriginalExtension());

                if ($ext == 'jpg' || $ext == 'png' || $ext == 'jpeg') {
                    $ext = 'png';
                } elseif ($ext == 'gif') {
                    $ext = 'gif';
                } else {
                    return back()->with('fail', 'Announce file not accepted');
                }


                $file = 'announce.' . $ext;
                $image_file->move(Variables::uploadPath('announce'), $file);

                //log file
                $url = 'announce/' . $file;
                Publish::logChangedFiles($url, 'Announcement');
                Activity::logChanges($file, 'Announcement', 'updated'); //log activities

                $announce->image = $file;
            }
        }

        if ($request->start) {
            $announce->start = $request->start;
            $announce->end = $request->end;
        }

        $announce->title = $request->title;
        $announce->text = $request->text;
        $announce->color = $request->color;
        $announce->update();

        //public announcement here
        Publish::announcement();

        return back()->with('success', 'Uploaded successfully');
    }







    public function update(Request $request)
    {
        $tv_id = session()->get('tv')['id'];
        $announce = Announce::where('tv_id', $tv_id)->first();
        $announce->template = $request->template;
        $announce->update();

        //public announcement here
        Publish::announcement();

        Activity::logChanges('Announcement Template', 'Announcement', 'updated'); //log activities

        return 1;
    }
}









        // if ($request->type == 'video2') {
        //     if ($request->hasFile('file')) {
        //         $image_file = $request->file('file');
        //         $ext = strtolower($image_file->getClientOriginalExtension());

        //         if ($ext !== 'mp4') {
        //             return back()->with('fail', 'Announce file not accepted');
        //         }

        //         $file = 'ann02.mp4';
        //         $image_file->move(Variables::uploadPath('announce'), $file);

        //         //log file
        //         $url = 'announce/' . $file;
        //         Publish::logChangedFiles($url, 'Announcement');
        //         Activity::logChanges($file, 'Announcement', 'updated'); //log activities
        //     }

        //     $announce = Announce::where('tv_id', $tv_id)->first();
        //     $announce->start = $request->start;
        //     $announce->end = $request->end;
        //     $announce->update();

        //     //publish changes to announce.html
        //     Publish::announcement();
        //     $url = 'announce.html';
        //     Publish::logChangedFiles($url, 'Announcement');

        //     return back()->with('success', 'Uploaded successfully');
        // }
        // return back()->with('fail', 'Uploaded failed');