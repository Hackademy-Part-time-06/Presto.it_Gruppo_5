<?php

namespace App\Http\Livewire;

use App\Jobs\GoogleVisionSafeSearch;
use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use App\Jobs\ResizeImage;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use File;


class ArticleCreateForm extends Component
{
    use WithFileUploads;
    //Attributi
    public $user_id, $category_id, $title, $price, $description, $temporary_images, $images = [];
    //con temporary_images carico le img che con il submit mi andranno nell array images
    public $article;


    //Validazione
    protected $rules = [
        'category_id'        => 'required',
        'title'              => 'required|min:4',
        'price'              => 'required|numeric',
        'description'        => 'required',
        'images.*'           => 'image|max:1024',
        'temporary_images.*' => 'image|max:1024',
    ];

    protected $messages = [
        'required' => 'Il campo :attribute è richiesto',
        'min'     => 'Il campo :attribute è troppo corto',
        'numeric' => 'Il campo :attribute deve essere di tipo numerico',
        'temporary_images.required' => "L'immagine è richiesta",
        'temporary_images.*.image' => "Il file deve essere un' immagine",
        'temporary_images.*.max' => "L'immagine deve essere di 1 mb",
        'images.image' => "Il file deve essere un' immagine",
        'images.max' => "L'immagine deve essere di 1 mb",
    ];

    public function updatedTemporaryImages()
    {
        if ($this->validate([
            'temporary_images.*' => 'image|max:1024',
        ])) {
            foreach ($this->temporary_images as $image) {
                $this->images[] = $image;
            }
        }
    }

    //Permette di rimuovere l'immagine dall'array images in base alla chiave dell'immagine passata 
    public function removeImage($key)
    {
        if (in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }

    public function store()
    {

        $this->validate();

        $category = Category::find($this->category_id);

        $this->article = $category->articles()->create([
            //Ottengo l'id dell'user
            'user_id'       => Auth::user()->id,
            'title'         => $this->title,
            'price'         => $this->price,
            'description'   => $this->description,
        ]);
        if (count($this->images)) {
            foreach ($this->images as $image) {
                /* $this->article->images()->create(
                    ['path' => $image->store('images', 'public')] 
                ); */

                $newFileName = "articles/{$this->article->id}"; //creamo un cartella articles con all'interno l'id dell'annuncio
                $newImage = $this->article->images()->create(           //ogni annuncio avrà l'img croppata in questa cartella
                    ['path' => $image->store($newFileName, 'public')]
                );
                dispatch(new ResizeImage($newImage->path , 300 , 300)); //al job appena creato passo il path dell'img salva e le dimensioni che voglio dell'img
                dispatch(new GoogleVisionSafeSearch($newImage->id)) ; 
            }
            File::deleteDirectory(storage_path('/app/livewire-tmp'));
            
            
        }
        /*
        $category->articles()->create([
                             //Ottengo l'id dell'user
            'user_id'       => Auth::user()->id,
            'title'         => $this->title,
            'price'         => $this->price,
            'description'   => $this->description,
        ]);
        */


        $this->reset('user_id', 'category_id', 'title', 'price', 'description', 'images', 'temporary_images');

        session()->flash('article', 'Articolo inserito correttamente');
        /*
        return redirect()
                ->route('articles.index')
                    ->with('success','Articolo inserito correttamente');
        */
    }

    //Validazione real-time
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.article-create-form');
    }
}
