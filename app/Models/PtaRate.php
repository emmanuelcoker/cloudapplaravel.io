<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PtaRate extends Model
{
    use HasFactory;
    protected $fillable = [
        'currency', 'value'
    ];
}
