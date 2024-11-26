<?php

namespace App\Livewire\Layout\News;

use App\Models\News;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;

class NewsContentCard extends Component
{
    use WithPagination, WithoutUrlPagination;
    public function render()
    {
        $news = News::orderBy('id', 'desc')->paginate(5);

        return view('livewire.layout.news.news-content-card', compact('news'));
    }
}
