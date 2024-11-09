<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GaleriController;
use App\Livewire\Layout\Home\NewsBapperida;
use App\Http\Controllers\DocumentController;
use App\Livewire\Layout\Pages\Videos\VideoList;

Route::view('/', 'dashboard')
    ->name('dashboard');

Route::view('admin', 'profile')
    ->middleware(['auth', 'verified'])
    ->name('profile');

Route::view('berita-bapperida', 'livewire.layout.pages.news.news-list')
    ->name('page-news-bapperida');

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

Route::get('dokumen/{category}', [DocumentController::class, 'showByCategory'])
    ->name('doc-category');

Route::get('dokumen/{category}/{id}', [DocumentController::class, 'previewDocPDF'])
    ->name('doc-preview');

Route::get('dokumen/{category}/{id}/download', [DocumentController::class, 'downloadPDF'])
    ->name('doc-download');

Route::get('buletin', [DocumentController::class, 'showBuletin'])
    ->name('buletin');

Route::get('buletin/{id}', [DocumentController::class, 'previewPDF'])
    ->name('buletin-preview');

Route::get('galeri-kegiatan', [GaleriController::class, 'show'])
    ->name('galeri');

Route::get('galeri-kegiatan/{id}', [GaleriController::class, 'previewImg'])
    ->name('galeri-preview');


require __DIR__.'/auth.php';
