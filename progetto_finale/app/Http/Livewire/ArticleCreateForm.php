<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class ArticleCreateForm extends Component
{
    public $user_id, $category_id, $title, $price, $description;
        
    //Validazione
    protected $rules = [
        'category_id'   => 'required',
        'title'         => 'required',
        'price'         => 'required',
        'description'   => 'required|min:8'
    ];

    public function store(){

        $this->validate();
    
        Article::create([
                            //Ottengo l'id dell'user
            'user_id'       => Auth::user()->id,
            'category_id'   => $this->category_id,
            'title'         => $this->title,
            'price'         => $this->price,
            'description'   => $this->description,
        ]);
        
        $this->reset('user_id','category_id','title','price','description');
        
        session()->flash('article', 'Articolo inserito correttamente');
        /*
        return redirect()
                ->route('articles.index')
                    ->with('success','Articolo inserito correttamente');
        */          
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.article-create-form', compact('categories'));
    }
}
