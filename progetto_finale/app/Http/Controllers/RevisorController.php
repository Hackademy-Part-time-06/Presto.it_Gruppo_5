<?php

namespace App\Http\Controllers;

use App\Mail\becomeRevisor;
use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;
use App\View\Components\Main;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class RevisorController extends Controller
{
    public function index()
    {
        $article_to_check = Article::where('is_accepted', null)->first();
        return view('revisor.index', compact('article_to_check'));
    }

    public function acceptArticle(Article $article)
    {
        $article->setAccepted(true);
        return redirect()->back()->with('message', 'Hai accettato l\'annuncio');
    }


    public function rejectArticle(Article $article)
    {
        $article->setAccepted(false);
        return redirect()->back()->with('message', 'Hai rifiutato l\'annuncio');
    }

    public function becomeRevisor()
    {
        Mail::to('admin@presto.it')->send(new becomeRevisor(Auth::user()));
        return redirect()
            ->back()
            ->with('success', "complimenti la richiesta è stata inoltrata con successo");
            
    }
    public function makeRevisor(User $user)
    {
        Artisan::call('presto:makeUserRevisor', ["email" => $user->email]); //catturo l'email dell'utente che ci è arrivata e lo passiamo come paramentro al comando presto:makerevisor
        return redirect('/')->with('success', "complimenti l'utente è diventato un revisore");
    }
}
