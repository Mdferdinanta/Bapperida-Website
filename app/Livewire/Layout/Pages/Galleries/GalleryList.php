<?php

namespace App\Livewire\Layout\Pages\Galleries;

use App\Models\Galeri;
use Livewire\Component;

class GalleryList extends Component
{
    public function render()
    {
        return view('livewire.layout.pages.galleries.gallery-list', compact('images'));
    }
}
