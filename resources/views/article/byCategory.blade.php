<x-layout>
    <div class="container min-vh-100">
        <div class="row pt-5">
            <div class="col-12 pt-5">
                <h1 class="text-center">articoli della categoria <span>{{$category->name}}</span></h1>
            </div>
        </div>
        <div class="row justify-content-around py-5 pt-5">
            <div class="col-12 pt-5">
            @foreach ($articles as $article)
            <x-cardArticle :article="$article"></x-cardArticle>
        @endforeach
            </div>
        </div>
    </div>

</x-layout>