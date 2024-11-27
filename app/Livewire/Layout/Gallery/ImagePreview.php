<?php

namespace App\Livewire\Layout\Gallery;

use App\Models\Album;
use App\Models\Image;
use Livewire\Component;

class ImagePreview extends Component
{
    public function render($id)
    {
        $image = Image::findOrFail($id);
        $album = Image::where('album_id', $image->album_id)->get();

        // dd($image, $album);
        return view('livewire.layout.gallery.image-preview', [
            'image' => $image,
            'album' => $album
        ]);
    }
}
