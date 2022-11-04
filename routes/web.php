<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChirpController;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('chirps', ChirpController::class)
    ->only(['index', 'store','edit', 'update'])
    ->middleware(['auth','verified']);

require __DIR__.'/auth.php';
