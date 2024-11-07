<?php

namespace App\Livewire\Layout\Home;

use App\Models\Berita;
use Livewire\Component;

class NewsBapperida extends Component
{
    public $latestNews;
    public $otherNews;

    public function mount()
    {
        $this->latestNews = Berita::orderBy('id', 'desc')->first();

        $this->otherNews = Berita::when($this->latestNews, function($query) {
                                    return $query->where('id', '!=', $this->latestNews->id);
                                })
                                ->take(4)
                                ->orderBy('id', 'desc')
                                ->get();
    }

    public function show($id)
    {
        $news = Berita::findOrFail($id);
        return view('livewire.layout.pages.news.news-preview', compact('news'));
    }

    public function render()
    {
        return view('livewire.layout.home.news-bapperida', [
            'latestNews' => $this->latestNews,
            'otherNews' => $this->otherNews
        ]);
    }
}
