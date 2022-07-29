<?php

namespace App\Http\Controllers\Client;

use App\CustomClasses\Activity;
use App\CustomClasses\Permission;
use App\CustomClasses\Publish;
use App\CustomClasses\Variables;
use App\Http\Controllers\Controller;
use App\Models\GlobalSetting;
use App\Models\Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{



    public function index()
    {
        if (Permission::check('visibility_media')) {
            //get number  of files allowered
            $data['setting'] = GlobalSetting::first();
            $tv_id = session()->get('tv')['id'];

            $data['schedules'] = Media::where('tv_id', $tv_id)->where('content_type', 'schedule')->get();
            $data['medias'] = Media::where('tv_id', $tv_id)->where('content_type', 'master')->get();
            $data['playlists'] = Media::where('tv_id', $tv_id)->orderBy('position', 'asc')->get();
            return view('Client.media', $data);
        } else {
            return abort(404);
        }
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response    
     */
    public function store(Request $request)
    {
        $tv_id = session()->get('tv')['id'];
        $start = null;
        $end = null;

        $this->validate($request, [
            'file' => ['mimes:jpeg,jpg,png,gif,mp4,JPG,JPEG,PNG'],
        ]);

        $id = (int)$request->id;

        if ($id == 0) {

            //get number  of files allowered
            $data['setting'] = GlobalSetting::first();
            $content_type = $request->content_type;
            if ($content_type == 'master') {
                $limit = $data['setting']['plan']['media'];
            }

            if ($content_type == 'schedule') {
                $limit = $data['setting']['plan']['schedule_video'];

                if($request->start && $request->end){
                    $start = $request->start;
                    $end = $request->end;
                }elseif($request->start && $request->end == null){
                    $start = $request->start;
                    $end = date('2030-m-d H:i:s', strtotime('1 hour'));
                }elseif($request->start == null && $request->end){
                    $start = date('Y-m-d H:i:s', strtotime('1 hour'));
                    $end = $request->end;
                }else{
                    $start = date('Y-m-d H:i:s', strtotime('1 hour'));
                    $end = date('2030-m-d H:i:s', strtotime('1 hour'));
                }
            }

            $getMedia = Media::where('tv_id', $tv_id)->where('content_type', $content_type)->get();
            if (count($getMedia) < $limit) {
                //image upload
                if ($request->hasFile('file')) {
                    $image_file = $request->file('file');
                    $ext = strtolower($image_file->getClientOriginalExtension());

                    //find last file number to create new file
                    $getLastMediaFile = Media::where('tv_id', $tv_id)->orderBy('id', 'desc')->first(); //get last record
                    if ($getLastMediaFile) {
                        $newFileIndex = $getLastMediaFile->file + 1;
                        if ($newFileIndex < 10) {
                            $file_Index = '0' . $newFileIndex;
                        } else {
                            $file_Index = $newFileIndex;
                        }
                    } else {
                        $file_Index = '01';
                    }


                    //find last file position to create new file
                    $getLastMediaFilePosition = Media::where('tv_id', $tv_id)->max('position'); //get last record
                    if ($getLastMediaFilePosition) {
                        $file_position = $getLastMediaFilePosition + 1;
                    } else {
                        $file_position = 1;
                    }


                    if ($ext == 'jpg' || $ext == 'png' || $ext == 'jpeg' || $ext == 'gif') {
                        $type = 'image';
                        $ext = 'png';
                    } elseif ($ext == 'mp4') {
                        $type = 'video';
                        $ext = 'mp4';
                    } else {
                        return back()->with('fail', 'Media file not accepted');
                    }

                    $file = 'item' . $file_Index . '.' . $ext;
                    if ($content_type == 'master') {
                        $image_file->move(Variables::uploadPath('video'), $file);
                    }

                    if ($content_type == 'schedule') {
                        $image_file->move(Variables::uploadPath('videobank'), $file);
                    }
                } else {
                    return back()->with('fail', 'Add a file to upload');
                }

                

                Media::create([
                    'tv_id' => $tv_id,
                    'file' => $file_Index,
                    'title' => $request->title,
                    'description' => $request->description,
                    'type' => $type,
                    'position' => $file_position,
                    'extension' => $ext,
                    'content_type' => $content_type,
                    'end' => $end,
                    'start' => $start
                ]);

                //root url
                $url = 'video/' . $file;
                Publish::logChangedFiles($url, 'Media Content');

                Activity::logChanges($file, 'Media Content', 'added'); //log activities

                return back()->with('success', 'Uploaded successfully');
            } else {
                return back()->with('fail', 'You do not have any ' . $content_type . ' slot remaining. To upgrade please contact Cloudapp support');
            }
        } else {  //editing media items
            $media = Media::findOrFail($id);
            //image upload
            if ($request->hasFile('file')) {
                $image_file = $request->file('file');
                $ext = strtolower($image_file->getClientOriginalExtension());

                if ($ext == 'jpg' || $ext == 'png' || $ext == 'jpeg' || $ext == 'gif') {
                    $type = 'image';
                    $ext = 'png';
                } elseif ($ext == 'mp4') {
                    $type = 'video';
                    $ext = 'mp4';
                } else {
                    return back()->with('fail', 'Media file not accepted');
                }

                $file = 'item' . $media->file . '.' . $ext;

                if ($media->content_type == 'master') {
                    $image_file->move(Variables::uploadPath('video'), $file);
                }

                if ($media->content_type == 'schedule') {
                    $image_file->move(Variables::uploadPath('videobank'), $file);
                }

                $media->type = $type;
                $media->extension = $ext;

                //root url
                $url = 'video/' . $file;
                Publish::logChangedFiles($url, 'Media Content');
            }

            $media->title = $request->title;
            $media->description = $request->description;
            $media->update();

            Activity::logChanges('item' . $media->file, 'Media Content', 'updated'); //log activities

            return back()->with('success', 'Media updated successfully');
        }
        return back()->with('fail', 'Error');
    }





    public function schedule(Request $request)
    {
        $id = $request->id;

        $media = Media::findOrFail($id);
        if ($request->start) {
            $media->start = $request->start;
        }
        if ($request->end) {
            $media->end = $request->end;
        }
        $media->update();

        Activity::logChanges('item' . $media->file, 'Media Content', 'scheduled'); //log activities

        return back()->with('success', $media->title . ' schedule updated successfully');
    }




    ///playlist repositioning
    public function positioning(Request $request)
    {
        foreach ($request->positions as $position) {
            $file = Media::find($position[0]);
            $file->position = $position[1];
            $file->update();

            // echo 'Media file item' . $file->file . ' moved to position ' . $position[1] . '<br>';
        }
        Activity::logChanges('Playlist Page', 'Media Content', 're-arranged'); //log activities
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

        $media = Media::find($id);
        $media->is_active = $status;
        $media->update();

        Activity::logChanges('item' . $media->file, 'Media Content', 'switched', $status); //log activities

        return $media->title;
    }
}
















  // public function schedule(Request $request)
    // {

    //     $id = $request->id;
    //     $start = $request->start;
    //     $end = $request->end;

    //     $media = Media::findOrFail($id);

    //     if ($media->start == null && $start == null) {
    //         return back()->with('fail', 'Please state a start time for your schedule');
    //     }

    //     if ($request->hasFile('file')) {
    //         $image_file = $request->file('file');
    //         $ext = strtolower($image_file->getClientOriginalExtension());

    //         if ($ext == 'jpg' || $ext == 'png' || $ext == 'jpeg' || $ext == 'gif') {
    //             $scheduled_video = 'image';
    //             $ext = 'png';
    //         } elseif ($ext == 'mp4') {
    //             $scheduled_video = 'video';
    //             $ext = 'mp4';
    //         } else {
    //             return back()->with('fail', 'Media file not accepted');
    //         }

    //         $file = 'item' . $media->file . '.' . $ext;
    //         $image_file->move(Variables::uploadPath('videobank'), $file);

    //         $media->scheduled_video = $scheduled_video;
    //         //root url
    //         $url = 'videobank/' . $file;
    //         Publish::logChangedFiles($url, 'Media Scheduled Content');
    //     } elseif ($media->scheduled_video == null) {
    //         return back()->with('fail', 'Please Upload your schedule video or image');
    //     }

    //     if ($start) {
    //         $media->start = $start;
    //     }

    //     $media->end = $end;

    //     $media->update();

    //     if ($media->start) {
    //         return back()->with('success', 'Schedule updated');
    //     } else {
    //         return back()->with('success', 'Schedule created');
    //     }
    // }







    
    // public function destroy($id)
    // {
    //     $media = Media::findOrFail($id);
    //     if ($media->scheduler) {
    //         $media->scheduler->delete();
    //     }
    //     $file = 'item' . $media->file . '.' . $$media->extension;
    //     unlink('video/' . $file);
    //     $media->delete();
    //     return back()->with('success', 'Media deleted successfully');
    // }