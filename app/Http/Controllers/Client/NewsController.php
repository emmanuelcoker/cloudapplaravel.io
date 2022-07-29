<?php

namespace App\Http\Controllers\Client;

use App\CustomClasses\Activity;
use App\CustomClasses\Path;
use App\CustomClasses\Permission;
use App\CustomClasses\Publish;
use App\CustomClasses\Rss as CustomClassesRss;
use App\CustomClasses\Variables;
use App\Http\Controllers\Controller;
use App\Models\GlobalSetting;
use App\Models\News;
use App\Models\Rss;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{

    public function index()
    {
        $data['setting'] = GlobalSetting::first();
        if ($data['setting']['allow_custom_news'] || $data['setting']['allow_rss_news'] && Permission::check('visibility_news')) {
            $tv_id = session()->get('tv')['id'];
            $data['rsss'] = Rss::where('tv_id', $tv_id)->orderBy('position', 'asc')->get();
            $data['newss'] = News::where('tv_id', $tv_id)->orderBy('position', 'asc')->get();
            return view('Client.news', $data);
        } else {
            return abort(404);
        }
    }



    // rss
    public function rss(Request $request)
    {
        $tv_id = session()->get('tv')['id'];
        $tv_path = session()->get('tv')['name'];

        $this->validate($request, [
            'file' => ['mimes:jpeg,jpg,png,gif,JPG,JPEG,PNG'],
        ]);

        $id = (int)$request->id;
        $type = $request->type;

        //rss operation
        if ($type == 'rss') {

            // check if rss url link is valid
            try {
               CustomClassesRss::output_rss_feed($request->link, 1);
            } catch (\Throwable $th) {
                return back()->with('rssFail', 'You uploaded an Invalid Rss link.');
            }

            if ($id == 0) {
                //image upload
                if ($request->hasFile('file')) {
                    $image_file = $request->file('file');
                    $ext = strtolower($image_file->getClientOriginalExtension());

                    $file = $request->title . '.' . $ext;
                    $image_file->move(Variables::uploadPath('rss/images'), $file);
                } else {
                    return back()->with('fail', 'Add a file to upload');
                }

                //find last file position to create new file
                $getLastRssFilePosition = Rss::max('position'); //get last record
                if ($getLastRssFilePosition) {
                    $file_position = $getLastRssFilePosition + 1;
                } else {
                    $file_position = '1';
                }

                Rss::create([
                    'tv_id' => $tv_id,
                    'name' => $request->title,
                    'link' => $request->link,
                    'image' => $file,
                    'count' => $request->count,
                    'position' => $file_position
                ]);

                //root url
                $url = 'rss/images/' . $file;
                Publish::logChangedFiles($url, 'RSS Feed');
                Activity::logChanges($request->title, 'RSS Feed', 'added'); //log activities

                return back()->with('success', 'Rss added successfully');
            } else {
                $media = Rss::findOrFail($id);
                //image upload
                if ($request->hasFile('file')) {
                    $image_file = $request->file('file');
                    $ext = strtolower($image_file->getClientOriginalExtension());

                    $file = $request->title . '.' . $ext;
                    $image_file->move(Variables::uploadPath('rss/images'), $file);

                    $media->image = $file;

                    //root url
                    $url = 'rss/images/' . $file;
                    Publish::logChangedFiles($url, 'RSS Feed');
                }

                $media->name = $request->title;
                $media->link = $request->link;
                $media->count = $request->count;
                $media->update();

                Activity::logChanges($request->title, 'RSS Feed', 'updated'); //log activities

                return back()->with('success', 'Rss updated successfully');
            }
        }




        //custom feed news
        if ($type == 'custom') {
            if ($id == 0) {
                //image upload
                if ($request->hasFile('file')) {
                    $image_file = $request->file('file');
                    $ext = strtolower($image_file->getClientOriginalExtension());

                    $file = $request->title . '.' . $ext;
                    $image_file->move(Variables::uploadPath('rss/images'), $file);
                } else {
                    return back()->with('fail', 'Add a file to upload');
                }

                //find last file position to create new file
                $getLastNewsFilePosition = News::max('position'); //get last record
                if ($getLastNewsFilePosition) {
                    $file_position = $getLastNewsFilePosition + 1;
                } else {
                    $file_position = '1';
                }

                News::create([
                    'tv_id' => $tv_id,
                    'name' => $request->title,
                    'content' => $request->content,
                    'image' => $file,
                    'position' => $file_position
                ]);

                //root url
                $url = 'rss/images/' . $file;
                Publish::logChangedFiles($url, 'Custom News');
                Activity::logChanges($request->title, 'Custom News', 'added'); //log activities

                return back()->with('success', 'Custom News added successfully');
            } else {
                $media = News::findOrFail($id);
                //image upload
                if ($request->hasFile('file')) {
                    $image_file = $request->file('file');
                    $ext = strtolower($image_file->getClientOriginalExtension());

                    $file = $request->title . '.' . $ext;
                    $image_file->move(Variables::uploadPath('rss/images'), $file);

                    $media->image = $file;

                    //root url
                    $url = 'rss/images/' . $file;
                    Publish::logChangedFiles($url, 'Custom News');
                    Activity::logChanges($request->title, 'Custom News', 'updated'); //log activities
                }

                $media->name = $request->title;
                $media->content = $request->content;
                $media->update();

                return back()->with('success', 'Rss updated successfully');
            }
        }
        return back()->with('fail', 'Error');
    }




    public function switch(Request $request)
    {
        $type = $request->type;
        $id = $request->id;
        $status = $request->status;

        if ($status == 'true') {
            $status = 1;
        } else {
            $status = 0;
        }

        if ($type == 'rss') {
            $rate = Rss::find($id);
            $rate->is_active = $status;
            $rate->update();
            Activity::logChanges($rate->title, 'RSS Feed', 'switched', $status); //log activities
            return $rate->name;
        }

        if ($type == 'custom') {
            $rate = News::find($id);
            $rate->is_active = $status;
            $rate->update();
            Activity::logChanges($rate->title, 'Custom News', 'switched', $status); //log activities
            return $rate->name;
        }

        return abort(404);
    }


    public function arrange_news(Request $request)
    {
        $type = $request->type;
        $positions = $request->positions;
        if ($type == 'rss') {
            foreach ($positions as $position) {
                $file = Rss::find($position[0]);
                $file->position = $position[1];
                $file->update();
            }
            Activity::logChanges('RSS Feed Tab', 'RSS Feed', 're-arranged'); //log activities
        }

        if ($type == 'news') {
            foreach ($positions as $position) {
                $file = News::find($position[0]);
                $file->position = $position[1];
                $file->update();
            }
            Activity::logChanges('Custom Feed Tab', 'Custom News', 're-arranged'); //log activities
        }
        return 'ok';
    }
}
