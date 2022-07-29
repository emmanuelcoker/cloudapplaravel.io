<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announce extends Model
{
    use HasFactory;
    protected $fillable = [
        'tv_id',  'image', 'text', 'template', 'start', 'end', 'title', 'color'
    ];
}
