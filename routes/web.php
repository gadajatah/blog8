<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->prefix('admin')->group(function(){
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
});

require __DIR__.'/auth.php';
