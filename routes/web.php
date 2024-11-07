<?php

use App\Http\Controllers\DocumentController;
use Illuminate\Support\Facades\Route;
use App\Livewire\Layout\Home\NewsBapperida;
use App\Livewire\Layout\Pages\Videos\VideoList;

Route::view('/', 'dashboard')
    ->name('dashboard');

Route::view('admin', 'profile')
    ->middleware(['auth', 'verified'])
    ->name('profile');

Route::view('berita-bapperida', 'livewire.layout.pages.news.news-list')
    ->name('page-news-bapperida');

Route::view('buletin', 'livewire.layout.pages.buletins.buletin-list')
    ->name('page-buletin');

Route::view('galeri-kegiatan', 'livewire.layout.pages.galleries.gallery-list')
    ->name('page-gallery');

Route::view('struktur-organisasi', 'livewire.layout.pages.profiles.structure')
    ->name('page-structure');

Route::view('agenda', 'livewire.layout.pages.profiles.schedules')
    ->name('page-schedules');

Route::view('profil-anggota', 'livewire.layout.pages.profiles.profile-list')
    ->name('page-profile');

Route::view('video/inovasi', 'livewire.layout.pages.videos.video-list')
    ->name('video-list');

// Get Routes

Route::get('berita/{id}', [NewsBapperida::class, 'show'])
    ->name('news-preview');

Route::get('video/inovasi/{id}', [VideoList::class, 'show'])
    ->name('video-preview');

Route::get('galeri-kegiatan/id', [VideoList::class, 'show'])
    ->name('gallery-preview');

Route::get('buletin/id', [VideoList::class, 'show'])
    ->name('buletin-preview');

Route::get('dokumen/{category}/{id}', [DocumentController::class, 'showPreview'])
    ->name('doc-preview');

Route::get('dokumen/{category}', [DocumentController::class, 'showByCategory'])
    ->name('doc-category');

require __DIR__.'/auth.php';
