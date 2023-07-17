<?php

namespace App\Jobs;

use App\Models\Image;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;

class GoogleVisionLabelImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $article_image_id;


    public function __construct($article_image_id)
    {
        $this->article_image_id = $article_image_id;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        //catturiamo l'img
        $i = Image::find($this->article_image_id);
        //se l'img non esiste facciamo un return e terminiamo l'esecuzione di questo job
        if (!$i) {
            return;
        }
//fisicamente recuperiamo l'img con filegetcontents
        $image = file_get_contents(storage_path('app/public/' . $i->path));
        //impostiamo le variabili di ambiente per accedere alle credenziali del servizio google
        //lo sto aggiungendo nel .env
        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . base_path('Google_credential.json'));

        $imageAnnotator = new ImageAnnotatorClient();
//cerchiamo il contenuto dell img
        $response = $imageAnnotator->labelDetection($image);
//richiediamo le annotazioni
        $labels = $response->getLabelAnnotations();
//se ci sono delle labels(contenuti nell'img), per ogni img andremo ad aggiungere in un array vuoto la descrizione della label
        if ($labels) {
            $result = [];
            foreach ($labels as $label) {
                $result[] = $label->getDescription();
            }
//presa la labels salviamo nel database all'interno del campo label l'array rislutante
            $i->labels = $result;
            $i->save();
        }
    }
}
