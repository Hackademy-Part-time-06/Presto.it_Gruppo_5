<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Article;
use App\Models\Category;
use League\CommonMark\Node\Block\Document;

class ArticleIndexList extends Component
{
    public $search;

    public function render()
    {
        //ordinati in ordine cronologico con una paginazione da 6 articoli
        $articles = Article::where('is_accepted', true)->take(6)->get()->sortByDesc('created_at');//->where('title','like','%'.$this->search.'%');
        return view('livewire.article-index-list', compact('articles'));
    }
}
