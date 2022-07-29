<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    use HasFactory;
    protected $fillable = [
        'industry_id', 'name',
    ];


    public function tvs(){
        return $this->hasMany('App\Models\Tv');
    }
}
