<x-layout>
    <div class="container cambiacolore min-vh-100">
        <div class="row pt-5 justify-content-center">
            <div class="col-12 col-md-6 text-center mt-5">
                <h3 class="display-3 text-black">
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
