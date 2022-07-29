<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginLog extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'user_agent', 'ip_address', 'role_id'
   ];

   //get agent
   public function user(){
        return $this->belongsTo('App\Models\User');
    }
   //get role
   public function role(){
        return $this->belongsTo('App\Models\Role');
    }
}
