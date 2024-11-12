<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Agenda extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'location',
        'date',
        'time_start',
        'time_finish',
    ];

    protected $casts = [
        'date' => 'datetime', // Ensures the 'date' field is a Carbon instance
        'time_start' => 'datetime', // Makes sure time_start is a Carbon instance
        'time_finish' => 'datetime', // Makes sure time_finish is a Carbon instance
    ];

}
