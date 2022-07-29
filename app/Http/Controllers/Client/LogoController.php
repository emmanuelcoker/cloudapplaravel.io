<?php

namespace App\Http\Controllers\Client;

use App\CustomClasses\Activity;
use App\CustomClasses\Permission;
use App\CustomClasses\Publish;
use App\CustomClasses\Variables;
use App\Http\Controllers\Controller;
use App\Models\GlobalSetting;
use App\Models\Logo;
use Illuminate\Http\Request;

class LogoController extends Controller
{
    public function index()
    {
        if (Permission::check('visibility_logo')) {
            //get number  of files allowered
            $data['setting'] = GlobalSetting::first();
            $alloweredNoLogos = $data['setting']['plan']['logos'];

            $tv_id = session()->get('tv')['id'];
            $data['logos'] = Logo::where('tv_id', $tv_id)->orderBy('position', 'asc')->take($alloweredNoLogos)->get();
            return view('Client.logo', $data);
        } else {
            return abort(404);
        }
    }



    public function store(Request $request)
    {
        $tv_id = session()->get('tv')['id'];

        //image upload
        $ext = 'png';
        //find last file number to create new file
        $getLastLogoFile = Logo::where('tv_id', $tv_id)->orderBy('id', 'desc')->first(); //get last record
        if ($getLastLogoFile) {
            $newFileIndex = $getLastLogoFile->image + 1;
            if ($newFileIndex < 10) {
                $file_Index = '0' . $newFileIndex;
            } else {
                $file_Index = $newFileIndex;
            }
        } else {
            $file_Index = '01';
        }

        $file = 'logo' . $file_Index . '.' . $ext;
        $image = $request->file;
        list($type, $image) = explode(';', $image);
        list(, $image) = explode(',', $image);
        $image = base64_decode($image);
        file_put_contents(Variables::uploadPath('logo') . '/' . $file, $image);

        //find last file position to create new file
        $getLastMediaFilePosition = Logo::where('tv_id', $tv_id)->max('position'); //get last record
        if ($getLastMediaFilePosition) {
            $file_position = $getLastMediaFilePosition + 1;
        } else {
            $file_position = 1;
        }

        Logo::create([
            'tv_id' => session()->get('tv')['id'],
            'image' => $file_Index,
            'extension' => $ext,
            'position' => $file_position
        ]);

        //root url
        $url = 'logo/' . $file;
        Publish::logChangedFiles($url, 'Logo Content');

        Activity::logChanges($file, 'Logo Content', 'added'); //log activities

        return 'success';
    }

 

    public function update(Request $request)
    {
       $logo = Logo::findOrFail($request->id);
        $ext = 'png';

        $file = 'logo' . $logo->image . '.' . $ext;
        $image = $request->file;
        list($type, $image) = explode(';', $image);
        list(, $image) = explode(',', $image);
        $image = base64_decode($image);
        file_put_contents(Variables::uploadPath('logo') . '/' . $file, $image);

        //root url
        $url = 'logo/' . $file;
        Publish::logChangedFiles($url, 'Logo Content');

        Activity::logChanges($file, 'Logo Content', 'updated'); //log activities

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

        $logo = Logo::find($id);
        $logo->is_active = $status;
        $logo->update();

        Activity::logChanges('logo' . $logo->image, 'Logo Content', 'switched', $status); //log activities

        return 'logo'.$logo->image;
    }




    ///playlist repositioning
    public function positioning(Request $request)
    {
        foreach ($request->positions as $position) {
            $file = Logo::find($position[0]);
            $file->position = $position[1];
            $file->update();
        }
        Activity::logChanges('Logo Content', 'Playlist', 're-arranged'); //log activities
        return 'success';
    }
}
