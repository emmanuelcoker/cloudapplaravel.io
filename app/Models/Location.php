<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'country_id', 'state_id', 'city_id', 'address', 'supervisor', 'supervisor_phone', 'supervisor_email', 'manager', 'manager_phone', 'manager_email'];

    public function setNameAttribute($value){
        $this->attributes['name'] = ucfirst($value);
    }
    

    public function country(){
        return $this->belongsTo('App\Models\Country');
    }
    
    public function state(){
        return $this->belongsTo('App\Models\State');
    }
    
    public function city(){
        return $this->belongsTo('App\Models\City');
    }
    
    public function tvs(){
        return $this->hasMany('App\Models\Tv');
    }
}
