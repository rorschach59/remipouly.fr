<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FurnitureController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/', [HomeController::class, 'handleContactForm'])->name('home.handleContactForm');

Route::get('/mobilier', [FurnitureController::class, 'index'])->name('furniture.home');

Route::get('/contact', [ContactController::class, 'index'])->name('contact.home');
Route::post('/contact', [ContactController::class, 'handleContactForm'])->name('contact.handleContactForm');
