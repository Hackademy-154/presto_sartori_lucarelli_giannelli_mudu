<?php

namespace App\Jobs;

use App\Models\Image;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Log;
use App\Jobs\GoogleVisionLabelImage;
use Illuminate\Support\Facades\Cache;
use Illuminate\Contracts\Queue\ShouldQueue;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;

class GoogleVisionLabelImage implements ShouldQueue
{
    use Queueable;

    private $article_image_id;

    /**
     * Create a new job instance.
     */
    public function __construct($article_image_id)
    {
        $this->article_image_id = $article_image_id;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        // Roba nuova
        $key = 'google_vision_rate_limit';
        $limit = 5;
        $timeFrame = 60;

        if (Cache::get($key, 0) >= $limit) {

        return;
    }

        Cache::put($key, Cache::get($key, 0) + 1, $timeFrame);
    ///////////////
        $i = Image::find($this->article_image_id);
        if(!$i){
        return;
        }
        $image = file_get_contents(storage_path('app/public/' . $i->path));
        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . base_path('google_credential.json'));

        $imageAnnotator = new ImageAnnotatorClient();
        $response = $imageAnnotator->labelDetection($image);
        $labels = $response->getLabelAnnotations();

        if ($labels){
            $result = [];
            foreach ($labels as $label){
                $result[] = $label->getDescription();

            }

            $i->labels = $result;
            $i->save();
            Log::info("Labels salvati per immagine ID {$this->article_image_id}: " . json_encode($result));
        } else{
            Log::warning("Nessuna etichetta trovata per immagine ID {$this->article_image_id}");
        }
        $imageAnnotator->close();
    }
}
