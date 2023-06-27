<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Article;

class ArticleCreateForm extends Component
{
    public $title, $price, $description;
        
    //Validazione
    protected $rules = [
        'title'         => 'required',
        'price'         => 'required',
        'description'   => 'required|min:8'
    ];

    public function store(){

        $this->validate();
    
        Article::create([
            'title'         => $this->title,
            'price'         => $this->price,
            'description'   => $this->description,
        ]);
        
        $this->reset('title','price','description');
        
        session()->flash('article', 'Articolo inserito correttamente');
        /*
        return redirect()
                ->route('articles.index')
                    ->with('success','Articolo inserito correttamente');
        */          
    }

    public function render()
    {
        return view('livewire.article-create-form');
    }
}
