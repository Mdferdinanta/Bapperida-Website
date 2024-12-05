<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    protected $fillable = [
        'name',
        'email',
        'department',
        'intention',
        'date',
        'time',
        'participant',
        'phone',
    ];
}
