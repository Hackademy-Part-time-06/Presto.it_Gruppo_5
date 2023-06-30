<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class ArticleEditForm extends Component
{
    public $user_id, $category_id, $title, $price, $description;

    public Article $article;
    
    protected $rules = [
        'category_id'   => 'required',
        'title'         => 'required|min:4',
        'price'         => 'required|numeric',
        'description'   => 'required|min:8'
    ];

    protected $messages = [
        'required'=>'Il campo :attribute è richiesto',
        'min'     =>'Il campo :attribute è troppo corto',
        'numeric' =>'Il campo :attribute deve essere di tipo numerico'
    ];

    //metodo mount(), ci permette di inserire i dati dell'articolo da modificare all'interno degli input.
    public function mount(){
        $this->user_id     = $this->article->user_id;
        $this->category_id = $this->article->category_id;
        $this->title       = $this->article->title;
        $this->price       = $this->article->price;
        $this->description = $this->article->description;
    }
    
    public function update(){

        $this->validate();

        $this->article->update([
            'user_id'       => $this->user_id,
            'category_id'   => $this->category_id,
            'title'         => $this->title,
            'price'         => $this->price,
            'description'   => $this->description,
        ]);

        session()->flash('article', 'Articolo modificato correttamente');
    }

    //Validazione real-time
    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.article-edit-form', compact('categories'));
    }
}
