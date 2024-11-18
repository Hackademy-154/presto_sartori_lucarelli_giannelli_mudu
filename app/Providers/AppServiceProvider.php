<?php

namespace App\Providers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
    if (Schema::hasTable('categories')){
        View::share('categories', Category::orderBy('name')->get());
    }
    if (Schema::hasTable('articles')){
        View::share('articles', Article::all());
    }
    }
}
