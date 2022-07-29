<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutorial extends Model
{
    protected $fillable = [
        'section_id','title', 'type', 'video'
    ];

    //get section
    public function section(){
        return $this->belongsTo('App\Models\Section');
    }
}
