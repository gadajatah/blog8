<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\SeriesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->prefix('admin')->group(function(){
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    Route::get('/series', [SeriesController::class, 'index'])->name('series.index');
});

require __DIR__.'/auth.php';
