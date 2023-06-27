<?php

namespace App\CustomClasses;


/* 
    This facade class was created to specify the path where assets should be called from
    because the default public path on a local server is the public folder but when moved to the server,
    the root path changes to public_html, so with this class, you can specity path.
*/


class Path{
    
    private static $asset = '/';
    public static $tvPath = '/';
    public static $apiPath = '/';
    private static $livewireAsset = '/';

    public static function asset($path){
        $url_extract = substr($path, 0, 1);
        if($url_extract === '/'){
            $url = ltrim($path, '/');
        }else{
            $url = $path;
        }

       return self::$asset.$url;
    }

    public static function livewireAsset($path = null){
        $url_extract = substr($path, 0, 1);
        if($url_extract === '/'){
            $url = ltrim($path, '/');
        }else{
            $url = $path;
        }

       return self::$livewireAsset.$url;
    }
    
     public static function serverFullAsset($path){
        $url_extract = substr($path, 0, 1);
        if($url_extract === '/'){
            $url = ltrim($path, '/');
        }else{
            $url = $path;
        }

       return env('SERVER_ASSET').self::$asset.$url;
    }
   
}   