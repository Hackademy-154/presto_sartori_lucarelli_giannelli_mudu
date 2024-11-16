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

            <div class="item">
                <img src="{{ Storage::url('image/slide_sport.jpeg') }}" alt="">
                <div class="content">
                    <p>Category</p>
                    <h2>SPORT</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, neque?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, ex.
                    </p>
                    <a href="" class="btn btn-info">Scopri di più</a>
                </div>
            </div>

            <div class="item">
                <img src="{{ Storage::url('image/slide_casa&giardinaggio.webp') }}" alt="">
                <div class="content">
                    <p>Category</p>
                    <h2>CASA & GIARDINAGGIO</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, neque?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, ex.
                    </p>
                    <a href="" class="btn btn-info">Scopri di più</a>
                </div>
            </div>

            <div class="item">
                <img src="{{ Storage::url('image/slide_libri&riviste.webp') }}" alt="">
                <div class="content">
                    <p>Category</p>
                    <h2>LIBRI & RIVISTE</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, neque?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, ex.
                    </p>
                    <a href="" class="btn btn-info">Scopri di più</a>
                </div>
            </div>

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
            <div class="item">
                <img src="{{ Storage::url('image/slide_sport.jpeg') }}">
                <div class="content">
                    Sport
                </div>
            </div>
            <div class="item">
                <img src="{{ Storage::url('image/slide_casa&giardinaggio.webp') }}">
                <div class="content">
                    Casa&Giardinaggio
                </div>
            </div>
            <div class="item">
                <img src="{{ Storage::url('image/slide_libri&riviste.webp') }}">
                <div class="content">
                    Libri&Riviste
                </div>
            </div>
        </div>

    </div>

    <div class="container-fluid text-center cambiacolore">
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
