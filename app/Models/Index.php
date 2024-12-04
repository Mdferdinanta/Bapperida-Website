<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Index extends Model
{
    /** @use HasFactory<\Database\Factories\IndexFactory> */
    use HasFactory;

    protected $fillable = ['name', 'category_id', 'year', 'score', 'grade', 'rank', 'information'];

    protected $casts = [
        'year' => 'datetime',
        'score' => 'float',
    ];

    public function category()
    {
        return $this->belongsTo(IndexCategories::class);
    }
}
