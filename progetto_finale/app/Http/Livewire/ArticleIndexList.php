<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Article;
use App\Models\Category;
use League\CommonMark\Node\Block\Document;

class ArticleIndexList extends Component
{
    public $search;
    public $category;

    public function render()
    {
        $categories = Category::all();
        $articles = Article::all();//->where('category_id',);

        return view('livewire.article-index-list', ['articles', Article::whereLike('category_id')], compact('categories'));
    }
}
