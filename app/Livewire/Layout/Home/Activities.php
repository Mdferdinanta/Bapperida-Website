<?php

namespace App\Livewire\Layout\Home;

use App\Models\Galeri;
use Livewire\Component;

class Activities extends Component
{
    public $images;

    public function mount()
    {
        $this->images = Galeri::orderBy('id', 'desc')->take(10)->get();
    }

    public function render()
    {
        return view('livewire.layout.home.activities', [
            'images' => $this->images,
        ]);
    }
}
