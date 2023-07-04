<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;


class PageController extends Controller
{
    public function home()
    {
        $latestarticles = Article::take(6)->get()->sortByDesc('created_at');
        return view('homepage', compact('latestarticles'));
    }

    public function contacts()
    {
        return view('contacts');
    }


    public function welcome()
    {
        $article = Article::where('is_accepted', true)->take(6)->get()->sortByDesc('created_at');
        return view('homepage', compact('articles'));
    }
}
