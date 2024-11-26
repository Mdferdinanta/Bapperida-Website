<?php

namespace App\Livewire\Layout\News;

use App\Models\News;
use Livewire\Component;

class NewsContentPreview extends Component
{
    public $newsId;
    public $news;

    public function render($id)
    {
        $this->newsId = $id;

        $this->news = News::findOrFail($id);

        return view('livewire.layout.news.news-content-preview', [
            'news' => $this->news
        ]);
    }
}
