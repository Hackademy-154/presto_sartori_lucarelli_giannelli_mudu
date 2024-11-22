<x-layout>
    <div class="container  ">
        <div class="row pt-5">
            <div class="col-12 text-center my-5">
                <h1 class="text-dark fw-bold">Dettaglio: "{{ $article->title }}"</h1>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-10 d-flex justify-content-start align-items-center cardShow ps-0 pb-3 ">
                <div class="contImgDettaglio d-flex flex-column justify-content-evenly">
                @if ($article->images->count())
                                    @foreach ($article->images as $key=>$image)
                                    <div class="img-dettaglio">
                                        <img src="{{ $image->getUrl(800, 800) }}" class="imgShow" alt="Immagine {{$key+1}} dell'articolo '{{$article->title}}'">
                                    </div>
                                    @endforeach
                                @else
                                    @for ($i = 0; $i < 6; $i++)
                                        <div class="img-dettaglio">
                                            <img class="imgShow" src="https://picsum.photos/35{{ $i }}"
                                                alt="img provvisorie">
                                        </div>
                                    @endfor
                                @endif
                </div>
                <div class="col-12 col-md-6 img-container">
                    <img class="imgShow" src="{{ Storage::url($article->images->first()->path) }}" alt="">
                </div>
                <div class="col-12 col-md-4 ms-4 d-flex flex-column justify-content-between cardCart">
                    <div class="d-flex flex-column justify-content-between text-dark">
                        <h4 class="mt-2 mb-1 fst-italic">Titolo: <span class="fw-bold"
                                id="cardTitle">{{ ucfirst($article->title) }}</span></h4>
                        <hr class="my-2">
                        <h6 class="fst-italic ">Categoria: <span class="fw-bold"
                                id="cardCategory">#{{ ucfirst($article->category->name) }}</span>
                        </h6>
                        <hr class="my-2">
                        <div class="scrollspy-example text-black divDescriptionCardRev mb-3" data-bs-spy="scroll"
                            data-bs-smooth-scroll="true" tabindex="0">
                            <h6 class="fst-italic">Descrizione:</h6>
                            <span class="fw-bold" id="cardDescription">{{ ucfirst($article->description) }}</span>
                        </div>
                        <hr class="my-2">
                        <h6 class="fst-italic mb-2">Prezzo: <span class="fw-bold" id="cardPrice">{{ $article->price }}
                                €</span> </h6>
                        <hr class="my-2">
                        <h6 class="fst-italic mb-3">Autore: <span
                                class="fw-bold">{{ ucfirst($article->user->name) }}</span>
                        </h6>
                    </div>



                    <div class=" d-flex justify-content-between" id="show">
                        <a class="btn btn-secondary w-25 d-flex justify-content-center align-items-center"
                            href="{{ route('homepage') }}">Indietro</a>
                        <button type="" class="btn btn-success  w-25">
                            <i id="icona_{{ $article->id }}" class="bi bi-cart-plus fs-5 cartIcon text-white"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
