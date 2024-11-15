<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class NewsController extends Controller
{
    use WithPagination;

    public $news;

    public function show()
    {
        $this->news = Berita::latest()->paginate(4);

        return view('livewire.layout.pages.news.news-list', [
            'news' => $this->news
        ]);
    }
}
