<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Document extends Model
{    //
    use HasFactory;

    protected $fillable = [
        'judul', 'kategori', 'file', 'date_published'
    ];

    public function index()
    {
        
    }
}



// $table->string('judul');
// $table->string('kategori');
// $table->string('file');
// $table->date('date_published');