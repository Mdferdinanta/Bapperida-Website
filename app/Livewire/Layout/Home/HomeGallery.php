<?php

namespace App\Livewire\Layout\Home;

use App\Models\Image;
use Livewire\Component;

class HomeGallery extends Component
{
    public function render()
    {
        $images = Image::latest()->take(7)->get();

        return view('livewire.layout.home.home-gallery', [
            'images' => $images,
        ]);
    }
}
