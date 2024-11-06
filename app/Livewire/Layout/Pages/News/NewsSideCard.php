<?php

namespace App\Livewire\Layout\Pages\News;

use App\Models\Berita;
use Livewire\Component;

class NewsSideCard extends Component
{
    public $latestNews;

    public function mount()
    {
        $this->latestNews = Berita::orderBy('id', 'desc')->take(3)->get();
    }

    public function render()
    {
        return view('livewire.layout.pages.news.news-side-card', [
            'latestNews' => $this->latestNews,
        ]);
    }
}
