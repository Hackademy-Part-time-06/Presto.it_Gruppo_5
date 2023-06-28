<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Article;
use App\Models\Category;
use League\CommonMark\Node\Block\Document;

class ArticleIndexList extends Component
{
    //public $search;

    public function render()
    {
        $categories = Category::all();
        //ordinati in ordine cronologico con una paginazione da 5 articoli
        $articles = Article::orderBy('created_at')->paginate(6);//->where('title','like','%'.$this->search.'%');
        return view('livewire.article-index-list', compact('articles'), compact('categories'));
    }
}
