<x-layout>
    <div class="container min-vh-100">
        <div class="row pt-5 justify-content-center">
            <div class="col-12 col-md-6 text-center mt-5">
                <h3 class="display-3 text-black">
                    Tutti gli annunci
                </h3>
            </div>
        </div>
        <div class="row justify-content-evenly align-items-center py-5 ">
            @foreach ($articles as $article)
            <x-cardArticleIndex :article="$article"></x-cardArticleIndex>
            @endforeach
        </div>

    </div>
    
</x-layout>