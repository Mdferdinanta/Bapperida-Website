<?php

namespace App\Livewire\Layout;

use Livewire\Component;
use App\Models\News;

class NewsLayout extends Component
{
    public $latestNews;
    public $otherNews;
    public function mount()
    {
        $this->latestNews = News::orderBy('created_at', 'desc')->first();

        $this->otherNews = News::orderBy('created_at', 'desc')
                                    ->when($this->latestNews, function($query) {
                                        return $query->where('id', '!=', $this->latestNews->id);
                                    })
                                    ->take(4)
                                    ->get();

        // dd($this->latestNews, $this->otherNews);
    }

    public function render()
    {
        return view('livewire.layout.news-layout');
    }
}
