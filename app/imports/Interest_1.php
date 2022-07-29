<?php

namespace App\Imports;

use App\Models\InterestRate1;
use Maatwebsite\Excel\Concerns\ToModel;


class Interest_1 implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $rate = InterestRate1::find(@$row[0]);

        if ($rate) {
            $rate->name = @$row[1];
            $rate->value = @$row[2];
            $rate->update();
        } else {
            return new InterestRate1([
                'name' => @$row[1],
                'value' => @$row[2],
            ]);
        }
    }
}
