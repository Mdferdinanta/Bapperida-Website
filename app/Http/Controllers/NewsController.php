<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public $latestNews;
    public $otherNews;

    public function index()
    {
        $this->latestNews = News::orderBy('created_at', 'desc')->first();
        $this->otherNews = News::orderBy('created_at', 'desc')
                                ->skip(1)
                                ->take(4)
                                ->get();

        $latestNews = $this->latestNews;
        $otherNews = $this->otherNews;

        return view('dashboard', compact('latestNews', 'otherNews'));
    }
}
