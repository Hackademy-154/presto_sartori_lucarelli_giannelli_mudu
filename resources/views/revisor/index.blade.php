<x-layout>
    <div class="container spazioNav2 ">
        <div class="row spazioMinimo  justify-content-center align-items-start">
            <div class="col-12 d-flex flex-column justify-content-center align-items-center">
                @if (!$article_to_check)
                    <h1 class="mb-4 fw-bold">Nessun articolo da revisionare</h1>
                @endif
                @if (session()->has('message'))
                    <div
                        class="col-12 text text-center mb-2 d-flex flex-column justify-content-center align-items-center">
                        <!-- messaggio di avvenuta accettazione o rifiuto dell'articolo  -->
                        <div class="row justify-content-center d-flex flex-column w-100">
                            <div
                                class="col-12 mt-2 d-flex align-items-center justify-content-evenly alert alert-success text-center shadow rounded">
                                {{ session('message') }}
                            </div>
                            <div
                                class="col-12  d-flex align-items-center p-2 justify-content-evenly alert alert-warning text-center shadow rounded">
                                <form action="{{ route('undoSetArticle') }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <div class="btnCustom d-flex justify-content-center align-items-center ">
                                        <p class="m-0 alert p-0 me-3">Clicca per annullare la modifica</p>
                                        <button
                                            class="btnCustomIcon ms-1 d-flex justify-content-center align-items-center">
                                            <i class="bi mt-1  bi-arrow-clockwise fs-4 fw-bold text-white"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endif
                @if (!$article_to_check)
                    <a href="{{ route('homepage') }}" class="btn btn-success">Torna alla homepage</a>
                @endif
                <!-- controllo per verificare se c'è un articolo da revisionare -->
                @if ($article_to_check)
                    <!-- ci sono articoli da rev -->
                    <div class="row justify-content-center align-items-center ">
                        <h1 class="text-dark text-center  fw-bold">Dashboard del Revisore</h1>
                        @if (session()->has('messageUndo'))
                            <div class="row justify-content-center">
                                <div class="col-12 mb-3 alert alert-warning text-center shadow rounded">
                                    {{ session('messageUndo') }}
                                </div>
                            </div>
                        @endif
                        <div
                            class="col-12 col-md-10 pb-3 mt-4  d-flex justify-content-start align-items-center cardShow ps-0">
                            <!-- 6 img per l'articolo -->
                            <div class="contImgDettaglio d-flex flex-column justify-content-evenly">
                                @if ($article_to_check->images->count())
                                    @foreach ($article_to_check->images as $key=>$image)
                                    <div class="img-dettaglio">
                                        <img src="{{ Storage::url($image->path) }}" class="imgShow" alt="Immagine {{$key+1}} dell'articolo '{{$article_to_check->title}}'">
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
                                <img src="{{Storage::url($article->images->first()->path)}}" alt="">
                            </div>
                            <div class="col-12 col-md-4 ms-4 d-flex flex-column justify-content-center">
                                <div class="d-flex flex-column justify-content-between text-dark">
                                    <h4 class="mt-2 mb-1 fst-italic">Titolo: <span
                                            class="fw-bold">{{ $article_to_check->title }}</span></h4>
                                    <hr class="my-2">
                                    <h6 class="fst-italic ">Categoria: <span
                                            class="fw-bold">#{{ $article_to_check->category->name }}</span> </h6>
                                    <hr class="my-2">
                                    <div class="scrollspy-example text-black divDescriptionCardRev mb-3"
                                        data-bs-spy="scroll" data-bs-smooth-scroll="true" tabindex="0">
                                        <h6 class="fst-italic">Descrizione:</h6>
                                        <span class="fw-bold">{{ $article_to_check->description }}</span>
                                    </div>
                                    <hr class="my-2">
                                    <h6 class="fst-italic mb-2">Prezzo: <span
                                            class="fw-bold">{{ $article_to_check->price }}
                                            €</span> </h6>
                                    <hr class="my-2">
                                    <h6 class="fst-italic mb-3">Autore: <span
                                            class="fw-bold">{{ $article_to_check->user->name }}</span> </h6>
                                </div>
                                <div class="d-flex justify-content-between align-items-start ">
                                    <div class="d-flex">
                                        <form action="{{ route('reject', ['article' => $article_to_check]) }}"
                                            method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <button class="btn btn-danger  ">Rifiuta</button>
                                        </form>
                                    </div>
                                    <div class="d-flex">
                                        <form action="{{ route('accept', ['article' => $article_to_check]) }}"
                                            method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <button class="btn btn-success w-100 ">Accetta</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
</x-layout>
