<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    public function index(){
        $article_to_check = Article::where('is_accepted', null)->first();
        return view('revisor.index', compact('article_to_check'));
    }

    public function accept(Article $article){
        $article->setAccepted(true);
        $message = __("ui.articleAccepted" , ['title' => "$article->title"]);
        return redirect()->back()->with('message', "$message");
    }

    public function reject(Article $article){
        $article->setAccepted(false);
        $message = __("ui.articleRejected" , ['title' => "$article->title"]);
        return redirect()->back()->with('message', "$message");
    }
    public function becomeRevisor(Request $request){
        $messageUser = $request->messageUser;
        Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user(), $messageUser));
        return redirect()->route('form.revisor')->with('message', 'Richiesta inviata');
    } 
    public function makeRevisor(User $user){
        Artisan::call('app:make-user-revisor', ['email' => $user->email]);
        return redirect()->back();
    }
    public function becomeRevisorForm(){
        return view('revisor.become-revisor-form');
    }
    public function undoSetArticle(){
        $article = Article::orderBy('updated_at', 'desc')->first();
        $article->setAccepted(null);
        $message = __("ui.undoSetArticle" , ['title' => "$article->title"]);
        return redirect()->back()->with('messageUndo', "$message");
    }
}
