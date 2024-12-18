<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    /** @use HasFactory<\Database\Factories\ScheduleFactory> */
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
        'date' => 'datetime',
        'time_start' => 'datetime',
        'time_finish' => 'datetime',
    ];
}
