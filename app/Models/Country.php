<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $fillable = [
       'id', 'sortname','name'
    ];

    public function states(){
        return $this->hasMany('App\Models\State');
    }
    public function cities(){
        return $this->hasMany('App\Models\City');
    }
}
