<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

//articoli
Route::get('/create/article', [ArticleController::class, 'create'])->name('article.create');
