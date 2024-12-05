<?php

namespace App\Livewire\Layout\Gallery;

use App\Models\Video;
use Livewire\Component;

class VideoPreview extends Component
{
    public function render($id)
    {
        $video = Video::findOrFail($id);

        $video->increment('click_count');

        $recommended = Video::orderBy('click_count', 'desc')->take(3)->get();

        return view('livewire.layout.gallery.video-preview', [
            'video' => $video,
            'recommended' => $recommended,
        ]);
    }
}
