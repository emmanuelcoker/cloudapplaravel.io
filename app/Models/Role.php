<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];
    
    //get all the users under a particular role
    public function users(){
        return $this->hasMany('App\Model\User')->latest();
    }

    public function setNameAttribute($value){
        $this->attributes['name'] = ucfirst($value);
      }
}
