<?php

namespace App\Livewire\Layout\News;

use App\Models\News;
use Livewire\Component;

class HomeNews extends Component
{
    public function render()
    {
        $leftNews = News::orderBy('id', 'desc')->first();

        $rightNews = News::orderBy('id', 'desc')->skip(1)->take(4)->get();

        return view('livewire.layout.news.home-news', [
            'leftNews' => $leftNews,
            'rightNews' => $rightNews,
        ]);
    }
}
