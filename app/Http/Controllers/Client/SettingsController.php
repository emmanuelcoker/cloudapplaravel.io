<?php

namespace App\Http\Controllers\Client;

use App\CustomClasses\Activity;
use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    public function index()
    {
        return view('Client.profile.index');
    }


    public function edit()
    {
        $data['countries'] = Country::all();
        return view('Client.profile.edit', $data);
    }



    

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        //to check if password is up to 8
        if (strlen($request->password) >= 8) {
            //to check if password1 and confirm password is the same
            if ($request->password == $request->confirm) {
                $password = Hash::make($request->password);

                $user->update([
                    'password' => $password,
                ]);

                Activity::logChanges(Auth::user()->name, 'Profile', 'updated'); //log activities
                
                return back()->with('success', 'Password changed successfully');
            } else {
                return back()->with('fail', 'Please confirm your the password');
            }
            //end  if

        } else {
            return back()->with('fail', 'Password must be greater than 8 charaters');
        }
    }
}
