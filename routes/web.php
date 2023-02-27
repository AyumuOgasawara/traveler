<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CategoryController;



Route::get('/', [CountryController::class, 'index']);
Route::get('/countries/{country}', [CountryController::class,'show'])->name('countries.show');

Route::get('/countries/{country}/posts/create', [PostController::class, 'create']);
Route::post('/countries/{country}/posts', [PostController::class, 'store']);
Route::get('/posts/{post}', [PostController::class, 'detail']);
Route::get('/posts/{post}/edit', [PostController::class, 'edit']);
Route::put('/posts/{post}', [PostController::class, 'update']);

Route::get('countries/{country}/categories/{category}', [CategoryController::class, 'index']);