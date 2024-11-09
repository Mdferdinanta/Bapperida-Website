<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dokumen extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'kategori', // fillable with [Perencanaan Pembangunan, Penelitian Pengembangan, Indeks, Standar Pelayanan, Peraturan, Rencana Kerja, Buletin]
        'dokumen',
        'original_name',
        'thumbnail',
    ];
}
