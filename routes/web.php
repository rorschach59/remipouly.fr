<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::post('/', [HomeController::class, 'manageContactForm']);
Route::get('/mentions-legales', function () {
    return view('legal-notices.index');
})->name('legal-notices');
