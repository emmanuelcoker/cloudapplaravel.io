<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeaturePlan extends Model
{
    use HasFactory;
    protected $table = 'feature_plan';
    protected $fillable = [
        'plan_id', 'feature_id'
    ];

    public function plan(){
        return $this->belongsTo('App\Models\Plan');
    }
    
    public function feature(){
        return $this->belongsTo('App\Models\Feature');
    }
}
