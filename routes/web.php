<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'dashboard')
    ->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


// Pages
Route::view('profil/struktur-organisasi', 'profile/struktur')
    ->name('profil_struktur');

Route::view('profil/pejabat', 'profile/pejabat')
    ->name('profil_pejabat');

Route::view('profil/agenda', 'profile/agenda')
    ->name('profil_agenda');

Route::view('dokumen/penelitian-pengembangan', 'document/litbang')
    ->name('dokumen_litbang');

Route::view('dokumen/pelayanan', 'document/pelayanan')
    ->name('dokumen_pelayanan');

Route::view('dokumen/perencanaan-pembangunan', 'document/perencanaan')
    ->name('dokumen_perencanaan');

Route::view('dokumen/peraturan', 'document/peraturan')
    ->name('dokumen_peraturan');

Route::view('dokumen/rencana-kerja', 'document/rencana')
    ->name('dokumen_rencana');

Route::view('buletin', 'pages/buletin')
    ->name('buletin');

Route::view('galeri-kegiatan', 'pages/galeri')
    ->name('galeri');

Route::view('kontak', 'pages/kontak')
    ->name('kontak');

Route::view('video/inovasi', 'video/inovasi')
    ->name('video_inovasi');

Route::view('video/video2', 'video/video2')
    ->name('video_video2');

Route::view('video/video3', 'video/video3')
    ->name('video_video3');
































require __DIR__.'/auth.php';
