<?php

namespace App\Livewire\Layout\Gallery;

use App\Models\Album;
use App\Models\Image;
use Livewire\Component;

class ImagePreview extends Component
{
    public function render($id)
    {
        $imageId = Image::findOrFail($id);
        $images = Image::where('album_id', $imageId->album_id)->get();
        $album = Album::findOrFail($imageId->album_id);

        // dd($image, $album);
        return view('livewire.layout.gallery.image-preview', [
            'images' => $images,
            'album' => $album
        ]);
    }
}
