<x-layout>
    <div class="container spazioNav2 margin-footer">
        <div class="row spazioMinimo  justify-content-center align-items-center">
            <div class="col-12 d-flex
            flex-column justify-content-center align-items-center">
                @if (!$article_to_check)
                    <h1 class="mb-4 fw-bold text-center">{{ __('ui.noReview') }}.</h1>
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
                                        <p class="m-0 alert p-0 me-3">{{ __('ui.undoChange') }}</p>
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
                    <a href="{{ route('homepage') }}" class="btn btn-success w-75">{{ __('ui.btnHP') }}</a>
                @endif
                <!-- controllo per verificare se c'è un articolo da revisionare -->
                @if ($article_to_check)
                    <!-- ci sono articoli da rev -->


                    <h1 class="text-dark text-center   fw-bold">{{ __('ui.dashboardRevisor') }}</h1>
                    @if (session()->has('messageUndo'))
                        <div class="row justify-content-center">
                            <div class="col-12 mb-3 alert alert-warning text-center shadow rounded">
                                {{ session('messageUndo') }}
                            </div>
                        </div>
                    @endif
                    <div
                        class="row justify-content-center w-100 align-items-center  flex-lg-row cardShowRevisor py-4 py-md-3 mt-4">

                        <!-- 6 img per l'articolo -->
                        <div class="col-6 d-flex">
                            <div class="row justify-content-evenly align-items-center flex-column w-100">
                                @if ($article_to_check->images->count())
                                    @foreach ($article_to_check->images as $key => $image)
                                        {{-- <div>
                                            <div class="card-body">
                                                <h5>Labels</h5>
                                                @if ($image->labels)
                                                    @foreach ($image->labels as $label)
                                                        #{{ $label }},
                                                    @endforeach
                                                @else
                                                    <p class="fst-italic">No labels</p>
                                                @endif
                                            </div>
                                        </div> --}}

                                        <div
                                            class="col-12 mb-2 img-dettaglioRevisor  d-flex justify-content-center align-items-center px-0 mx-2">
                                            <div class="row justify-content-center  align-items-center">
                                                <div class="col-10 d-flex px-0">

                                                    <img src="{{ $image->getUrl(1000, 1000) }}" class="imgShowRevisor "
                                                        alt="Immagine {{ $key + 1 }} dell'articolo '{{ $article_to_check->title }}'">
                                                </div>
                                                <div
                                                    class="col-1 flex-column  d-flex justify-content-start align-items-start mx-1 px-0">
                                                    <div
                                                        class="col-12 mx-1 d-flex  align-items-center {{ $image->adult }}">
                                                        <span class="ms-2">Adult</span>
                                                    </div>
                                                    <div
                                                        class="col-12 mx-1 d-flex align-items-center {{ $image->violence }}">
                                                        <span class="ms-2">Violence </span>
                                                    </div>
                                                    <div
                                                        class="col-12 mx-1 d-flex align-items-center {{ $image->spoof }}">
                                                        <span class="ms-2">Spoof </span>
                                                    </div>
                                                    <div
                                                        class="col-12 mx-1 d-flex align-items-center {{ $image->racy }}">
                                                        <span class="ms-2">Racy </span>
                                                    </div>
                                                    <div
                                                        class="col-12 mx-1 d-flex align-items-center {{ $image->medical }}">
                                                        <span class="ms-2">Medical </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 ms-0 ms-lg-4 d-flex flex-column justify-content-center">
                            <div class="d-flex flex-column justify-content-between text-dark">
                                <h4 class="mt-2 mb-1 fst-italic"> <span
                                        class="fw-bold">{{ ucFirst($article_to_check->title) }}</span>
                                </h4>
                                <hr class="my-2">
                                <h6 class="fst-italic">
                                    <span
                                        class="fw-bold">#{{ ucfirst(__('ui.' . $article_to_check->category->name)) }}</span>
                                </h6>
                                <hr class="my-2">
                                <div class="scrollspy-example text-black divDescriptionCardRev mb-3"
                                    data-bs-spy="scroll" data-bs-smooth-scroll="true" tabindex="0">
                                    <h6 class="fst-italic"></h6>
                                    <span class="fw-bold">{{ ucfirst($article_to_check->description) }}</span>
                                </div>
                                <hr class="my-2">
                                <h6 class="fst-italic mb-2">{{ __('ui.price') }}: <span
                                        class="fw-bold">{{ $article_to_check->price }}
                                        €</span> </h6>
                                <hr class="my-2">
                                <h6 class="fst-italic mb-3">{{ __('ui.author') }}: <span
                                        class="fw-bold">{{ $article_to_check->user->name }}</span> </h6>
                            </div>
                            <div class="d-flex justify-content-between align-items-start ">
                                <div class="d-flex">
                                    <form action="{{ route('reject', ['article' => $article_to_check]) }}"
                                        method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button class="btn btn-danger  ">{{ __('ui.reject') }}</button>
                                    </form>
                                </div>
                                <div class="d-flex">
                                    <form action="{{ route('accept', ['article' => $article_to_check]) }}"
                                        method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button class="btn btn-success w-100 ">{{ __('ui.accept') }}</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <hr class="mt-3 mb-0 d-lg-none">
            <!-- <div class="col-12 col-md-5 img-container text-center">
                            <img class="imgShow" src="{{ $image->getUrl(1000, 1000) }}" alt="">
                        </div> -->

        </div>
        @endif
    </div>
    </div>
</x-layout>
