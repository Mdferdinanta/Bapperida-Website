<?php

namespace App\Livewire\Layout\Gallery;

use App\Models\Album;
use App\Models\Video;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class GalleryList extends Component
{
    use WithPagination, WithoutUrlPagination;

    public function render()
    {
        $albums = Album::orderBy('id', 'desc')->paginate(6);

        $videos = Video::orderBy('id', 'desc')->paginate(6);

        return view('livewire.layout.gallery.gallery-list', [
            'albums' => $albums,
            'videos' => $videos
        ]);
    }
}
