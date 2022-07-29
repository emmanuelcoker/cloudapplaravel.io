<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = [
        'name'
    ];

     //get faqs
     public function faqs(){
        return $this->hasMany('App\Models\Faq');
    }
     
    //get tutorials
     public function tutorials(){
        return $this->hasMany('App\Models\Tutorial', 'section_id');
    }
}
