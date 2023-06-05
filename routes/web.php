<?php

use App\Http\Controllers\Guest\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;



Route::get('/', [PageController::class, 'index']);
Route::resource('cars', CarController::class);
