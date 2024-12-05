<?php

namespace App\Livewire\Layout\News;

use App\Models\News;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;

class NewsList extends Component
{
    use WithPagination, WithoutUrlPagination;

    public $search;

    public function render()
    {
        $news = News::where('title','LIKE','%'.$this->search.'%')
        ->orWhere('author','LIKE','%'.$this->search.'%')
        ->orWhere('content','LIKE','%'.$this->search.'%')
        ->orderBy('id', 'desc')
        ->paginate(5);

        return view('livewire.layout.news.news-list', compact('news'));
    }
}
