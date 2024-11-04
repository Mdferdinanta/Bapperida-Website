<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Layout\Home\NewsBapperida;

Route::view('/', 'dashboard')
    ->name('dashboard');

Route::view('admin', 'profile')
    ->middleware(['auth', 'verified'])
    ->name('profile');

Route::view('berita-bapperida', 'livewire.layout.pages.news.card-list')
    ->name('page-news-bapperida');




// Get Routes

Route::get('/berita/{id}', [NewsBapperida::class, 'show'])->name('news-preview');








require __DIR__.'/auth.php';
