<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage()  {
        $articles = Article::where('is_accepted', true)->orderBy('created_at', 'desc')->take(4)->get();
        $latestArticles = Article::where('is_accepted', true)->orderBy('created_at','desc')->take(4)->pluck("id")->toArray();
        return view('welcome', compact('articles','latestArticles'));
    }

    public function searchArticles(Request $request){
        
        if($request->input('query')){
            $query = $request->input('query');
            $art = Article::search($query)->where('is_accepted', true)->orderBy('created_at','desc');
            if($request->input('query2') != 0){
                $articles = $art->where('category_id', $request->input('query2'))->paginate(10);
            }else {
                $articles = $art->paginate(10);
            }
        }elseif ($request->input('query2')) {
            $query = Category::find($request->input('query2'))->name;
            $articles = Article::where('category_id', $request->input('query2'))->orderBy('created_at','desc')->paginate(10);
        } else {
            $query = null;
            $articles = Article::where('is_accepted', true)->orderBy('created_at', 'desc')->paginate(10);
        }

        $latestArticles = Article::where('is_accepted', true)->orderBy('created_at','desc')->take(4)->pluck("id")->toArray();
        
        return view('article.searched', ['articles'=>$articles, 'query'=>$query, 'latestArticles'=>$latestArticles]);
    }

    public function setLanguage($lang){
        session()->put('locale', $lang);
        return redirect()->back();
    }
}
