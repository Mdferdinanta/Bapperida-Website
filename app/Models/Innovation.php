<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Innovation extends Model
{
    /** @use HasFactory<\Database\Factories\InnovationFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'year',
        'score',
        'label',
        'rank',
        'information',
    ];
}
