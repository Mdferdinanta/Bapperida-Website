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

    public $search;

    public function render()
    {
        $albums = Album::where('name', 'like', '%'.$this->search.'%')
        ->orderBy('id', 'desc')
        ->paginate(6);

        $videos = Video::where('video_type', 2)
        ->where(function($query){
            $query->where('title', 'like', '%'.$this->search.'%')
            ->orWhere('description', 'like', '%'.$this->search.'%');
        })
        ->orderBy('id', 'desc')
        ->paginate(6);

        return view('livewire.layout.gallery.gallery-list', [
            'albums' => $albums,
            'videos' => $videos
        ]);
    }
}
