<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'dashboard')
    ->name('dashboard');

Route::view('admin', 'profile')
    ->middleware(['auth', 'verified'])
    ->name('profile');

Route::view('berita-bapperida', 'livewire.layout.pages.news-bapperida')
    ->name('page-news-bapperida');

require __DIR__.'/auth.php';
