<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CreateArticleForm extends Component
{
    use WithFileUploads;
    #[Validate('required|min:3')] public $title;
    #[Validate('required|min:10')] public $description;
    #[Validate('required|numeric')] public $price;
    #[Validate('required')] public $category;
    public $article;
    public $images = [];
    public $temporary_images;

    public function messages() 
    {
        return [
            "*.required" => 'Inserire :attribute',
            "*.min" => 'La :attribute deve avere almeno 50 caratteri',
            "*.numeric" => 'Il :attribute deve essere un numero',
            'category.required' => 'Seleziona una categoria',
        ];
    }


    public function save(){

        $this->validate();
        
        if(count($this->images)>0 && count($this->images)<7){
        $this->article = Article::create([
            'title' => $this->title,
            'user_id' => Auth::id(),
            'category_id' => $this->category,
            'description' => $this->description,
            'price' => $this->price,
        ]);
            foreach($this->images as $image){
                $newFileName = "articles/{$this->article->id}";
                $newImage = $this->article->images()->create([
                    'path' => $image->store($newFileName, 'public')
                ]);
                // dispatch(new ResizeImage($newImage->path, 1000, 1000 ));
                // dispatch(new GoogleVisionSafeSearch($newImage->id));
                // dispatch(new GoogleVisionLabelImage($newImage->id));
                RemoveFaces::withChain([
                    new GoogleVisionSafeSearch($newImage->id),
                    new GoogleVisionLabelImage($newImage->id),
                    new ResizeImage($newImage->path, 1000, 1000 )
                ])->dispatch($newImage->id);
            }

            File::deleteDirectory(storage_path('/app/livewire-tmp'));
            session()->flash('success', 'Annuncio inserito');
            $this->reset();
        }
        else{
            session()->flash('nosuccess', 'Inserisci un massimo di sei immagini');
        }
        
    }

    // protected function clearForm()
    // {
    //     $this->title = '';
    //     $this->description = '';
    //     $this->price = '';
    // }





    public function render()
    {
        return view('livewire.create-article-form');
    }

    public function updatedTemporaryImages(){
        if($this->validate([
            'temporary_images.*' => 'image|max:1024',
            'temporary_images'=>'max:6'
        ])){
            foreach($this->temporary_images as $image){
                $this->images[] = $image;
            }
        }
    }
    public function removeImage($key){
        if(in_array($key, array_keys($this->images))){
            unset($this->images[$key]);
        }
    }
}
