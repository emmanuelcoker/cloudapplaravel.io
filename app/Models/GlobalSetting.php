<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GlobalSetting extends Model
{
    use HasFactory;
    protected $fillable = [
       'country', 'time_zone', 'company_name', 'company_logo', 'plan_id', 'expiry_date',  'industry_id',  'show_announcement', 'time_type', 'menuBackground',  'dashboardLogo', 'path_id', 'company_address', 'company_country', 'company_ID'
    ];

     //get user country
     public function countryName($data){
        return Country::where('iso2', $data)->first()['name'];
    }

    public function industry(){
        return $this->belongsTo('App\Models\Industry');
    }
   
    public function zone(){
        return $this->belongsTo('App\Models\Zone');
    }
   
    public function plan(){
        return $this->belongsTo('App\Models\Plan');
    }
    
    public function path(){
        return $this->belongsTo('App\Models\Path');
    }
}
