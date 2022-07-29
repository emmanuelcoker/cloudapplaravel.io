<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstallController extends Controller
{
    public function store_company_info(Request $request){
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'location' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        
    }
}
