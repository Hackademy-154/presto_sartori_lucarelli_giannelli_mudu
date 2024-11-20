<x-layout>
    <div class="container min-vh-100">
        <div class="row pt-5 justify-content-center">
            <div class="col-12 d-flex flex-column justify-content-center align-items-center my-3 incipit">
                <h3 class="text-white fs-1 fw-bold">
                    ESPLORA SENZA FILTRI
                </h3>
                <h3 class="text-white fs-1 fw-bold">
                    FRA TUTTI I PRODOTTI DISPONIBILI
                </h3>
            </div>
        </div>
        <div class="row justify-content-evenly align-items-center py-5 ">
            @foreach ($articles as $article)
            <x-cardArticleIndex :article="$article" :category="$article->category"></x-cardArticleIndex>
            @endforeach
        </div>

    </div>

</x-layout>