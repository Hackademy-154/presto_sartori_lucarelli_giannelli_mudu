<x-layout>
    <div class="container  ">
        <div class="row pt-5">
            <div class="col-12 text-center my-5">
                <h1 class="text-dark fw-bold">Dettaglio: "{{ $article->title }}"</h1>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-10 d-flex justify-content-start align-items-center cardShow ps-0 pb-3">
                <div class="contImgDettaglio d-flex flex-column justify-content-evenly">
                    <div class="img-dettaglio">
                        <img class="imgShow" src="{{ Storage::url('image/slide_abbigliamento.png') }}" alt="">
                    </div>
                    <div class="img-dettaglio">
                        <img class="imgShow" src="{{ Storage::url('image/slide_sport.jpeg') }}" alt="">
                    </div>
                    <div class="img-dettaglio">
                        <img class="imgShow" src="{{ Storage::url('image/slide_casa&giardinaggio.webp') }}"
                            alt="">
                    </div>
                    <div class="img-dettaglio">
                        <img class="imgShow" src="{{ Storage::url('image/slide_libri&riviste.webp') }}" alt="">
                    </div>
                    <div class="img-dettaglio">
                        <img class="imgShow" src="{{ Storage::url('image/slide_sport.jpeg') }}" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6 img-container">
                    <img class="imgShow" src="{{ Storage::url('image/slide_abbigliamento.png') }}" alt="">
                </div>
                <div class="col-12 col-md-4 ms-4 d-flex flex-column justify-content-between">
                    <div class="d-flex flex-column justify-content-between text-dark">
                        <h4 class="mt-2 mb-1 fst-italic">Titolo: <span class="fw-bold">{{ $article->title }}</span></h4>
                        <hr class="my-2">
                        <h6 class="fst-italic ">Categoria: <span class="fw-bold">#{{ $article->category->name }}</span>
                        </h6>
                        <hr class="my-2">
                        <div class="scrollspy-example text-black divDescriptionCardRev mb-3" data-bs-spy="scroll"
                            data-bs-smooth-scroll="true" tabindex="0">
                            <h6 class="fst-italic">Descrizione:</h6>
                            <span class="fw-bold">{{ $article->description }}</span>
                        </div>
                        <hr class="my-2">
                        <h6 class="fst-italic mb-2">Prezzo: <span class="fw-bold">{{ $article->price }}
                                €</span> </h6>
                        <hr class="my-2">
                        <h6 class="fst-italic mb-3">Autore: <span class="fw-bold">{{ $article->user->name }}</span>
                        </h6>
                    </div>
                    <!-- qui deve andare il bottone del carrello -->
                    <div class=" d-flex justify-content-between">
                        <a class="btn btn-secondary w-25 " href="{{ route('homepage') }}">Indietro</a>
                        <button type="submit" class="btn btn-success w-25 ">Acquista</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
