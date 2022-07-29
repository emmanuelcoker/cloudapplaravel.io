<?php

namespace App\Imports;

use App\Models\PtaRate;
use Maatwebsite\Excel\Concerns\ToModel;


class AddPTA_Rate implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $rate = PtaRate::find(@$row[0]);

        if ($rate) {
            $rate->currency = @$row[1];
            $rate->value = @$row[2];
            $rate->update();
        } else {
            return new PtaRate([
                'currency' => @$row[1],
                'value' => @$row[2],
            ]);
        }
    }
}
