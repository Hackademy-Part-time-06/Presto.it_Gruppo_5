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

class GoogleVisionSafeSearch implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * ID dell'img salvata nel database
     */
    private $article_image_id;

    public function __construct($article_image_id)
    {
        $this->article_image_id = $article_image_id;
    }

    /**
     * Execute the job.
     * creamo la funzione handle che verrà applicata su ogni immagine
     */
    public function handle(): void
    {
        //catturiamo l'img
        $i = Image::find($this->article_image_id);
        //se l'img non esiste facciamo un return e terminiamo l'esecuzione di questo job
        if (!$i) {
            return;
        }

        $image = file_get_contents(storage_path('app/public/' . $i->path));
        //impostiamo le variabili di ambiente per accedere alle credenziali del servizio google
        //lo sto aggiungendo nel .env
        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . base_path('Google_credential.json'));

        $imageAnnotator = new ImageAnnotatorClient();
        //avviamo la funzione safesearch sull'img 
        $response = $imageAnnotator->safeSearchDetection($image);
        $imageAnnotator->close();
        //recuperiamo la response con diversi valori
        $safe = $response->getSafeSearchAnnotation();
        //salviamo ognuno di quei valori all'interno delle variabili qui sotto
        $adult = $safe->getAdult();
        $medical = $safe->getMedical();
        $spoof = $safe->getSpoof();
        $violence = $safe->getViolence();
        $racy = $safe->getRacy();
        //successivamente creamo un semaforo-etichette che ci servirà per identificare la classe aggiunta
/* //'UNKNOWN', 'VERY_UNLIKELY', 'UNLIKELY',
            'POSSIBLE', 'LIKELY', 'VERY_LIKELY' */
        $likelihoodName = [
            
            'text-secondary bi bi-circle-fill', 'text-success bi bi-circle-fill', 'text-secondary bi bi-circle-fill',
            'text-warning bi bi-circle-fill', 'text-warning bi bi-circle-fill', 'text-danger bi bi-circle-fill',
        ];
        //salviamo ognuna di queste etichette all'interno di adult, medical ecc 
        $i->adult = $likelihoodName[$adult];
        $i->medical = $likelihoodName[$medical];
        $i->spoof = $likelihoodName[$spoof];
        $i->violence = $likelihoodName[$violence];
        $i->racy = $likelihoodName[$racy];

        $i->save();
    }
}
