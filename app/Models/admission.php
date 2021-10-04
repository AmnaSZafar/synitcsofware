<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admission extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'email',
        'city',
        'program',
        'shift',
        'phone',
        'education',
    ];
}
