<?php

namespace App\Models;

use App\Models\Article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['path'];

    public function article()
    {
        return $this->belongsTo(Article::class); //relazione 1 to N le immagini appartengono ad un articolo
    }

    //creo le funzioni per recuperare le img croppate

    public static function getUrlbyFilePath($filePath, $w = null, $h = null)
    {
        //se abbiamo chiamato questa funzione senza passare altezza e larghezza dell'img restituiamo l'img originale
        if (!$w && !$h)
            return Storage::url($filePath);
            //altrimenti andremo a recuperare l'img croppata 
            $path= dirname($filePath);
            $fileName= basename($filePath);
            $file= "{$path}/crop_{$w}x{$h}_{$fileName}";
            return Storage::url($file);

    }

    public function getUrl($w = null, $h = null)
    {
        return Image::getUrlbyFilePath($this->path, $w, $h);
    }
}
