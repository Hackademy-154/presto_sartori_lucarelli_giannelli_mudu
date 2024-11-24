<x-layout>
    <div class="container sfumaturaa mb-4 spazioNav3">
        {{-- Swiper Header --}}
        <div class="row borderTop pt-0 ">
            <div class=" col-12 swiper mySwiper borderTop"
                style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="row h-100 align-items-center">
                            <div
                                class="col-12 col-md-6 d-flex flex-column justify-content-start justify-content-md-center p-0 p-lg-5 headerSX order-2 order-lg-1">
                                <div class="title" data-swiper-parallax="-300">
                                    <h1 class="fw-bold text-center text-md-start">{{ __('ui.welcome') }}</h1>
                                </div>
                                <div class="subtitle" data-swiper-parallax="-200">
                                    <h3 class="pb-3 text-center text-md-start">{{ __('ui.slogan1') }}</h3>
                                </div>
                                <div class="text" data-swiper-parallax="-100">
                                    <p class="text-center text-md-start">
                                        {{ __('ui.text1') }}
                                    </p>
                                </div>
                                <div class="d-flex justify-content-center justify-content-md-start">
                                    <a href="{{ route('article.index') }}"
                                        class="btn buttonCharacter fs-5 mt-2 text-center d-flex justify-content-center">{{ __('ui.btnDiscoverAds') }}</a>
                                </div>
                            </div>
                            <div
                                class="col-12 col-md-6 d-flex imgHeader ps-0 justify-content-start justify-content-lg-start align-items-center  d-none d-md-block order-1 order-lg-1">
                                <div class="d-flex justify-content-center align-items-center">
                                    <img style="height: 420px;" class="img-fluid   ps-0"
                                        src="{{ Storage::url('image/header.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="row h-100 align-items-center">
                            <div
                                class="col-12 col-md-6 d-flex flex-column justify-content-center text-md p-0 p-lg-5 headerSX order-2 order-lg-1">
                                <div class="title " data-swiper-parallax="-300">
                                    <h1 class="fw-bold text-center text-md-start">{{ __('ui.addAds') }}</h1>
                                </div>
                                <div class="subtitle" data-swiper-parallax="-200">
                                    <h3 class=" pb-3 text-center text-md-start">{{ __('ui.slogan2') }}</h3>
                                </div>
                                <div class="text" data-swiper-parallax="-100">
                                    <p class="text-center text-md-start">
                                        {{ __('ui.text2') }}
                                    </p>
                                </div>
                                <div class="d-flex justify-content-center justify-content-md-start">
                                    <a href="{{ route('article.create') }}"
                                        class=" buttonCharacter mt-2 fs-5 text-center ">{{ __('ui.btnAddAds') }}</a>
                                </div>
                            </div>
                            <div
                                class="col-12 col-md-6 ps-0 imgHeader2 d-flex justify-content-center justify-content-lg-start align-items-center d-none d-md-block order-1 order-lg-2">
                                <img style="height: 420px;" class="img-fluid  ps-0 "
                                    src="{{ Storage::url('image/header2.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
        {{-- Section Info --}}
        <div class="row text-center cambiacolore  borderBottom py-4 py-md-2 px-4 px-md-5">
            {{-- Punto di forza 1 --}}
            <div class="col-12 col-md-6 col-lg-3 pt-2">
                <div class="infoIcon">
                    <i class="bi bi-truck fs-1 barraIcon  mb-3"></i>
                    <h5>{{ __('ui.fastDelivery') }}</h5>
                    <div class="divisorioIcons"></div>
                    <p>{{ __('ui.textDelivery') }}.</p>
                </div>
            </div>
            {{-- Punto di forza 2 --}}
            <div class="col-12 col-md-6 col-lg-3 pt-2">
                <div class="infoIcon">
                    <i class="bi bi-lock fs-1 barraIcon  mb-3"></i>
                    <h5>{{ __('ui.securePayment') }}</h5>
                    <div class="divisorioIcons"></div>
                    <p>{{ __('ui.textPayment') }}</p>
                </div>
            </div>
            {{-- Punto di forza 3 --}}
            <div class="col-12 col-md-6 col-lg-3 pt-2">
                <div class="infoIcon">
                    <i class="bi bi-award fs-1 barraIcon  mb-3"></i>
                    <h5>{{ __('ui.quality') }}</h5>
                    <div class="divisorioIcons"></div>
                    <p>{{ __('ui.textQuality') }}</p>
                </div>
            </div>
            {{-- Punto di forza 4 --}}
            <div class="col-12 col-md-6 col-lg-3 pt-2">
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
                <h2 class="text-center fw-bold  mb-2   textGrey">{{ __('ui.slogan3') }}</h2>
                <p class=" mt-0 text-muted text-center text-lg-start fst-italic sfumaturaa my-4 mb-3">
                    {{ __('ui.text3') }}
                </p>
                <a class="text-white buttonCustom btn mt-0"
                    href="{{ route('article.create') }}">{{ __('ui.btnSellNow') }}</a>
            </div>
        </div>
    </div>
    {{-- Ultimi 4 annunci --}}
    <div class="container cambiacolore sfumaturaa mt-4 border py-3">
        <div class="row justify-content-center">
            <div class="col-12 d-flex justify-content-start align-items-center mb-4 mt-2 sectionsArrow ps-4 pt-3">
                <h2 class="m-0 textGrey fw-bold ">{{ __('ui.allArticles') }}</h2><a class="mt-1 colorPetrolio"
                    href="{{ route('article.index') }}"><i
                        class="bi colorPetrolio fw-bold bi-arrow-right-short fs-1 mt-1"></i></a>
            </div>
            <hr class="w-100">

            @foreach ($articles as $article)
                <x-cardArticle :article="$article"></x-cardArticle>
            @endforeach

        </div>
    </div>
    {{-- Lavora con noi --}}
    <div class="container mt-4 py-5 cambiacolore border sfumaturaa">
        <div class="row text-center mb-4">
            <div class="col-12">
                <h2 class="fw-bold textGrey">{{ __('ui.aboutUs') }}</h2>
                <p class="text-muted">{{ __('ui.textAboutUs') }}</p>
            </div>
        </div>
        <hr class="">
        <div class="row align-items-center">
            <div class="col-md-12 col-lg-6 d-flex flex-column d-none d-md-block">
                <img src="/media/hiring4.jpeg " class="img-fluid rounded shadow" alt="Il nostro team al lavoro">
            </div>
            <div class="col-md-6 col-lg-3 d-flex flex-column">
                <h3 class="fw-bold text-black text-center text-md-start">{{ __('ui.mission') }}</h3>
                <img src="/media/hiring4.jpeg " class="img-fluid rounded shadow d-block d-md-none my-2 mb-3"
                    alt="Il nostro team al lavoro">

                <p class="text-muted text-center text-md-start">{{ __('ui.textMission') }}</p>
            </div>

            <div class="col-md-6 col-lg-3 d-flex flex-column">

                <h4 class="fw-bold mt-4 text-black text-center text-md-start mb-3 mb-md-2">{{ __('ui.whyUs') }}</h4>
                <ul class="list-unstyled">
                    <li class="d-flex align-items-center mb-3">
                        <i class="bi bi-check-circle-fill text-success me-3"></i>
                        <span>{{ __('ui.answer1') }}</span>
                    </li>
                    <li class="d-flex align-items-center mb-3">
                        <i class="bi bi-check-circle-fill text-success me-3"></i>
                        <span>{{ __('ui.answer2') }}</span>
                    </li>
                    <li class="d-flex align-items-center mb-3">
                        <i class="bi bi-check-circle-fill text-success me-3"></i>
                        <span>{{ __('ui.answer3') }}</span>
                    </li>
                </ul>
            </div>

        </div>
        <hr class="">
        <div class="row mt-4 text-center">
            <div class="col-12 textGrey">
                <h3 class="fw-bold textGrey">{{ __('ui.joinUs') }}</h3>
                <p class="text-muted">{{ __('ui.textJoinUs') }}</p>
                <a href="{{ route('form.revisor') }}"
                    class="text-white buttonCustom btn mt-0 ">{{ __('ui.btnJoinUs') }}</a>
            </div>
        </div>
    </div>
</x-layout>
