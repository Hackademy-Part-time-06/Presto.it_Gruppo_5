<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Article;

class ArticleIndexList extends Component
{
    public function render()
    {
        $articles = Article::all();

        return view('livewire.article-index-list', compact('articles'));
    }
}
