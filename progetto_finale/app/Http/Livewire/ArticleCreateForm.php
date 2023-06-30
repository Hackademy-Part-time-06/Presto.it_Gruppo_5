<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class ArticleCreateForm extends Component
{
    //Attributi
    public $user_id, $category_id, $title, $price, $description;    

    //Validazione
    protected $rules = [
        'category_id'      => 'required',
        'title'            => 'required|min:4',
        'price'            => 'required|numeric',
        'description'      => 'required|min:8',
    ];

    protected $messages = [
        'required'=>'Il campo :attribute è richiesto',
        'min'     =>'Il campo :attribute è troppo corto',
        'numeric' =>'Il campo :attribute deve essere di tipo numerico'
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

    //Validazione real-time
    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.article-create-form');
    }
}
