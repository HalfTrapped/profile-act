<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profiles', [ProfilesController::class, 'getAllProfiles']);
Route::get('/profile/{id}/', [ProfileController::class, 'getProfile']);

