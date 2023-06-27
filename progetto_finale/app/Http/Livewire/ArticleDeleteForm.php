<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Article;

class ArticleDeleteForm extends Component
{
    public Article $article;

        public function destroy(){

        $this->article->delete();
        
        return redirect()
                ->route('articles.index')
                    ->with('article','Articolo correttamente eliminato');
        }

    public function render()
    {
        return view('livewire.article-delete-form');
    }
}
