<?php

namespace App\CustomClasses;

use App\Models\Permission as ModelsPermission;
use Illuminate\Support\Facades\Auth;

class Permission{


    public static function check($key){
        $permission = ModelsPermission::where('key', $key)->first();
        if($permission && $permission->role){
            return in_array(Auth::user()['role']['name'], json_decode($permission->role));
        }else{
            return false;
        }
    } 

}