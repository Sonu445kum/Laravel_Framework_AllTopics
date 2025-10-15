<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

use App\Http\Controllers\ArticleController;

Route::resource('articles', ArticleController::class);

// this is a Product routes
Route::resource('products', ProductController::class);


Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');

Route::get('/', function () {
    return view('welcome');
});
