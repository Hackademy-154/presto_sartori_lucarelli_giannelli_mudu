<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage()  {
        $articles = Article::where('is_accepted', true)->orderBy('created_at', 'desc')->take(4)->get();
        return view('welcome', compact('articles'));
    }

    public function searchArticles(Request $request){
        $query = $request->input('query') ? $request->input('query') : $request->input('query2');
        $articles = Article::search($query)->where('is_accepted', true)->paginate(10);
        $query2 = $request->input('query') ? $request->input('query') : Category::find($request->input('query2'))->name;
        return view('article.searched', ['articles'=>$articles, 'query'=>$query2]);
    }
}
