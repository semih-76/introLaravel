<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResourceController;

Route::get('/resources', [ResourceController::class, 'index']);
Route::get('/resource/{resource}', [ResourceController::class, 'show']);
