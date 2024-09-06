<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ContactController;

Route::get('/', [WelcomeController::class, 'index']);
Route::get('article/{n}', [ArticleController::class, 'show'])->where('n', '[0-9]+');


Route::get('users', [UsersController::class, 'create']);
Route::post('users', [UsersController::class, 'store']);


Route::get('contact', [ContactController::class, 'create']);
Route::post('contact', [ContactController::class, 'store']);

Route::get('blog', [BlogController::class, "index"]);
