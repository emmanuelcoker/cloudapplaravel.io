<?php

namespace App\CustomClasses;

use App\Models\Announce;
use App\Models\Banner;
use App\Models\GlobalSetting;
use App\Models\Logo;
use App\Models\Media;
use App\Models\News;
use App\Models\Rss;
use App\Models\Tab;
use App\Models\Training;
use App\Models\Tv;
use App\CustomClasses\StoreRateToArray;


/* 
    this class handles all type of publishing functions in this system
*/



class Schedule
{
  
    public static function updateTv($tv_id, $newItem, $operation)
    {
        $tv_name = Tv::find($tv_id)['name'];
        $path = $tv_name. '/App/';


        //global settings
        $data['settings'] = GlobalSetting::first();

        //get number  of files allowered
        $alloweredNoBannerFiles = $data['settings']['plan']['banners'];
        $alloweredNoLogo = $data['settings']['plan']['logos'];


        //get playlist 
        $data['currentTime'] = date('Y-m-d h:i', strtotime("+1 hour"));

        if($operation == 'add'){ 
        $media = Media::where('tv_id', $tv_id)->orderBy('position', 'asc')->where('content_type', 'master')->where('is_active', true)->orWhere('content_type', 'schedule')->where('start', '<=', $data['currentTime'])->where('end', '>', $data['currentTime'])->where('is_active', true)->orWhere('id', $newItem)->where('is_active', true)->get();
        }
       
        if($operation == 'remove'){
        $media = Media::where('tv_id', $tv_id)->orderBy('position', 'asc')->where('content_type', 'master')->where('is_active', true)->orWhere('content_type', 'schedule')->where('start', '<=', $data['currentTime'])->where('end', '>', $data['currentTime'])->where('is_active', true)->get();
        }


       
        $data['tv'] = Tv::findOrFail($tv_id);
        $data['base_url'] = url('/' . $path); //to specify the baseurl of the tv
        $data['app_url'] = url('/'); //to get the app url
        $data['tab'] = Tab::first();
        $data['custom_news'] = News::where('tv_id', $tv_id)->orderBy('position', 'asc')->get();
        $data['rss_news'] = Rss::where('tv_id', $tv_id)->orderBy('position', 'asc')->get();
        $data['banners'] = Banner::where('tv_id', $tv_id)->take($alloweredNoBannerFiles)->get();
        $data['medias'] =  $media; 
        $data['schedules'] = Media::where('tv_id', $tv_id)->where('content_type', 'schedule')->where('is_active', true)->get();
        $data['logos'] = Logo::where('tv_id', $tv_id)->take($alloweredNoLogo)->get();
        $data['announce'] = Announce::where('tv_id', $tv_id)->first();
        $data['morning'] = Training::where('tv_id', $tv_id)->where('name', 'Morning')->first();
        $data['afternoon'] = Training::where('tv_id', $tv_id)->where('name', 'Afternoon')->first();
        $data['evening'] = Training::where('tv_id', $tv_id)->where('name', 'Evening')->first();

        //storing rates to array
        StoreRateToArray::store();

        //converting to static for index.html
        $content = view('template.fx', $data)->render();
        $outputPath = Variables::pathToTv($tv_name, 'index.html');
        file_put_contents($outputPath, $content);

        return 'ok';
    }
}