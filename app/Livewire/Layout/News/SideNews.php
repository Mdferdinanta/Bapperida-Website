<?php

namespace App\Livewire\Layout\News;

use App\Models\News;
use Livewire\Component;

class SideNews extends Component
{
    public function render()
    {
        $news = News::orderBy('id', 'desc')->take(3)->get();

        return view('livewire.layout.news.side-news', compact('news'));
    }
}
