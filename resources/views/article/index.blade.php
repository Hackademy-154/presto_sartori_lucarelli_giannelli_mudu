<x-layout>
    <div class="container cambiacolore">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 text-center">
                <h3 class="display-3">
                    Tutti gli annunci
                </h3>
            </div>
        </div>
        <div class="row justify-content-around py-5 wrapper">
            @foreach ($articles as $article)
                <x-cardArticle :article="$article"></x-cardArticle>
            @endforeach
        </div>
        
    </div>
</x-layout>
