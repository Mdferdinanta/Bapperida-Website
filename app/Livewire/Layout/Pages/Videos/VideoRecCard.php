<?php

namespace App\Livewire\Layout\Pages\Videos;

use Livewire\Component;

class VideoRecCard extends Component
{
    public $video;

    public function mount($video)
    {
        $this->video = $video;
    }
    public function render()
    {
        return view('livewire.layout.pages.videos.video-rec-card', [
            'video' => $this->video,
        ]);
    }
}
