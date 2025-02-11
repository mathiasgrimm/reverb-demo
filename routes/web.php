<?php

use App\Livewire\ReverbTest;
use Illuminate\Support\Facades\Route;

Route::get('/', ReverbTest::class);

//Route::view('dashboard', 'dashboard')
//    ->middleware(['auth', 'verified'])
//    ->name('dashboard');
//
//Route::view('profile', 'profile')
//    ->middleware(['auth'])
//    ->name('profile');
//
//require __DIR__.'/auth.php';
