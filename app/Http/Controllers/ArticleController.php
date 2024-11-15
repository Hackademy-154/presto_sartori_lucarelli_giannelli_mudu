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
            new Middleware('auth', except: ['index', 'show'])
        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Category $category)
    {
        return view('article.index',compact('category'));
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
        //
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
    public function byCategory(Category $category){
        return view('article.byCategory', ['articles' => $category->articles, 'category' => $category]);
    }
}
