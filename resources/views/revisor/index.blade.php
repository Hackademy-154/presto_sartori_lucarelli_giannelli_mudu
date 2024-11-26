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
                        class="row justify-content-center justify-content-lg-evenly align-items-center flex-column flex-lg-row cardShow py-4 py-md-3 mt-4">
                        <hr class="d-lg-none">
                        <!-- 6 img per l'articolo -->
                        <div class="col-12 col-md-12 p-0 contImgDettaglio d-flex flex-lg-column justify-content-evenly ">
                            @if ($article_to_check->images->count())
                                @foreach ($article_to_check->images as $key => $image)
                                <div>
                                        <div class="card-body">
                                            <h5>Labels</h5>
                                            @if($image->labels)
                                                @foreach ($image->labels as $label)
                                                    #{{ $label }},
                                                @endforeach
                                            @else
                                                <p class="fst-italic">No labels</p>
                                            @endif
                                        </div>
                                     </div>
                                    <div>
                                        <h5>Ratings</h5>
                                        <div class="row" >
                                            <div class="col-2" >
                                                <div class="{{$image->adult}}"></div>
                                            </div>
                                            <div class="col-10">adult</div>
                                        </div>
                                        <div class="row" >
                                            <div class="col-2" >
                                                <div class="{{$image->violence}}"></div>
                                            </div>
                                            <div class="col-10">violence</div>
                                        </div>
                                        <div class="row" >
                                            <div class="col-2" >
                                                <div class="{{$image->spoof}}"></div>
                                            </div>
                                            <div class="col-10">spoof</div>
                                        </div>
                                        <div class="row" >
                                            <div class="col-2" >
                                                <div class="{{$image->racy}}"></div>
                                            </div>
                                            <div class="col-10">racy</div>
                                        </div>
                                        <div class="row" >
                                            <div class="col-2" >
                                                <div class="{{$image->medical}}"></div>
                                            </div>
                                            <div class="col-10">medical</div>
                                        </div>
                                        
                                    </div>
                                    <div class="img-dettaglio ">
                                        <img src="{{ $image->getUrl(1000, 1000) }}" class="imgShow"
                                            alt="Immagine {{ $key + 1 }} dell'articolo '{{ $article_to_check->title }}'">
                                    </div>
                                    <!-- inizio Googlequalcosa -->
                                     
                                @endforeach
                            
                            @endif
                        </div>
                        <hr class="mt-3 mb-0 d-lg-none">
                        <!-- <div class="col-12 col-md-5 img-container text-center">
                            <img class="imgShow" src="{{ $image->getUrl(1000, 1000) }}" alt="">
                        </div> -->
                        <div class="col-12 col-lg-5 ms-0 ms-lg-4 d-flex flex-column justify-content-center">
                            <div class="d-flex flex-column justify-content-between text-dark">
                                <h4 class="mt-2 mb-1 fst-italic"> <span
                                        class="fw-bold">{{ ucFirst($article_to_check->title) }}</span></h4>
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
                @endif
            </div>
        </div>
</x-layout>
