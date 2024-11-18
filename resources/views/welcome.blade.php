<x-layout>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="slider">
                    <!-- list Items -->
                    <div class="list">

                        <div class="item active">
                            <img src="{{ Storage::url('image/slide_welcome.jpg') }}" alt="">
                            <div class="content">
                                <a href="{{route('article.index')}}" class="btn buttonCharacter">Guarda tutte le categorie</a>
                            </div>
                        </div>

                        @foreach($categories as $category)
                        <div class="item">
                            <img src="{{ Storage::url('image/slide_libri&riviste.webp') }}" alt="">
                            <div class="content">
                                <p>Category</p>
                                <h2 class="text-uppercase">{{ $category->name }}</h2>
                                <p>
                                    Entra per scoprire migliaia di prodotti nuovi o usate!
                                </p>
                                <a href="{{route('article.byCategory', compact('category'))}}" class="btn buttonCharacter">Scopri di più</a>
                            </div>
                        </div>
                        @endforeach

                    </div>

                    <!-- button arrows -->
                    <div class="arrows">
                        <button id="prev">
                            < </button>
                                <button id="next"> > </button>
                    </div>

                    <!-- thumbnails -->
                    <div class="thumbnail">

                        <div class="item active d-none">
                            <img src="{{ Storage::url('image/slide_abbigliamento.png') }}">
                            <div class="content">
                                Abbigliamento
                            </div>
                        </div>

                        @foreach($categories as $category)
                        <div class="item">
                            <img src="{{ Storage::url('image/slide_casa&giardinaggio.webp') }}">
                            <div class="content">
                                {{ $category->name }}
                            </div>
                        </div>
                        @endforeach

                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="row my-5">
        <div class="col-12 d-flex justify-content-center align-items-center contenitore">
            @foreach ($categories as $category)
            <div class="d-flex contenuto mx-2">
                <a href="{{route('article.byCategory', compact('category'))}}" class="d-flex flex-column justify-content-center align-items-center">
                    <img src="{{ Storage::url('image/ps5.jpg') }}" alt="" class="imgCategoryCerchio">
                    <h6 class="text-dark mt-2">{{ $category->name }}</h6>
                </a>

            </div>
            @endforeach
        </div>
    </div>

    <div class="container text-center cambiacolore">
        <div class="row">
            <div class="col-12 d-flex flex-column flex-md-row justify-content-center align-items-center mt-5">
                <h4 class="text-dark me-3">Dai uno sguardo gli ultimi articoli inseriti oppure </h4>
                <a href="{{route('article.create')}}" class="btn buttonCharacter fs-5">Aggiungi un articolo</a>
            </div>
        </div>
        <div class="row ">
            <div class="col-12 wrapper justify-content-evenly align-items-center mt-5 mb-5">
                @foreach ($articles as $article)
                <x-cardArticle :article="$article"></x-cardArticle>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>