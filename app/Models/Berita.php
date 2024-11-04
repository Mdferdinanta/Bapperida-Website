<?php

namespace App\Models;

use Database\Factories\BeritaFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Berita extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul', 'artikel', 'thumbnail'
    ];

    protected static function newFactory()
    {
        return BeritaFactory::new();
    }

}
