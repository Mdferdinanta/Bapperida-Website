<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IndexCategories extends Model
{
    protected $fillable = ['title', 'description'];

    public function indices()
    {
        return $this->hasMany(Index::class);
    }
}
