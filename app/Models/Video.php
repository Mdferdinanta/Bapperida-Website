<?php

namespace App\Models;

use Database\Factories\VideoFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul', 'embed', 'deskripsi', 'thumbnail'
    ];

    protected static function newFactory()
    {
        return VideoFactory::new();
    }
}
