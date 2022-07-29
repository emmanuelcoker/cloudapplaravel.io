<?php

namespace App\CustomClasses;

use App\Http\Resources\MediaResource;
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
use App\exports\CsvExport;
use Maatwebsite\Excel\Facades\Excel;
use ZipArchive;

/* 
    this class handles all type of publishing functions in this system
*/



class Publish
{



    //function for publishing to static (announcement HTML)
    public static function announcement()
    {
        $tv_id = session()->get('tv')['id'];
        $data['announce'] = Announce::where('tv_id', $tv_id)->first();

        //converting to static for announce.html
        $templateFile = 'template.announce' . $data['announce']['template'];
        $contentA = view($templateFile, $data)->render();

        $outputPathA = Variables::uploadPath('announce.html');
        file_put_contents($outputPathA, $contentA);
    }



    //function for publishing to static (training HTML)
    public static function training()
    {
        $tv_id = session()->get('tv')['id'];

        //global settings
        $data['settings'] = GlobalSetting::first();
        $data['tv'] = Tv::findOrFail($tv_id);

        $data['morning'] = Training::where('tv_id', $tv_id)->where('name', 'Morning')->first();
        $data['afternoon'] = Training::where('tv_id', $tv_id)->where('name', 'Afternoon')->first();
        $data['evening'] = Training::where('tv_id', $tv_id)->where('name', 'Evening')->first();
        $data['announce'] = Announce::where('tv_id', $tv_id)->first();

        //converting to static for all daily schedule videos
        // $contentAllTraining = view('template.all_schedule', $data)->render();
        // $outputPathAllTraining =  Variables::uploadPath('all_schedule.html');
        // file_put_contents($outputPathAllTraining, $contentAllTraining);

        //converting to static for morning scheduled videos
        $contentMorning = view('template.morning', $data)->render();
        $outputPathMorning = Variables::uploadPath('morning.html');
        file_put_contents($outputPathMorning, $contentMorning);

        //converting to static for Afternoon scheduled videos
        $contentAfternoon = view('template.afternoon', $data)->render();
        $outputPathAfternoon = Variables::uploadPath('afternoon.html');
        file_put_contents($outputPathAfternoon, $contentAfternoon);

        //converting to static for Evening scheduled videos
        $contentEvening = view('template.evening', $data)->render();
        $outputPathEvening = Variables::uploadPath('evening.html');
        file_put_contents($outputPathEvening, $contentEvening);
    }


    private static function clock()
    {
        $tv_id = session()->get('tv')['id'];
        $data['tv'] = Tv::findOrFail($tv_id);
        
        //converting to static for clock 1
        if ($data['tv']['clockLayout'] == 1) {
            $clockBlade = view('template.clocks.1', $data)->render();
            $clockOutPut = Variables::uploadPath('clock/1/index.html');
            file_put_contents($clockOutPut, $clockBlade);
        }

         //converting to static for clock 2
         if ($data['tv']['clockLayout'] == 2) {
            $clockBlade = view('template.clocks.2', $data)->render();
            $clockOutPut = Variables::uploadPath('clock/2/index.html');
            file_put_contents($clockOutPut, $clockBlade);
        }
        
        //converting to static for clock 3
         if ($data['tv']['clockLayout'] == 3) {
            $clockBlade = view('template.clocks.3', $data)->render();
            $clockOutPut = Variables::uploadPath('clock/3/index.html');
            file_put_contents($clockOutPut, $clockBlade);
        }
       
        //converting to static for clock 4
         if ($data['tv']['clockLayout'] == 4) {
            $clockBlade = view('template.clocks.4', $data)->render();
            $clockOutPut = Variables::uploadPath('clock/4/index.html');
            file_put_contents($clockOutPut, $clockBlade);
        }
    }


