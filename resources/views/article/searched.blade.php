<x-layout>
    <div class="container">
        <div class="row py-5 justify-content-center align-items-center text-center">
            <div class="col-12">
                <h1 class="display1">
                    Risultati per la ricerca "<span class="fst-italic">{{ $query }}</span>"
                </h1>
            </div>
        </div>
        <div class="row height-custom justify-content-center align-items-center py-5">
            @forelse($articles as $article)
                <x-cardArticleIndex :article="$article" :category="$article->category"></x-cardArticleIndex>

            @empty
                <div class="col-12">
                    <h3 class="text-center">
                        Nessun articolo corrispondente alla tua ricerca
                    </h3>
                </div>
            @endforelse
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div>
            {{ $articles->links() }}
        </div>
    </div>
</x-layout>
