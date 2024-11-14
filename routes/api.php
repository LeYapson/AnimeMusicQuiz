<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\QuizController;

Route::middleware('auth:api')->group(function () {
    Route::get('/users', [UserController::class, 'index']);
    Route::post('/songs', [SongController::class, 'store']);
    Route::get('/quiz/{id}', [QuizController::class, 'show']);
    // Ajoute d'autres routes ici
});