    //function for publishing to static
    public static function toStatic()
    {
        $tv_id = session()->get('tv')['id'];
        $path = session()->get('tv')['name'] . '/App/';

        //global settings
        $data['settings'] = GlobalSetting::first();
        $data['currentTime'] = date('Y-m-d h:i', strtotime("+1 hour"));


        //get number  of files allowered
        $alloweredNoBannerFiles = $data['settings']['plan']['banners'];
        $alloweredNoLogo = $data['settings']['plan']['logos'];

        $data['tv'] = Tv::findOrFail($tv_id);
        $data['base_url'] = url('/' . $path); //to specify the baseurl of the tv
        $data['app_url'] = url('/'); //to get the app url
        $data['tab'] = Tab::first();
        $data['custom_news'] = News::where('tv_id', $tv_id)->orderBy('position', 'asc')->get();
        $data['rss_news'] = Rss::where('tv_id', $tv_id)->orderBy('position', 'asc')->get();
        $data['banners'] = Banner::where('tv_id', $tv_id)->orderBy('position', 'asc')->take($alloweredNoBannerFiles)->where('is_active', true)->get();
        $data['medias'] =  Media::where('tv_id', $tv_id)->orderBy('position', 'asc')->where('content_type', 'master')->where('is_active', true)->orWhere('content_type', 'schedule')->where('start', '<=', $data['currentTime'])->where('end', '>', $data['currentTime'])->where('is_active', true)->get();
        $data['schedules'] = Media::where('tv_id', $tv_id)->where('content_type', 'schedule')->where('is_active', true)->get();
        $data['logos'] = Logo::where('tv_id', $tv_id)->orderBy('position', 'asc')->take($alloweredNoLogo)->where('is_active', true)->get();
        $data['announce'] = Announce::where('tv_id', $tv_id)->first();
        $data['morning'] = Training::where('tv_id', $tv_id)->where('name', 'Morning')->first();
        $data['afternoon'] = Training::where('tv_id', $tv_id)->where('name', 'Afternoon')->first();
        $data['evening'] = Training::where('tv_id', $tv_id)->where('name', 'Evening')->first();
        $data['waitingMediaItems'] =  Media::where('tv_id', $tv_id)->Where('content_type', 'schedule')->where('start', '>', $data['currentTime'])->where('is_active', true)->get();

        //storing rates to array
        StoreRateToArray::store();

        //converting to static for index.html
        if ($data['tv']['template'] == 1) {
            $content = view('template.displays.semi_fx', $data)->render();
        }
        if ($data['tv']['template'] == 2) {
            $content = view('template.displays.noRate_right', $data)->render();
        }
        if ($data['tv']['template'] == 3) {
            $content = view('template.displays.screen_and_rss', $data)->render();
        }
        if ($data['tv']['template'] == 4) {
            $content = view('template.displays.noRate_left', $data)->render();
        }
        if ($data['tv']['template'] == 5) {
            $content = view('template.displays.full_screen', $data)->render();
        }
        if ($data['tv']['template'] == 6) {
            $content = view('template.displays.fx', $data)->render();
        }
        $outputPath = Variables::uploadPath('index.html');
        file_put_contents($outputPath, $content);

        //CALL converting to announcement html
        self::announcement();

        //CALL converting to daily schedule html
        self::training();

        //CALL converting to clock index html
        self::clock();
    }















