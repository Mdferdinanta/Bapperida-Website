<?php

use Illuminate\Support\Facades\Route;
use Livewire\Attribute;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/homepage', function () {
    return view('livewire.homepage');
});
