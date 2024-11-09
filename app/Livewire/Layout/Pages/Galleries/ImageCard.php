<?php

namespace App\Livewire\Layout\Pages\Galleries;

use Livewire\Component;

class ImageCard extends Component
{
    public $album;

    public function mount($album)
    {
        $this->album = $album;
    }

    public function render()
    {
        return view('livewire.layout.pages.galleries.image-card');
    }
}
