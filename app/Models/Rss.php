<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rss extends Model
{
    use HasFactory;
    protected $fillable = [
        'tv_id', 'name', 'link', 'image', 'count', 'position'
    ];
}
