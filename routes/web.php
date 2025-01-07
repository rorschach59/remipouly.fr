<?php

use App\Http\Controllers\DesignController;
use App\Http\Controllers\DevelopmentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SeoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::post('/', [HomeController::class, 'manageContactForm']);

Route::get('/mentions-legales', function () {
    return view('legal-notices.index');
})->name('legal-notices');

Route::get('/developpement', [DevelopmentController::class, 'index'])->name('development-index');
Route::get('/referencement', [SeoController::class, 'index'])->name('seo-index');
Route::get('/design', [DesignController::class, 'index'])->name('design-index');
