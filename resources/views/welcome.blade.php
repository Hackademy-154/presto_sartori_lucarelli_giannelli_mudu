<x-layout>

    <div class="slider">
        <!-- list Items -->
        <div class="list">

            <div class="item active">
                <img src="{{ Storage::url('image/slide_abbigliamento.png') }}" alt="">
                <div class="content">
                    <p>Category</p>
                    <h2>ABBIGLIAMENTO</h2>
                    <p>
                        Entra nella sezione abbiggliamento per scoprire migliaia di capi alla moda, nuovi o usati.
                        Clicca sul pulsante per vedere i prodotti
                    </p>
                    <a href="" class="btn btn-info">Scopri di più</a>
                </div>
            </div>

            @foreach($categories as $category)
            <div class="item">
                <img src="{{ Storage::url('image/slide_sport.jpeg') }}" alt="">
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

            <div class="item active">
                <img src="{{ Storage::url('image/slide_abbigliamento.png') }}">
                <div class="content">
                    Abbigliamento
                </div>
            </div>

            @foreach($categories as $category)
            <div class="item">
                <img src="{{ Storage::url('image/slide_sport.jpeg') }}">
                <div class="content">
                   {{ $category->name }}
                </div>
            </div>
            @endforeach
            
        </div>

    </div>

    <div class="container-fluid text-center bg-body-tertiary">
        <div class="row  justify-content-evenly align-items-center mt-5 mb-5">
            <div class="wrapper">
                @foreach ($articles as $article)
                <div class="col-4 card"><img src="{{ Storage::url('image/slide_abbigliamento.png') }}">
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
        </div>
</x-layout>