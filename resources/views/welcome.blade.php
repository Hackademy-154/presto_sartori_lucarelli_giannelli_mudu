<x-layout>

    <div class="slider">
        <!-- list Items -->
        <div class="list">

            <div class="item active">
                <img src="{{ Storage::url('image/slide_welcome.jpg') }}" alt="">
                <div class="content">
                    <a href="{{route('article.index')}}" class="btn btn-info">Guarda tutte le categorie</a>
                </div>
            </div>

            @foreach($categories as $category)
            <div class="item">
                <img src="{{ Storage::url('image/slide_libri&riviste.webp') }}" alt="">
                <div class="content">
                    <p>Category</p>
                    <h2>{{ $category->name }}</h2>
                    <p>
                        Entra per scoprire migliaia di prodotti nuovi o usate!
                    </p>
                    <a href="{{route('article.byCategory', compact('category'))}}" class="btn btn-info">Scopri di più</a>
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

    <div class="container-fluid text-center cambiacolore">
        <div class="row wrapper justify-content-evenly align-items-center mt-5 mb-5">
           
                @foreach ($articles as $article)
                    <div class="col-3 col-md-4 card"><img src="{{ Storage::url('image/slide_abbigliamento.png') }}">
                        <div class="info">
                            <h5>{{ $article->title }}</h5>
                            <p>{{ $article->price }}€</p>
                            <p>{{ $article->category->name }}</p>
                            <a href="{{ route('article.show', compact('article')) }}" class="btn button">Vai
                                all'articolo</a>
                        </div>
                    </div>
                @endforeach

         
        </div>
</x-layout>
