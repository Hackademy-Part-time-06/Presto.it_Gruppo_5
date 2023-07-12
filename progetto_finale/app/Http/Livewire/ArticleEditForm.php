<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Article;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class ArticleEditForm extends Component
{
    use WithFileUploads;
    
    public $user_id, $category_id, $title, $price, $description, $temporary_images, $images = [];

    public Article $article;
    
    protected $rules = [
        'category_id'   => 'required',
        'title'         => 'required|min:4',
        'price'         => 'required|numeric',
        'description'   => 'required|min:8',
        'images.*'           => 'image|max:1024',
        'temporary_images.*' => 'image|max:1024',
    ];

    protected $messages = [
        'required'=>'Il campo :attribute è richiesto',
        'min'     =>'Il campo :attribute è troppo corto',
        'numeric' =>'Il campo :attribute deve essere di tipo numerico',
        'temporary_images.required'=> "L'immagine è richiesta",
        'temporary_images.*.image'=> "Il file deve essere un' immagine",
        'temporary_images.*.max'=> "L'immagine deve essere di 1 mb",
        'images.image'=> "Il file deve essere un' immagine",
        'images.max'=> "L'immagine deve essere di 1 mb",
    ];

    //metodo mount(), ci permette di inserire i dati dell'articolo da modificare all'interno degli input.
    public function mount(){
        if(!empty($this->article->images)){
            $this->images = $this->article->images;
        }

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
        return view('livewire.article-edit-form');
    }
}
