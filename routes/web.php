<?php

use App\Http\Controllers\ApplyController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::post('/form', [ApplyController::class, 'submitForm'])->name('apply.submit');

Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
	Route::get('/', [SiteController::class, 'home'])->name('home');
	Route::get('/about', [SiteController::class, 'about'])->name('about');
	Route::get('/contacts', [SiteController::class, 'contacts'])->name('contacts');
	Route::get('/form', [ApplyController::class, 'index'])->name('apply.show');

	Route::get('/privacy', [SiteController::class, 'privacy'])->name('privacy');
	Route::get('/cookies', [SiteController::class, 'cookies'])->name('cookies');
	Route::get('/terms-of-use', [SiteController::class, 'termsOfUse'])->name('terms');


	Route::get('/services', [ServicesController::class, 'services'])->name('services');
	Route::get('/services/{slug}', [ServicesController::class, 'service'])->name('service');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
