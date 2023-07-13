<?php

namespace App\Models;

use App\Models\Article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;

    protected $fillable=['path'];

    public function article(){
        return $this->belongsTo(Article::class); //relazione 1 to N le immagini appartengono ad un articolo
    }

    //creo le funzioni per recuperare le img croppate
}
