<?php

namespace App\Imports;

use App\Models\Rate;
use Maatwebsite\Excel\Concerns\ToModel;


class AddRate implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $rate = Rate::find(@$row[0]);

        if ($rate) {
            $rate->currency = @$row[1];
            $rate->buy = @$row[2];
            $rate->sell = @$row[3];
            $rate->update();
        } else {
            return new Rate([
                'currency' => @$row[1],
                'buy' => @$row[2],
                'sell' => @$row[3]
            ]);
        }
    }
}
