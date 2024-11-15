<x-layout>
    <div class="container text-center bg-body-tertiary">
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
                            <img src="{{ Storage::url('image/slide_sport.jpeg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item ratio ratio-21x9">
                            <img src="{{ Storage::url('image/slide_libri&riviste.webp') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item ratio ratio-21x9">
                            <img src="{{ Storage::url('image/slide_casa&giardinaggio.webp') }}" class="d-block w-100" alt="...">
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
<<<<<<< HEAD



        <div class="row  justify-content-evenly align-items-center mt-5 mb-5">
            <div class="wrapper">
                @foreach ($articles as $article)

                <div class="col-4 card"><img src="{{ Storage::url('image/slide_abbigliamento.png') }}">
                    <div class="info">
                        <h5>{{$article->title}}</h5>
                        <p>{{$article->price}}€</p>
                        <p>{{$article->category->name}}</p>
                        <a href="{{route('article.show', compact('article'))}}" class="btn button">Vai all'articolo</a>
=======
        <div class="row  justify-content-center align-items-center mt-5">
            @foreach ($articles as $article)
                <div class="col-3 d-flex" id="card">
                    <div class="col-6 cardLeft">
                        <div class="row justify-content-end align-items-end h-100  "
                            style="background-image: url({{ Storage::url('image/slideAbbigliamento.jpg') }})">
                            <div class="col-12 d-flex blur">
                                <div class="row align-items-end">
                                    <div class="col-12 d-flex  text-start">
                                        <h5 class="fw-bold mt-2">{{ $article->title }}</h5>
                                    </div>
                                    <div class="col-12 d-flex ">
                                        <h5 class="fw-bold">{{ $article->price }} €</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 d-flex cardRight " id="cardRight">
                        <div class="row align-items-center justify-content-center align-content-center">
                            <div class="col-12 d-flex  text-start mb-3">
                                <h5 class="fw-bold mt-2">{{ $article->title }}</h5>
                            </div>
                            <div class="col-12 d-flex text-start mb-2">
                                <h5 class="fw-bold">{{ $article->price }} €</h5>
                            </div>
                            <div class="col-12 d-flex text-start mt-2">
                                <h5 class="fw-bold">{{ $article->description }}</h5>
                            </div>
                            <div class="col-12  d-flex justify-content-center align-items-end mt-4 ">
                                <a href="{{ route('article.show', compact('article')) }}"
                                    class="buttonCard text-decoration-none ">Vai al
                                    dettaglio</a>
                            </div>
                        </div>
>>>>>>> bbcd2f39211c5fa62fe4630d522f2e697b63d5c0
                    </div>
                </div>
                @endforeach

            </div>
        </div>
</x-layout>