<?php

use App\Livewire\Counter;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ApplyController;

Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/contacts', [SiteController::class, 'contacts'])->name('contacts');
Route::get('/counter', Counter::class);

Route::get('/form', [ApplyController::class, 'index'])->name('apply.show');
Route::post('/form', [ApplyController::class, 'submitForm'])->name('apply.submit');
