<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    //Search
    public function searchArticles(Request $request){
        $articles = Article::search($request->searched)->where('is_accepted', true)->paginate(6);
        return view('articles.search', compact('articles'));
    }

    public function index()
    {
        //ordinati in ordine cronologico con una paginazione da 6 articoli
        $articles = Article::where('is_accepted', true)->orderBy('created_at')->paginate(6);
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create');
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
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
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

    public function categoryshow(Category $category)
    {
        $articles=Article::where('is_accepted', true)->where('category_id',$category->id)->get();
       
        return view('articles.categoryshow', compact('category','articles'));
    }

    public function userprofile()
    {
        $articles = Article::where('user_id', Auth::user()->id)->get();
        return view('userprofile', compact('articles'));
    }

    public function indexArticles()
    {
        $articles = Article::where('is_accepted', true)->paginate(6);
        return view('articles.index', compact('articles'));
    }
}
