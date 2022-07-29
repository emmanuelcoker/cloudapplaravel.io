<?php

namespace App\Http\Controllers\Client;

use App\CustomClasses\Activity;
use App\CustomClasses\Path;
use App\CustomClasses\Permission;
use App\CustomClasses\Publish;
use App\CustomClasses\Variables;
use App\Http\Controllers\Controller;
use App\Models\GlobalSetting;
use App\Models\Tab;
use App\Models\Training;
use App\Models\TrainingVideo;
use App\Models\Tv;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    public function index()
    {
        $data['settings'] = GlobalSetting::first();
        if ($data['settings']['show_training'] && Permission::check('visibility_training')) {
            $tv_id = session()->get('tv')['id'];
            $data['morning'] = Training::where('tv_id', $tv_id)->where('name', 'Morning')->first();
            $data['afternoon'] = Training::where('tv_id', $tv_id)->where('name', 'Afternoon')->first();
            $data['evening'] = Training::where('tv_id', $tv_id)->where('name', 'Evening')->first();
            $data['tab'] = Tab::first();
            $data['tv'] = Tv::find($tv_id);
            return view('Client.training', $data);
        } else {
            return back();
        }
    }





    public function store(Request $request)
    {
        $tv_id = session()->get('tv')['id'];
        $tabName = Tab::first()['training'];
        $file_Index = '01';
        if ($request->hasFile('file')) {
            $image_file = $request->file('file');
            $ext = strtolower($image_file->getClientOriginalExtension());

            if ($ext !== 'mp4') {
                return back()->with('fail', 'Daily Communication file not accepted');
            }
            //find last file number to create new file
            $getLastMediaFile = TrainingVideo::where('tv_id', $tv_id)->orderBy('id', 'desc')->first(); //get last record
            if ($getLastMediaFile) {
                $newFileIndex = $getLastMediaFile->video + 1;
                if ($newFileIndex < 10) {
                    $file_Index = '0' . $newFileIndex;
                } else {
                    $file_Index = $newFileIndex;
                }
            }
            $file = 'item' . $file_Index . '.mp4';
            $image_file->move(Variables::uploadPath('train'), $file);
        } else {
            return back()->with('fail', 'Add a file to upload');
        }

        $morning = 0;
        $afternoon = 0;
        $evening = 0;
        $m_position = null;
        $a_position = null;
        $e_position = null;

        if ($request->morning) {
            $morning = 1;
            //find last file position to create new file
            $getMPosition = TrainingVideo::where('tv_id', $tv_id)->where('morning', true)->max('m_position'); //get last record
            if ($getMPosition) {
                $m_position = $getMPosition + 1;
            } else {
                $m_position = 1;
            }
        }
        if ($request->afternoon) {
            $afternoon = 1;
            //find last file position to create new file
            $getAPosition = TrainingVideo::where('tv_id', $tv_id)->where('afternoon', true)->max('a_position'); //get last record
            if ($getAPosition) {
                $a_position = $getAPosition + 1;
            } else {
                $a_position = 1;
            }
        }
        if ($request->evening) {
            $evening = 1;
            //find last file position to create new file
            $getEPosition = TrainingVideo::where('tv_id', $tv_id)->where('evening', true)->max('e_position'); //get last record
            if ($getEPosition) {
                $e_position = $getEPosition + 1;
            } else {
                $e_position = 1;
            }
        }

    
        TrainingVideo::create([
            'tv_id' => $tv_id,
            'm_position' => $m_position,
            'a_position' => $a_position,
            'e_position' => $e_position,
            'title' => $request->title,
            'video' => $file_Index,
            'morning' => $morning,
            'afternoon' => $afternoon,
            'evening' => $evening,
        ]);

        //log file
        $url = 'train/' . $file;
        Publish::logChangedFiles($url, $tabName);
        Activity::logChanges($file, $tabName, 'added'); //log activities

        //publish changes 
        Publish::training();
        $url = 'morning.html';
        Publish::logChangedFiles($url, $tabName);
        $url = 'afternoon.html';
        Publish::logChangedFiles($url, $tabName);
        $url = 'evening.html';
        Publish::logChangedFiles($url, $tabName);
        // $url = 'all_schedule.html';
        // Publish::logChangedFiles($url, $tabName);

        return back()->with('success', 'Uploaded successfully');
    }




    public function update(Request $request)
    {
        $id = $request->id;
        $tabName = Tab::first()['training'];

        $video = TrainingVideo::find($id);

        if ($request->hasFile('file')) {
            $image_file = $request->file('file');
            $ext = strtolower($image_file->getClientOriginalExtension());

            if ($ext !== 'mp4') {
                return back()->with('fail', 'Daily Communication file not accepted');
            }

            $file = 'item' . $video->video . '.mp4';
            $image_file->move(Variables::uploadPath('train'), $file);

            //log file
            $url = 'train/' . $file;
            Publish::logChangedFiles($url, $tabName);
        }

        $morning = 0;
        $afternoon = 0;
        $evening = 0;
        if ($request->morning) {
            $morning = 1;
        }
        if ($request->afternoon) {
            $afternoon = 1;
        }
        if ($request->evening) {
            $evening = 1;
        }

        $video->title = $request->title;
        $video->morning = $morning;
        $video->afternoon = $afternoon;
        $video->evening = $evening;
        $video->update();

        //publish changes 
        Publish::training();
        $url = 'morning.html';
        Publish::logChangedFiles($url, $tabName);
        $url = 'afternoon.html';
        Publish::logChangedFiles($url, $tabName);
        $url = 'evening.html';
        Publish::logChangedFiles($url, $tabName);
        // $url = 'all_schedule.html';
        // Publish::logChangedFiles($url, $tabName);

        Activity::logChanges('item' . $video->video, $tabName, 'updated'); //log activities

        return back()->with('success', 'Uploaded successfully');
    }



     ///playlist repositioning -- morning
     public function morning_positioning(Request $request)
     {
         foreach ($request->positions as $position) {
             $file = TrainingVideo::find($position[0]);
             $file->m_position = $position[1];
             $file->update();
         }
         Activity::logChanges('Daily Communication', 'Morning Playlist', 're-arranged'); //log activities
         return 'success';
     }
     
     ///playlist repositioning -- afternoon
     public function afternoon_positioning(Request $request)
     {
         foreach ($request->positions as $position) {
             $file = TrainingVideo::find($position[0]);
             $file->a_position = $position[1];
             $file->update();
         }
         Activity::logChanges('Daily Communication', 'Afternoon Playlist', 're-arranged'); //log activities
         return 'success';
     }
    
     ///playlist repositioning -- evening
     public function evening_positioning(Request $request)
     {
         foreach ($request->positions as $position) {
             $file = TrainingVideo::find($position[0]);
             $file->e_position = $position[1];
             $file->update();
         }
         Activity::logChanges('Daily Communication', 'Evening Playlist', 're-arranged'); //log activities
         return 'success';
     }
 
 
     public function switch(Request $request)
     {
         $id = $request->id;
         $status = $request->status;
 
         if ($status == 'true') {
             $status = 1;
         } else {
             $status = 0;
         }
 
         $training = TrainingVideo::find($id);
         $training->is_active = $status;
         $training->update();
 
         Activity::logChanges('item' . $training->file, 'Training Content', 'switched', $status); //log activities
 
         return $training->title;
     }


}
