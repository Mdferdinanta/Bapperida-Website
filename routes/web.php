<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'dashboard')
    ->name('dashboard');

Route::view('admin', 'profile')
    ->middleware(['auth', 'verified'])
    ->name('profile');

Route::view('berita-bapperida', 'livewire.layout.pages.news.card-list')
    ->name('page-news-bapperida');

Route::view('berita-id', 'livewire.layout.pages.news.preview')
    ->name('news-preview');

require __DIR__.'/auth.php';