    ///publish to zip
    public static function zip()
    {
        $path = Variables::zipSource();  //file to zip
        $zip_file = Variables::zipPath(); //get zip path
        $zip = new ZipArchive;

        if ($zip->open($zip_file, (ZipArchive::CREATE | ZipArchive::OVERWRITE)) === TRUE) {

            //main directory
            $dir = opendir($path);
            while ($file = readdir($dir)) {
                if (is_file($path . $file)) {
                    $zip->addFile($path . $file, $file);
                }
            }


            //announce
            $announce = opendir($path . 'announce');
            while ($file = readdir($announce)) {
                if (is_file($path . 'announce/' . $file)) {
                    $zip->addFile($path . 'announce/' . $file, 'announce/' . $file);
                }
            }

            //banner
            $banner = opendir($path . 'banner');
            while ($file = readdir($banner)) {
                if (is_file($path . 'banner/' . $file)) {
                    $zip->addFile($path . 'banner/' . $file, 'banner/' . $file);
                }
            }


            //css
            $css = opendir($path . 'css');
            while ($file = readdir($css)) {
                if (is_file($path . 'css/' . $file)) {
                    $zip->addFile($path . 'css/' . $file, 'css/' . $file);
                }
            }

            //css/fonts
            $fonts = opendir($path . 'css/fonts');
            while ($file = readdir($fonts)) {
                if (is_file($path . 'css/fonts/' . $file)) {
                    $zip->addFile($path . 'css/fonts/' . $file, 'css/fonts/' . $file);
                }
            }



            //flag
            $flag = opendir($path . 'flag');
            while ($file = readdir($flag)) {
                if (is_file($path . 'flag/' . $file)) {
                    $zip->addFile($path . 'flag/' . $file, 'flag/' . $file);
                }
            }

            //js
            $js = opendir($path . 'js');
            while ($file = readdir($js)) {
                if (is_file($path . 'js/' . $file)) {
                    $zip->addFile($path . 'js/' . $file, 'js/' . $file);
                }
            }



            //logo
            $logo = opendir($path . 'logo');
            while ($file = readdir($logo)) {
                if (is_file($path . 'logo/' . $file)) {
                    $zip->addFile($path . 'logo/' . $file, 'logo/' . $file);
                }
            }



            //rss
            $rss = opendir($path . 'rss/images');
            while ($file = readdir($rss)) {
                if (is_file($path . 'rss/images/' . $file)) {
                    $zip->addFile($path . 'rss/images/' . $file, 'rss/images/' . $file);
                }
            }




            //sliderengine
            $sliderengine = opendir($path . 'sliderengine');
            while ($file = readdir($sliderengine)) {
                if (is_file($path . 'sliderengine/' . $file)) {
                    $zip->addFile($path . 'sliderengine/' . $file, 'sliderengine/' . $file);
                }
            }


            //sliderengine/slick
            $slick = opendir($path . 'sliderengine/slick');
            while ($file = readdir($slick)) {
                if (is_file($path . 'sliderengine/slick/' . $file)) {
                    $zip->addFile($path . 'sliderengine/slick/' . $file, 'sliderengine/slick/' . $file);
                }
            }





            //time
            $time = opendir($path . 'time');
            while ($file = readdir($time)) {
                if (is_file($path . 'time/' . $file)) {
                    $zip->addFile($path . 'time/' . $file, 'time/' . $file);
                }
            }




            //train
            $train = opendir($path . 'train');
            while ($file = readdir($train)) {
                if (is_file($path . 'train/' . $file)) {
                    $zip->addFile($path . 'train/' . $file, 'train/' . $file);
                }
            }





            //video
            $video = opendir($path . 'video');
            while ($file = readdir($video)) {
                if (is_file($path . 'video/' . $file)) {
                    $zip->addFile($path . 'video/' . $file, 'video/' . $file);
                }
            }


            //videobank
            $videobank = opendir($path . 'videobank');
            while ($file = readdir($videobank)) {
                if (is_file($path . 'videobank/' . $file)) {
                    $zip->addFile($path . 'videobank/' . $file, 'videobank/' . $file);
                }
            }




            $zip->close();

            return 'success';
        }
    }




    //to log changed files
    public static function logChangedFiles($file, $section)
    {
        $url = url('/') . Variables::tvPath($file);
        $files = [];
        if (session()->has('files')) {
            $files = session()->get('files');
        }

        if (!in_array($url, $files)) {
            $urlArray = [$url, date("Y-m-d H:i:s"), $section];
            array_push($files, $urlArray);
            session(['files' => $files]);
        }
    }



    //publish to api csv
    public static function apiCSV($files)
    {
        $path = Variables::updatePath('update.csv');

        //delete old csv
        unlink($path);

        //save to csv file
        Excel::store(new CsvExport($files), $path);

        //clear session
        session()->forget('files');
    }
}
