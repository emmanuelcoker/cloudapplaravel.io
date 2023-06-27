<?php

namespace App\CustomClasses;

use App\Models\InterestRate1;
use App\Models\PtaRate;
use App\Models\Rate;

class StoreRateToArray
{

    private static $file = 'Rate/array.php';

    //storing rates in array into a file
    public static function store()
    {
        $fx = Rate::all();
        $pta = PtaRate::all();
        $interest = InterestRate1::all();
        $data = [
            'fx' => $fx,
            'pta' => $pta,
            'interest' => $interest
        ];

        file_put_contents(Path::serverFullAsset(self::$file), serialize($data));
        return 'success';
    }


    public static function retrieve()
    {
        return $var = unserialize(file_get_contents(Path::serverFullAsset(self::$file)));
    }
}
