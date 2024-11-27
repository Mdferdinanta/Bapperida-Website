<?php

use App\Livewire\Layout\Documents\DocumentList;
use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\News\BogorNews;
use App\Livewire\Pages\Profiles\Staff;
use App\Livewire\Pages\Profiles\Schedule;
use App\Livewire\Pages\Documents\Document;
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
