<?php

namespace App\Http\Controllers\Client;

use App\CustomClasses\Permission;
use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        if (Permission::check('visibility_manage_users')) {
            return view('Client.users');
        } else {
            return abort(404);
        }
    }
}
