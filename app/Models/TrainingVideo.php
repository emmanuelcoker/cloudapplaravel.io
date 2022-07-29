<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingVideo extends Model
{
    use HasFactory;
    protected $fillable = [
        'tv_id', 'position', 'title', 'video',  'morning', 'afternoon', 'evening'
    ];

    // public function training(){
    //     return $this->belongsTo('App\Models\Training');
    // }
}
