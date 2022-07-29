<?php

namespace App\Http\Controllers\Client;

use App\CustomClasses\Activity;
use App\CustomClasses\Path;
use App\CustomClasses\Permission;
use App\CustomClasses\Publish;
use App\CustomClasses\Variables;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\GlobalSetting;
use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BannerController extends Controller
{


    public function index()
    {
        //get number  of files allowered
        $data['setting'] = GlobalSetting::first();
        if ($data['setting']['show_banner'] && Permission::check('visibility_banner')) {
            $alloweredNoBannerFiles = $data['setting']['plan']['banners'];

            $tv_id = session()->get('tv')['id'];
            $data['banners'] = Banner::where('tv_id', $tv_id)->orderBy('position', 'asc')->take($alloweredNoBannerFiles)->get();
            return view('Client.banner', $data);
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
        // return $request->file;
        $tv_id = session()->get('tv')['id'];

        $id = (int)$request->id;

        if ($id == 0) {
            //image upload
            //find last file number to create new file
            $getLastBannerFile = Banner::where('tv_id', $tv_id)->orderBy('id', 'desc')->first(); //get last record
            if ($getLastBannerFile) {
                $newFileIndex = $getLastBannerFile->file + 1;
                if ($newFileIndex < 10) {
                    $file_Index = '0' . $newFileIndex;
                } else {
                    $file_Index = $newFileIndex;
                }
            } else {
                $file_Index = '01';
            }

            $ext = 'png';
            $file = 'banner' . $file_Index . '.' . $ext;

            $image = $request->file;
            list($type, $image) = explode(';', $image);
            list(, $image) = explode(',', $image);
            $image = base64_decode($image);
            file_put_contents(Variables::uploadPath('banner') . '/' . $file, $image);

            //find last file position to create new file
        $getLastMediaFilePosition = Banner::where('tv_id', $tv_id)->max('position'); //get last record
        if ($getLastMediaFilePosition) {
            $file_position = $getLastMediaFilePosition + 1;
        } else {
            $file_position = 1;
        }

            $type = 'image';
            Banner::create([
                'tv_id' => $tv_id,
                'file' => $file_Index,
                'type' => $type,
                'extension' => $ext,
                'position' => $file_position
            ]);

            //root url
            $url = 'banner/' . $file;
            Publish::logChangedFiles($url, 'Banner Content');
            Activity::logChanges($file, 'Banner Content', 'added'); //log activities

            return 'success';
        } else {
            $banner = Banner::findOrFail($id);
            //image upload
            $ext = 'png';
            $file = 'banner' . $banner->file . '.' . $ext;

            $image = $request->file;
            list($type, $image) = explode(';', $image);
            list(, $image) = explode(',', $image);
            $image = base64_decode($image);
            file_put_contents(Variables::uploadPath('banner') . '/' . $file, $image);

            $type = 'image';

            $banner->type = $type;
            $banner->extension = $ext;
            $banner->update();

            //root url
            $url = 'banner/' . $file;
            Publish::logChangedFiles($url, 'Banner Content');
            Activity::logChanges($file, 'Banner Content', 'updated'); //log activities

            return 'success';
        }
        return back()->with('fail', 'Error');
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

        $banner = Banner::find($id);
        $banner->is_active = $status;
        $banner->update();

        Activity::logChanges('banner' . $banner->file, 'Banner Content', 'switched', $status); //log activities

        return 'banner'.$banner->file;
    }


    ///playlist repositioning
    public function positioning(Request $request)
    {
        foreach ($request->positions as $position) {
            $file = Banner::find($position[0]);
            $file->position = $position[1];
            $file->update();
        }
        Activity::logChanges('Banner Content', 'Playlist', 're-arranged'); //log activities
        return 'success';
    }
}
