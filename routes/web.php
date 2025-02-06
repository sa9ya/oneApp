<?php

use App\Http\Controllers\ApplyController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/contacts', [SiteController::class, 'contacts'])->name('contacts');
Route::get('/about', [SiteController::class, 'about'])->name('about');

Route::get('/form', [ApplyController::class, 'index'])->name('apply.show');
Route::post('/form', [ApplyController::class, 'submitForm'])->name('apply.submit');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
