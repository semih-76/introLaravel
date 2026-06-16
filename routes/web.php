<?php

use Illuminate\Support\Facades\Route;
use App\Https\Controllers\HomeController;

/* Route::get('/', function () {
    return view('welcome');
}); */
Route::get('/', [HomeController::class, 'index']);
