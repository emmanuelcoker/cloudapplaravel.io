<?php

namespace App\CustomClasses;

use App\Models\GlobalSetting;

/* 
    To manage all uploads, with this i can change the path of the application 
*/
class Variables{


    //used for getting path for  uploading files
    public  static function uploadPath($file){
        $path = GlobalSetting::first()['company_ID'].'/'.session()->get('tv')['name'].'/App/'.$file;
        return Path::serverFullAsset($path);
    }


    //path to tv resources
    public  static function tvPath($file){
        $path = GlobalSetting::first()['company_ID'].'/'.session()->get('tv')['name'].'/App/'.$file;
        return Path::asset($path);
    }
    

    //used in update tv schedule class
    public  static function pathToTv($name, $file){
        return GlobalSetting::first()['company_ID'].'/'.$name.'/App/'.$file;
    }
    
    //get different tv path url
    public  static function displayUrl($file){
        $path = GlobalSetting::first()['company_ID'].'/'.$file.'/App/';
        return Path::asset($path);
    }
   
   

    //path to zip directory
    public  static function zipPath(){
        return GlobalSetting::first()['company_ID'].'/'.session()->get('tv')['name'].'/Zip/App.zip';
    }
    

    
    public  static function zipSource(){
        return GlobalSetting::first()['company_ID'].'/'.session()->get('tv')['name'].'/App/';
    }
   
   

    //path to update directory
    public  static function updatePath($file){
        return GlobalSetting::first()['company_ID'].'/'.session()->get('tv')['name'].'/Api/'.$file;
    }
    
}