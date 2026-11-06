<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Conrollers\AuthorController;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('categories',CategoryController::class);
Route::resource('authors',AuthorController::class);
Route::resource('Books',BookController::class);
