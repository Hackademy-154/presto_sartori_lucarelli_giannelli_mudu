<?php

namespace App\Jobs;

use App\Models\Image;
use Spatie\Image\Enums\Fit;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Cache;
use Spatie\Image\Enums\AlignPosition;
use Illuminate\Queue\SerializesModels;
use Spatie\Image\Image as SpatieImage;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;


class RemoveFaces implements ShouldQueue
{
    use  Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
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
        //roba nuovo
        $key = 'google_vision_rate_limit';
        $limit = 10;
        $timeFrame = 60;
          $tries = 5; // Numero massimo di tentativi
     $backoff = 60; // Attendi 60 secondi tra i tentativi

        if (Cache::get($key, 0) >= $limit) {
            $this->release($timeFrame);
            return;
        }

        Cache::put($key, Cache::get($key, 0) + 1, $timeFrame);
/////////////////////////
        $i = Image::find($this->article_image_id);
        if(!$i){
            return;
        }

        $srcPath = storage_path('/app/public/' . $i->path);
        $image = file_get_contents($srcPath);

        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . base_path('google_credential.json'));

        $imageAnnotator = new ImageAnnotatorClient();
        $response = $imageAnnotator->faceDetection($image);
        $faces = $response->getFaceAnnotations();
        foreach($faces as $face){
            $vertices = $face->getBoundingPoly()->getVertices();

            $bounds = [];

            foreach($vertices as $vertex){
                $bounds[] = [$vertex->getX(), $vertex->getY()];
            }

            $w = $bounds[2][0] - $bounds[0][0];
            $h = $bounds[2][1] - $bounds[0][1];
            $spatie = new SpatieImage();
            $image = $spatie->load($srcPath);

            $image->watermark(
                base_path('resources/img/smile.png'),
                AlignPosition::TopLeft,
                paddingX: $bounds[0][0],
                paddingY: $bounds[0][1],
                width: $w,
                height: $h,
                fit: Fit::Stretch
            );

            $image->save($srcPath);
        }

        $imageAnnotator->close();
    }
}
