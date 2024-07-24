<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

//Route::get('', function () {
//    return view('base');
//})->name('home')->middleware('auth');

Route::get('/connexion', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/connexion', [AuthController::class, 'connect'])->name('connect')->middleware('guest');
Route::get('/inscription', [AuthController::class, 'signup'])->name('signup')->middleware('guest');
Route::post('/inscription', [AuthController::class, 'register'])->name('register')->middleware('guest');
Route::get('/mot-de-passe-oublie', [AuthController::class, 'forgottenPassword'])->name('forgottenPassword.request')->middleware('guest');
Route::post('/mot-de-passe-oublie', [AuthController::class, 'emailForgottenPassword'])->name('forgottenPassword.email')->middleware('guest');
Route::get('/nouveau-mot-de-passe/{token}', [AuthController::class, 'resetForgottenPassword'])->name('forgottenPassword.reset')->middleware('guest');
Route::post('/nouveau-mot-de-passe', [AuthController::class, 'updateForgottenPassword'])->name('forgottenPassword.update')->middleware('guest');
Route::get('/deconnexion', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
