<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::controller(CountryController::class)->middleware(['auth', 'verified'])->group(function(){
    Route::get('/countries', 'index')->name('index');
    Route::get('/countries/{code}', 'show')->name('show');
});

Route::controller(HomeController::class)->middleware(['auth'])->group(function(){
    Route::get('/home', 'index')->name('home_index'); 
    Route::get('/home/{post}', 'detail')->name('detail');
    Route::get('/home/{post}/edit', 'edit')->name('edit');
    Route::put('/home/{post}', 'update')->name('update');
    Route::delete('/home/{post}', 'delete')->name('delete');
});

Route::controller(PostController::class)->middleware(['auth'])->group(function(){
    Route::get('/countries/{country}/posts/create', 'create')->name('create');
    Route::post('/countries/{country}/posts', 'store')->name('store');
    Route::get('/posts/{post}', 'detail')->name('detail');
    Route::get('/posts/{post}/edit', 'edit')->name('edit');
    Route::put('/posts/{post}', 'update')->name('update');
    Route::delete('/posts/{post}', 'delete')->name('delete');
});

Route::controller(CategoryController::class)->middleware(['auth'])->group(function(){
    Route::get('/countries/{country}/categories/{category}', 'posts_category')->name('posts_category');
    Route::get('/home/categories/{category}', 'home_category')->name('home_category');
    Route::get('{code}/contributer/{user}/categories/{category}', 'contributer_category')->name('contributer_category');
});

Route::controller(UserController::class)->middleware(['auth'])->group(function(){
    Route::get('/posts/{code}/contributer/{user}', 'contributer')->name('contributer');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




require __DIR__.'/auth.php';
