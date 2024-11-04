<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public $latestVideos;
    public function index()
    {
        $this->latestVideos = Video::orderBy('created_at', 'desc')->get(6);

        return view('components.video-card', compact('latestVideos'));
    }
    public function player()
    {
        $this->latestVideos = Video::orderBy('created_at', 'desc')->get(6);

        return view('components.video-card', compact('latestVideos'));
    }
}
