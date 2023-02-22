<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CountryController;



Route::get('/', [CountryController::class, 'index']);
Route::get('/countries/{id}', [CountryController::class,'show']);
