<x-layout>
    <div class="container-fluid text-center bg-body-tertiary">
        <div class="row">
            <!-- CAROUSEL -->
            <div class="col-12 p-0 ">
                <div id="carouselExampleFade" class="carousel slide carousel-fade">
                    <div class="carousel-inner">
                        <div class="carousel-item active ratio ratio-21x9">
                            <img src="{{ Storage::url('image/slide_abbigliamento.png') }}" class="d-block w-100"
                                alt="...">
                        </div>
                        <div class="carousel-item ratio ratio-21x9">
                            <img src="{{ Storage::url('image/slide_sport.jpeg') }}" class="d-block w-100"
                                alt="...">
                        </div>
                        <div class="carousel-item ratio ratio-21x9">
                            <img src="{{ Storage::url('image/slide_libri&riviste.webp') }}" class="d-block w-100"
                                alt="...">
                        </div>
                        <div class="carousel-item ratio ratio-21x9">
                            <img src="{{ Storage::url('image/slide_casa&giardinaggio.webp') }}" class="d-block w-100"
                                alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <!-- FINE CAROUSEL -->



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
