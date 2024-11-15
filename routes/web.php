<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

//articoli
Route::get('/create/article', [ArticleController::class, 'create'])->name('article.create');
Route::get('/show/article/{article}', [ArticleController::class, 'show'])->name('article.show');

// index by category    
Route::get('/index/article/{category}', [ArticleController::class, 'byCategory'])->name('article.byCategory');
Route::get('/index', [ArticleController::class, 'index'])->name('article.index');