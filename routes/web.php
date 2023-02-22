<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CountryController;



Route::get('/', [CountryController::class, 'index']);
Route::get('/countries/{id}', [CountryController::class,'show'])->name('countries.show');

Route::get('/countries/{id}/posts/create', [PostController::class, 'create']);
Route::post('/countries/{id}/posts', [PostController::class, 'store']);