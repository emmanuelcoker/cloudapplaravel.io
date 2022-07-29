<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;
    protected $fillable = [
        'role_id', 'message'
    ];

    public function role(){
        return $this->belongsTo('App\Models\Role', 'role_id');
    }
    
    
}
