<?php

namespace App\Http\Controllers\Api;

use App\CustomClasses\Schedule;
use App\Http\Controllers\Controller;
use App\Models\Tv;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index(Request $request){
        $id = $request->tv;
        $mediaItem = $request->mediaItem;
        $operation = $request->operation;
        $tv = Tv::find($id);
        session(['tv' => $tv]);
        return Schedule::updateTv($id, $mediaItem, $operation);
    }
}
