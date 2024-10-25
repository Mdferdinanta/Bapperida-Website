<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Buletin extends Model
{
    use HasFactory;

    protected $fillable = [
        'buletin_id', 'img_cover'
    ];

    public function index()
    {
        
    }
}
