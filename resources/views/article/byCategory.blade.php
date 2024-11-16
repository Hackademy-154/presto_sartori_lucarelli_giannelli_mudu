<x-layout>

    <h5 class="text-black text-center">articoli della categoria <span>{{$category->name}}</span></h5>

    <div class="row justify-content-around py-5">
        @foreach ($articles as $article)
            <x-cardArticle :article="$article"></x-cardArticle>
        @endforeach
    </div>

</x-layout>