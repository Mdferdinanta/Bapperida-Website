<?php

namespace App\Livewire\Layout\Pages\Videos;

use App\Models\Video;
use Livewire\Component;

class VideoCard extends Component
{
    public $videos;

    public function mount()
    {
        $this->videos = Video::orderBy('id', 'desc')->take(6)->get();
    }

    public function render()
    {
        return view('livewire.layout.pages.videos.video-card', [
            'videos' => $this->videos,
        ]);
    }
}
