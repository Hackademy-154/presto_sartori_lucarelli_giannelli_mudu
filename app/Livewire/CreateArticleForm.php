<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class CreateArticleForm extends Component
{
    #[Validate('required|min:3')] public $title;
    #[Validate('required|min:50')] public $description;
    #[Validate('required|numeric')] public $price;
    #[Validate('required')] public $category;
    public $article;

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

        $this->article = Article::create([
            'title' => $this->title,
            'user_id' => Auth::id(),
            'category_id' => $this->category,
            'description' => $this->description,
            'price' => $this->price,
        ]);
        session()->flash('success', 'Annuncio inserito');
        $this->reset();
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
}
