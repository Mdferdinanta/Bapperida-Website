<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function show()
    {
        $albums = Galeri::where('album', '!=', null)->get()->groupBy('album');

        return view('livewire.layout.pages.galleries.gallery-list', compact('albums'));
    }

    public function previewImg($id)
    {
        $image = Galeri::findOrFail($id);
        $album = Galeri::where('album', $image->album)->get();

        return view('livewire.layout.pages.galleries.gallery-preview', [
            'image' => $image,
            'album' => $album
        ]);
    }
}
