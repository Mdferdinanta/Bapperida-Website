<?php

namespace App\Livewire\Layout\Pages\News;

use Livewire\Component;

class NewsCard extends Component
{
    public $news;

    public function mount($news)
    {
        $this->news = $news;
    }

    public function render()
    {
        return view('livewire.layout.pages.news.news-card', [
            'news' => $this->news
        ]);
    }
}
