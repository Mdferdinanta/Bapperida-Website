<?php

namespace App\Livewire\Layout\Pages\Videos;

use App\Models\Video;
use Livewire\Component;

class VideoList extends Component
{
    public function show($id)
    {
        $video = Video::findOrFail($id);
        return view('livewire.layout.pages.videos.video-preview', compact('video'));
    }

    public function render()
    {
        return view('livewire.layout.pages.videos.video-list');
    }
}
