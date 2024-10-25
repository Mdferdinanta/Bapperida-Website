<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'judul', 'date_published', 'konten', 'thumbnail'
    ];

    // Add this property to cast date_published to a Carbon instance
    protected $casts = [
        'date_published' => 'datetime', // This will cast the date_published attribute to Carbon
    ];
}
