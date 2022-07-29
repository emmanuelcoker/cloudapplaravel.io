<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tab extends Model
{
    use HasFactory;
    protected $fillable = [
        'tab1',
        'tab2',
        'tab3',
        'tab4',
        'tab5',
        'tab6',
        'news_title',
        'announcement',
        'training'
    ];
}
