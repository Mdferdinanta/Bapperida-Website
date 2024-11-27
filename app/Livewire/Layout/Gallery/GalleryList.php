<?php

namespace App\Livewire\Layout\Gallery;

use App\Models\Image;
use App\Models\Video;
use Livewire\Component;

class GalleryList extends Component
{

    public function render()
    {
        $albums = Image::where('album_id', '!=', null)->get()->groupBy('album_id');
        $playlists = Video::where('playlist_id', '!=', null)->get()->groupBy('playlist_id');
        $videos = Video::all();

        // dd($albums, $playlists->);
        return view('livewire.layout.gallery.gallery-list', [
            // 'images' => $images,
            'videos' => $videos,
            'albums' => $albums,
            'playlists' => $playlists
        ]);
    }
}
