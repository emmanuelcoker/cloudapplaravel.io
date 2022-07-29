<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    protected $fillable = [
        'tv_id', 'title', 'description', 'position', 'file', 'type', 'extension', 'start', 'end',  'content_type'
    ];

 
}
