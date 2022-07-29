<?php

namespace App\Http\Controllers\Api;

use App\CustomClasses\StoreRateToArray;
use App\Http\Controllers\Controller;
use App\Models\GlobalSetting;
use App\Models\InterestRate1;
use App\Models\Log;
use App\Models\PtaRate;
use App\Models\Rate;
use Illuminate\Http\Request;

class RateController extends Controller
{
    public function index()
    {
        //get client choice of rate source i.e db or array
        $rate_settings = GlobalSetting::first()['rate_source'];

        //initiating empty arrays
        $fx_data = [];
        $pta_data = [];
        $interest_rate_data = [];
        $interest_rate_update_data = [];

        //getting form database
        if ($rate_settings == 'db') {

            //fx rate
            $get_fx = Rate::all();
            foreach ($get_fx as $fx_row) {
                $fx_id = $fx_row["id"];
                $fx_currency = strtoupper($fx_row["currency"]);
                $fx_buy = $fx_row["buy"];
                $fx_sell = $fx_row["sell"];
                $fx_data[] = [
                    'id' => $fx_id,
                    'currency' => $fx_currency,
                    'we_buy' => $fx_buy,
                    'we_sell' => $fx_sell,
                    'flag' =>    $fx_currency . '.png'
                ];
            }

            //pta
            $get_pta = PtaRate::all();
            foreach ($get_pta as $pta_row) {
                $rate_id = $pta_row["id"];
                $pta_name = strtoupper($pta_row["currency"]);
                $pta_val = strtoupper($pta_row["value"]);
                $pta_data[] = [
                    'id' => $rate_id,
                    'name' => $pta_name,
                    'value' => $pta_val
                ];
            }

            // $get_interest = InterestRate2::all();
            // foreach ($get_interest as $interest_row) {

            //     $interest_id = $interest_row["interest_rate_id"];
            //     $interest_category = $interest_row["interest_category"];
            //     $interest_above_5m = $interest_row["above_5m"];
            //     $interest_below_5m = $interest_row["below_5m"];
            //     $above_49 = $interest_row["50m"];
            //     $above_99 = $interest_row["100m"];
            //     $interest_rate_data[] = [
            //         'id' => $interest_id,
            //         'category' => $interest_category,
            //         'above_5m' => $interest_above_5m,
            //         'below_5m' => $interest_below_5m,
            //         'above_49' => $above_49,
            //         'above_99' => $above_99
            //     ];
            // }

            //interest
            $get_interest_rate_update = InterestRate1::all();
            foreach ($get_interest_rate_update as $interest_row) {
                $name = $interest_row["name"];
                $value = $interest_row["value"];
                $id = $interest_row["id"];
                $interest_rate_update_data[] = [
                    'id' => $id,
                    'name' => $name,
                    'value' => $value
                ];
            }
        }





        //reading from array
        if ($rate_settings == 'array') {
            //retrieving
            $rates = StoreRateToArray::retrieve();

            //fx rate
            $fxs = $rates['fx'];
            foreach ($fxs as $fx) {
                $fx_id = $fx["id"];
                $fx_currency = strtoupper($fx["currency"]);
                $fx_buy = $fx["buy"];
                $fx_sell = $fx["sell"];
                $fx_data[] = [
                    'id' => $fx_id,
                    'currency' => $fx_currency,
                    'we_buy' => $fx_buy,
                    'we_sell' => $fx_sell,
                    'flag' =>    $fx_currency . '.png'
                ];
            }

            //pta
            $ptas = $rates['pta'];
            foreach ($ptas as $pta) {
                $rate_id = $pta["id"];
                $pta_name = strtoupper($pta["currency"]);
                $pta_val = strtoupper($pta["value"]);
                $pta_data[] = [
                    'id' => $rate_id,
                    'name' => $pta_name,
                    'value' => $pta_val
                ];
            }

            $interests = $rates['interest'];
            foreach ($interests as $interest_row) {
                $name = $interest_row["name"];
                $value = $interest_row["value"];
                $id = $interest_row["id"];
                $interest_rate_update_data[] = [
                    'id' => $id,
                    'name' => $name,
                    'value' => $value
                ];
            }
        }


        //get date last update was made to fx tables
        $log_row = Log::where('log_type', 'fx_update')->first();
        header('Content-type:application/json;charset=utf-8');
        return  response()->json(
            [
                'data_type' => $rate_settings,
                'fx_data' => $fx_data,
                'interest_rate' => $interest_rate_data,
                'interest_rate_update' => $interest_rate_update_data,
                'pta_data' => $pta_data,
                'last_update_date' => date('d-F-Y', strtotime($log_row['date'])),
                'last_update_period' => $log_row['date'],
                'update_source' => 'server',
            ],
            200
        );
    }
}
