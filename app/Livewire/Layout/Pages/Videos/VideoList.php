<?php

namespace App\Livewire\Layout\Pages\Videos;

use App\Models\Video;
use Livewire\Component;

class VideoList extends Component
{
    public $videos;

    public function showInovasi()
    {
        $this->videos = Video::where('kategori', 'inovasi')->get();
        return view('livewire.layout.pages.videos.video-list', [
            'videos' => $this->videos,
        ]);
    }

    public function showTwo()
    {
        $this->videos = Video::where('kategori', 'two')->get();
        return view('livewire.layout.pages.videos.video-list', [
            'videos' => $this->videos,
        ]);
    }

    public function showThree()
    {
        $this->videos = Video::where('kategori', 'three')->get();
        return view('livewire.layout.pages.videos.video-list', [
            'videos' => $this->videos,
        ]);
    }

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
