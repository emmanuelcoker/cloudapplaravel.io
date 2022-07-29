<?php

namespace App\Http\Controllers\Client;

use App\CustomClasses\Activity;
use App\CustomClasses\Path;
use App\CustomClasses\Permission;
use App\CustomClasses\StoreRateToArray;
use App\Http\Controllers\Controller;
use App\Imports\AddPTA_Rate;
use App\Imports\AddRate;
use App\Imports\Interest_1;
use App\Models\GlobalSetting;
use App\Models\InterestRate1;
use App\Models\PtaRate;
use App\Models\Rate;
use App\Models\Tab;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class RatesController extends Controller
{

    //FX RATES
    public function index()
    {
        $data['setting'] = GlobalSetting::first();
        if ($data['setting']['show_rate'] && Permission::check('visibility_rate')) {
            $data['rates'] = Rate::latest()->get();
            $data['ptas'] = PtaRate::latest()->get();
            $data['interests'] = InterestRate1::latest()->get();
            $data['tabs'] = Tab::first();
            return view('Client.rates', $data);
        } else {
            return abort(404);
        }
    }




    //store fx-rate
    public function store(Request $request)
    {
        $this->validate($request, [
            'upload' => ['file', 'required', 'mimes:xlsx,xls,csv']
        ]);

        try {
            Excel::import(new AddRate, $request->file('upload'));
        } catch (\Throwable $th) {
            return $th;
            return back()->with('fail', 'An error occurred while uploading your rate to the database, Please cross check your data');
        }

        //storing rates to array
        StoreRateToArray::store();
        Activity::logChanges('FX Rate Excel File', 'Today\'s Rate', 'uploaded'); //log activities

        return back()->with('success', 'FX Rates updated successfully');
    }






    //store PTA RATES
    public function pta_store(Request $request)
    {
        $this->validate($request, [
            'pta_upload' => ['file', 'required', 'mimes:xlsx,xls,csv']
        ]);

        try {
            Excel::import(new AddPTA_Rate, $request->file('pta_upload'));
        } catch (\Throwable $th) {
            return back()->with('fail', 'An error occurred while uploading your rate, Please cross check your data');
        }

        //storing rates to array
        StoreRateToArray::store();
        Activity::logChanges('PTA Rate Excel File', 'Today\'s Rate', 'uploaded'); //log activities
        return back()->with('success', 'PTA Rates updated successfully');
    }





    //store interest Rate 1
    public function interestRate1(Request $request)
    {
        $this->validate($request, [
            'interestRate1_upload' => ['file', 'required', 'mimes:xlsx,xls,csv']
        ]);

        try {
            Excel::import(new Interest_1, $request->file('interestRate1_upload'));
        } catch (\Throwable $th) {
            return back()->with('fail', 'An error occurred while uploading your rate, Please cross check your data');
        }

        //storing rates to array
        StoreRateToArray::store();
        Activity::logChanges('Interest Rate Excel File', 'Today\'s Rate', 'uploaded'); //log activities
        return back()->with('success', 'Interest Rates updated successfully');
    }





    //rate_tab_store
    public function rate_tab_store(Request $request)
    {
        $tab = Tab::first();
        $tab->tab1 = $request->tab1;
        $tab->tab2 = $request->tab2;
        $tab->tab3 = $request->tab3;
        $tab->update();

        Activity::logChanges('FX Tab names', 'Today\'s Rate', 'updated'); //log activities

        return back()->with('success', 'Saved Successfully!');
    }
}
