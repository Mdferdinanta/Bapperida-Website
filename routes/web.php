<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\News\BogorNews;
use App\Livewire\Pages\Profiles\Staff;
use App\Livewire\Pages\Buletin\Buletin;
use App\Livewire\Pages\Gallery\Gallery;
use App\Livewire\Pages\Profiles\Schedule;
use App\Livewire\Pages\Documents\Document;
use App\Livewire\Layout\Buletin\BuletinList;
use App\Livewire\Layout\Gallery\ImagePreview;
use App\Livewire\Layout\Gallery\VideoPreview;
use App\Livewire\Layout\Buletin\BuletinPreview;
use App\Livewire\Layout\Documents\DocumentList;
use App\Livewire\Layout\News\NewsContentPreview;
use App\Livewire\Layout\Documents\DocumentPreview;

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

Route::view('indeks', 'livewire.pages.documents.index-page')
    ->name('index');

require __DIR__.'/auth.php';

Route::get('berita-bapperida/{id}', [NewsContentPreview::class, 'render'] )
    ->name('news-preview');

Route::get('dokumen/{category}', [Document::class, 'render'])
    ->name('document');

Route::get('dokumen/{category}/{id}', [DocumentPreview::class, 'render'])
    ->name('document-preview');

Route::get('dokumen/{category}/{id}/download', [DocumentList::class, 'download'])
    ->name('document-download');

Route::get('buletin', [Buletin::class, 'render'])
    ->name('buletin');

Route::get('buletin/{id}', [BuletinPreview::class, 'render'])
    ->name('buletin-preview');

Route::get('buletin/{id}/download', [BuletinList::class, 'download'])
    ->name('buletin-download');

Route::get('galeri', [Gallery::class, 'render'])
    ->name('gallery');

Route::get('galeri/album/{id}', [ImagePreview::class, 'render'])
    ->name('image-preview');

Route::get('galeri/video/{id}', [VideoPreview::class, 'render'])
    ->name('video-preview');
