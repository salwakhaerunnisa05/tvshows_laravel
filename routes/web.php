<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\TvShowController;

// Route Publik (Bisa diakses tanpa login)
Route::get('/', function () {
    return 'Hello World';
});