<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\TvShowController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/tv-shows', [TvShowController::class, 'index']);
Route::get('/tv-shows/{id}', [TvShowController::class, 'show']);

// Route Terproteksi (Wajib kirim Bearer Token di Postman / Flutter)
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/tv-shows', [TvShowController::class, 'store']);
    Route::put('/tv-shows/{id}', [TvShowController::class, 'update']);
    Route::delete('/tv-shows/{id}', [TvShowController::class, 'destroy']);
});