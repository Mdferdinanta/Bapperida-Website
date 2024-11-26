<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\News\BogorNews;
use App\Livewire\Pages\Profiles\Staff;
use App\Livewire\Pages\Profiles\Schedule;
use App\Livewire\Layout\News\NewsContentPreview;

Route::view('/', 'dashboard')
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth', 'verified'])
    ->name('profile');

Route::view('struktur-organisasi', 'livewire.pages.profiles.structure')
    ->name('structure');

Route::view('pejabat-bapperida', 'livewire.pages.profiles.staff')
    ->name('staff');

Route::view('agenda-kegiatan', 'livewire.pages.profiles.schedule')
    ->name('schedule');

Route::view('berita-bapperida', 'livewire.pages.news.bogor-news')
    ->name('news');

require __DIR__.'/auth.php';

Route::get('berita-bapperida/{id}', [NewsContentPreview::class, 'render'] )
    ->name('news-preview');
