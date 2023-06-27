<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Article;

class ArticleEditForm extends Component
{
    public $title, $price, $description;

    public Article $article;

    protected $rules = [
        'title'         => 'required',
        'price'         => 'required',
        'description'   => 'required|min:8'
    ];

    //metodo mount(), ci permette di inserire i dati dell'articolo da modificare all'interno degli input.
    public function mount(){
        $this->title       = $this->article->title;
        $this->price       = $this->article->price;
        $this->description = $this->article->description;
    }
    
    public function update(){

        $this->validate();

        $this->article->update([
            'title'         => $this->title,
            'price'         => $this->price,
            'description'   => $this->description,
        ]);

        session()->flash('article', 'Articolo modificato correttamente');
    }

    public function render()
    {
        return view('livewire.article-edit-form');
    }
}
