<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    /** @use HasFactory<\Database\Factories\PlaylistFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function videos()
    {
        return $this->hasMany(Video::class);
    }
}
