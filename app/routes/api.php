<?php

use App\Http\Controllers\TextController;
use App\Http\Middleware\EnsureTokenIsValid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/text', [TextController::class, 'index'])
    ->name('index')
    ->middleware(EnsureTokenIsValid::class);
