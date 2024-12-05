<?php

namespace App\Livewire\Layout\Innovation;

use App\Models\Video;
use Livewire\Component;

class InnovationPreview extends Component
{
    public function render($id)
    {
        $video = Video::findOrFail($id);

        $video->increment('click_count');

        $recommended = Video::orderBy('click_count', 'desc')->take(3)->get();

        return view('livewire.layout.innovation.innovation-preview', [
            'video' => $video,
            'recommended' => $recommended,
        ]);
    }
}
