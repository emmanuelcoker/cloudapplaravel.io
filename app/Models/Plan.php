<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'price', 'image', 'banners', 'logos', 'media',  'schedule_video', 'locations', 'displays'
    ];

    public function setNameAttribute($value){
        $this->attributes['name'] = ucfirst($value);
    }

    // public function features(){
    //     return $this->belongsToMany('App\Models\Feature')->latest();
    // }
}

