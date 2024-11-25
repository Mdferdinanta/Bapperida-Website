<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\News\BogorNews;
use App\Livewire\Pages\Profiles\Staff;
use App\Livewire\Pages\Profiles\Schedule;

Route::view('/', 'dashboard')
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth', 'verified'])
    ->name('profile');

Route::view('structure', 'livewire.pages.profiles.structure')
    ->name('structure');

require __DIR__.'/auth.php';

Route::get('staff', [Staff::class, 'render'])
    ->name('staff');

Route::get('schedule', [Schedule::class, 'render'])
    ->name('schedule');

Route::get('news', [BogorNews::class, 'render'])
    ->name('news');
