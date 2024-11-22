<x-layout>
    <div class="container sfumaturaa mb-4 spazioNav3">
        {{-- Swiper Header --}}
        <div class="row borderTop pt-0 ">
            <div class=" col-12 swiper mySwiper borderTop"
                style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="row h-100">
                            <div class="col-6 d-flex flex-column justify-content-center p-5 headerSX">
                                <div class="title" data-swiper-parallax="-300">
                                    <h1 class="fw-bold">{{ __('ui.welcome') }}</h1>
                                </div>
                                <div class="subtitle" data-swiper-parallax="-200">
                                    <h3 class="pb-3">{{ __('ui.slogan1') }}</h3>
                                </div>
                                <div class="text" data-swiper-parallax="-100">
                                    <p>
                                        {{ __('ui.text1') }}
                                    </p>
                                </div>
                                <a href="{{ route('article.index') }}"
                                    class="btn buttonCharacter fs-5 mt-2">{{ __('ui.btnDiscoverAds') }}</a>
                            </div>
                            <div class="col-6 d-flex justify-content-start align-items-center">
                                <img class="img-fluid imgHeader" src="{{ Storage::url('image/header.png') }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="row h-100">
                            <div class="col-6 d-flex flex-column justify-content-center p-5 headerSX">
                                <div class="title" data-swiper-parallax="-300">
                                    <h1>{{ __('ui.addAds') }}</h1>
                                </div>
                                <div class="subtitle" data-swiper-parallax="-200">
                                    <h2>{{ __('ui.slogan2') }}</h2>
                                </div>
                                <div class="text" data-swiper-parallax="-100">
                                    <p>
                                        {{ __('ui.text2') }}
                                    </p>
                                </div>
                                <a href="{{ route('article.create') }}"
                                    class=" buttonCharacter mt-2 fs-5">{{ __('ui.btnAddAds') }}</a>
                            </div>
                            <div class="col-6 d-flex justify-content-start align-items-center">
                                <img class="img-fluid imgHeader2 " src="{{ Storage::url('image/header2.png') }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
        {{-- Section Info --}}
        <div class="row text-center cambiacolore  borderBottom">
            {{-- Punto di forza 1 --}}
            <div class="col-6 col-md-3 pt-2">
                <div class="infoIcon">
                    <i class="bi bi-truck fs-1 barraIcon  mb-3"></i>
                    <h5>{{ __('ui.fastDelivery') }}</h5>
                    <div class="divisorioIcons"></div>
                    <p>{{ __('ui.textDelivery') }}.</p>
                </div>
            </div>
            {{-- Punto di forza 2 --}}
            <div class="col-6 col-md-3 pt-2">
                <div class="infoIcon">
                    <i class="bi bi-lock fs-1 barraIcon  mb-3"></i>
                    <h5>{{ __('ui.securePayment') }}</h5>
                    <div class="divisorioIcons"></div>
                    <p>{{ __('ui.textPayment') }}</p>
                </div>
            </div>
            {{-- Punto di forza 3 --}}
            <div class="col-6 col-md-3 pt-2">
                <div class="infoIcon">
                    <i class="bi bi-award fs-1 barraIcon  mb-3"></i>
                    <h5>{{ __('ui.quality') }}</h5>
                    <div class="divisorioIcons"></div>
                    <p>{{ __('ui.textQuality') }}</p>
                </div>
            </div>
            {{-- Punto di forza 4 --}}
            <div class="col-6 col-md-3 pt-2">
                <div class="infoIcon">
                    <i class="bi bi-headset fs-1 barraIcon  mb-3"></i>
                    <h5>{{ __('ui.customerService') }}</h5>
                    <div class="divisorioIcons"></div>
                    <p>{{ __('ui.textService') }}</p>
                </div>
            </div>
        </div>
    </div>
    {{-- Swiper Category --}}
    <div class="container text-center cambiacolore sfumaturaa mt-3 mb-4 border mt-4">
        <div class="row justify-content-center ">
            <div class="col-12 d-flex justify-content-start align-items-center mb-4 mt-2 sectionsArrow ps-4 pt-3">
                <h2 class="m-0 textGrey fw-bold ">{{ __('ui.categories') }}</h2><a class="colorPetrolio mt-1"
                    href="{{ route('article.index') }}"><i
                        class="bi colorPetrolio fw-bold bi-arrow-right-short fs-1 mt-1"></i></a>
            </div>
            <hr class="w-100">
            <div class="col-12 swiper2 d-flex">
                <div class="swiper-wrapper">
                    @foreach ($categories as $category)
                        <div class="swiper-slide ">
                            <a href="{{ route('article.byCategory', compact('category')) }}">
                                <img src={{ '/media/category_pic/' . $category->id . '.jpg' }}
                                    class="imgCategoryCerchio sfumatura">
                                <h5 class="text-dark mt-3 fw-bold">{{ ucFirst(__("ui.$category->name")) }}</h5>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    {{-- Pubblica e guadagna --}}
    <div class="container   mt-4 ">
        <div class="row justify-content-center align-items-center sfumaturaa ">
            <div
                class="col-12 d-flex flex-column justify-content-start align-items-center callToActionWork pb-4 px-4 py-4">
                <h2 class="text-center fw-bold  mb-2  textGrey">Pubblica e Guadagna!</h2>
                <p class=" mt-0 text-muted fst-italic sfumaturaa my-4 mb-3">Carica il tuo articolo oggi e inizia a
                    monetizzare. Non
                    aspettare,
                    il tuo
                    pubblico ti
                    sta aspettando!
                </p>
                <a class="text-white buttonCustom btn mt-0" href="{{ route('article.create') }}">Pubblica
                    subito</a>
            </div>
        </div>
    </div>
    {{-- Ultimi 4 annunci --}}
    <div class="container cambiacolore sfumaturaa mt-4 border">
        <div class="row justify-content-center">
            <div class="col-12 d-flex justify-content-start align-items-center mb-4 mt-2 sectionsArrow ps-4 pt-3">
                <h2 class="m-0 textGrey fw-bold ">{{ __('ui.allArticles') }}</h2><a class="mt-1 colorPetrolio"
                    href="{{ route('article.index') }}"><i
                        class="bi colorPetrolio fw-bold bi-arrow-right-short fs-1 mt-1"></i></a>
            </div>
            <hr class="w-100">
            <div class="col-12 d-flex  wrapper justify-content-evenly align-items-center mt-1 pb-5">
                @foreach ($articles as $article)
                    <x-cardArticle :article="$article"></x-cardArticle>
                @endforeach
            </div>
        </div>
    </div>
    {{-- Lavora con noi --}}
    <div class="container mt-4 py-5 cambiacolore border sfumaturaa">
        <div class="row text-center mb-4">
            <div class="col-12">
                <h2 class="fw-bold textGrey">Chi Siamo</h2>
                <p class="text-muted">Scopri di più sulla nostra missione e sui nostri valori.</p>
            </div>
        </div>
        <hr class="">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="/media/hiring4.jpeg" class="img-fluid rounded shadow" alt="Il nostro team al lavoro">
            </div>
            <div class="col-md-6">
                <h3 class="fw-bold text-black">La nostra missione</h3>
                <p class="text-muted">Crediamo nel valore delle idee e vogliamo creare connessioni significative
                    tra le persone. La nostra piattaforma offre un luogo sicuro per condividere e scoprire articoli
                    unici.</p>
                <h4 class="fw-bold mt-4 text-black">Perché sceglierci?</h4>
                <ul class="list-unstyled">
                    <li class="d-flex align-items-center mb-3">
                        <i class="bi bi-check-circle-fill text-success me-3"></i>
                        <span>Facilità d'uso per pubblicare i tuoi articoli.</span>
                    </li>
                    <li class="d-flex align-items-center mb-3">
                        <i class="bi bi-check-circle-fill text-success me-3"></i>
                        <span>Una community sicura e affidabile.</span>
                    </li>
                    <li class="d-flex align-items-center mb-3">
                        <i class="bi bi-check-circle-fill text-success me-3"></i>
                        <span>Supporto costante e personalizzato.</span>
                    </li>
                </ul>
            </div>
        </div>
        <hr class="">
        <div class="row mt-4 text-center">
            <div class="col-12 textGrey">
                <h3 class="fw-bold textGrey">Unisciti a noi!</h3>
                <p class="text-muted">Credi nel cambiamento? Siamo sempre alla ricerca di nuovi talenti. Unisciti
                    al nostro team e fai la differenza!</p>
                <a href="{{ route('form.revisor') }}" class="text-white buttonCustom btn mt-0 ">Candidati
                    Ora</a>
            </div>
        </div>
    </div>
</x-layout>
