<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    /** @use HasFactory<\Database\Factories\VideoFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'url',
        'link_type',
        'thumbnail',
        'description',
        'playlist_id',
        'date',
        'click_count',
        'video_type',
        'department',
    ];

    protected $casts = [
        'date' => 'datetime',
    ];

    public function playlist()
    {
        return $this->belongsTo(Playlist::class);
    }
}
