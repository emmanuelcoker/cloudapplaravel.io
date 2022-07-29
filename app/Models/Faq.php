<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $fillable = [
        'section_id','question', 'answer'
    ];


    //get section
    public function section(){
        return $this->belongsTo('App\Models\Section');
    }

}
