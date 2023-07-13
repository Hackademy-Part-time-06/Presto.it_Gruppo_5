<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ResizeImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

   private $fileName; //nome dell'img
   private $path; //path dove salvare l'img
   private $w;
   private $h;


     //inserisco come parametri del costruttore il path,nome, altezza e larghezza dell'img 
    public function __construct($filePath,$w,$h)
    {
        $this->path->dirname($filePath); //inserisco il percorso in questa variabile
        $this->fileName->basename($filePath); //inserisco il nome in questa variabile
        $this->w->$w;
        $this->h->$h;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $w= $this->w;
        $h= $this->h;
        $scrPath= storage_path() . 'app/public/' . $this->path . '/' . $this->fileName; //variabile che contiene il path da cui prendere l'img
        $destPath= storage_path() .'app/public/' . $this->path . "/crop_{$w}x{$h}_" . $this->fileName;//variabile che contiene il path dove salvare l'img croppata
    }
}
