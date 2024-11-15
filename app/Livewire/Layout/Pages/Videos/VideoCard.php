<?php

namespace App\Livewire\Layout\Pages\Videos;

use App\Models\Video;
use Livewire\Component;

class VideoCard extends Component
{
    public $video;

    public function mount($video)
    {
        $this->video = $video;
    }

    public function render()
    {
        return view('livewire.layout.pages.videos.video-card', [
            'video' => $this->video,
        ]);
    }
}
