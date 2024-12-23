<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;

class ArticleController extends Controller
{
    public static function middleware()
    {
        return [
            new Middleware('auth', only: ['create'])
        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles= Article::where('is_accepted', true)->orderBy('created_at', 'desc')->get();
        $latestArticles = Article::where('is_accepted', true)->orderBy('created_at','desc')->take(4)->pluck("id")->toArray();
        $categories = Category::all();
        return view('article.index', compact('articles', 'categories','latestArticles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        $category = $article->category;
        return view ('article.show', compact('article', 'category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
    public function byCategory(Category $category)
    {
        $articles = $category->articles()->where('is_accepted', true)->orderBy('created_at','desc')->get();
    
        $latestArticles = Article::where('is_accepted', true)->orderBy('created_at','desc')->take(4)->pluck("id")->toArray();
        return view('article.byCategory', compact('articles', 'category','latestArticles'));
    }
}
