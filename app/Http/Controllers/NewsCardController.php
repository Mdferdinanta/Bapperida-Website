<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsCardController extends Controller
{
    public $latestNews;
    public function index()
    {
        $this->latestNews = News::orderBy('created_at', 'desc')->get(3);

        return view('components.berita-card', compact('latestNews'));
    }
}