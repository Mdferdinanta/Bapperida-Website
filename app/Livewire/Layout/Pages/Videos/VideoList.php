<?php

namespace App\Livewire\Layout\Pages\Videos;

use App\Models\Video;
use Livewire\Component;

class VideoList extends Component
{
    public $videos;

    public function showInovasi()
    {
        $this->videos = Video::where('kategori', 'inovasi')->paginate(9);

        return view('livewire.layout.pages.videos.video-list', [
            'videos' => $this->videos,
        ]);
    }

    public function showTwo()
    {
        $this->videos = Video::where('kategori', 'two')->paginate(9);
        return view('livewire.layout.pages.videos.video-list', [
            'videos' => $this->videos,
        ]);
    }

    public function showThree()
    {
        $this->videos = Video::where('kategori', 'three')->paginate(9);
        return view('livewire.layout.pages.videos.video-list', [
            'videos' => $this->videos,
        ]);
    }

    public function show($id)
    {
        $video = Video::findOrFail($id);
        // count times clicked
        $video->increment('click_count');

        // show as recommended
        $recommended = Video::orderBy('click_count', 'desc')->take(4)->get();

        // dd($recommended, $video);
        return view('livewire.layout.pages.videos.video-preview', [
            'video' => $video,
            'recommended' => $recommended,
        ]);
    }

    public function render()
    {
        return view('livewire.layout.pages.videos.video-list');
    }
}
