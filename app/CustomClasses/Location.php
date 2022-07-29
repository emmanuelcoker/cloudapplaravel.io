<?php

namespace App\CustomClasses;

use App\Models\Training;

class Location
{


    //move all styling and js to folder
    public static function recurse_copy($src, $dst)
    {
        $dir = opendir($src);
        @mkdir($dst, 0777);
        while (false !== ($file = readdir($dir))) {
            if (($file != '.') && ($file != '..')) {
                if (is_dir($src . '/' . $file)) {
                    self::recurse_copy($src . '/' . $file, $dst . '/' . $file);
                } else {
                    copy($src . '/' . $file, $dst . '/' . $file);
                }
            }
        }
        closedir($dir);
    }



    public static function createNewDisplay($company, $box)
    {
        $targetDir1 = $company.'/'.$box;
        // $targetDir2 = $company.'/'.$box;

        //source file path
        $path1 = 'Device1';
        // $path2 = 'Device2';

        if (!file_exists($company)) {
            //make destination file
            mkdir($company, 0777);
        }
        
        if (!file_exists($targetDir1)) {
            //make destination file
            mkdir($targetDir1, 0777);
        }

        
        // if (!file_exists($targetDir2)) {
        //     //make destination file
        //     mkdir($targetDir2, 0777);
        // }


        self::recurse_copy($path1, $targetDir1);
        // self::recurse_copy($path2, $targetDir2);
    }

    // public static function deleteDisplay($path){
    //     chown($path,465);
    //     array_map('unlink', glob("$path/*"));
    //     rmdir($path);
    //     dd('ok');
    // }
}
