<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

use Illuminate\Support\Facades\Auth;

// normal user homepage
Route::get('/homepage', function () {
    return view('homepage');
})->middleware(['auth'])->name('homepage');

// admin homepage
Route::get('/admin-homepage', function () {
    return view('admin_homepage');
})->middleware(['auth'])->name('admin_homepage');

// Test page
Route::get('/test', function () {
    return view('test');
})->middleware(['auth'])->name('test');

use App\Http\Controllers\TestController;

Route::post('/submit-test', [TestController::class, 'store'])->middleware(['auth'])->name('submit.test');
