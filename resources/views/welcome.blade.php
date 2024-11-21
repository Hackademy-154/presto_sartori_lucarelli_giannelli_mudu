<x-layout>
    <div class="container sfumaturaa mb-4">
        {{-- Swiper Header --}}
        <div class="row borderTop spazioNav3">
            <div class=" col-12 swiper mySwiper borderTop"
                style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="row h-100">
                            <div class="col-6 d-flex flex-column justify-content-center p-5 headerSX">
                                <div class="title" data-swiper-parallax="-300">
                                    <h1 class="fw-bold">{{__('ui.welcome')}}</h1>
                                </div>
                                <div class="subtitle" data-swiper-parallax="-200">
                                    <h3 class="pb-3">{{__('ui.slogan1')}}</h3>
                                </div>
                                <div class="text" data-swiper-parallax="-100">
                                    <p>
                                    {{__('ui.text1')}}
                                    </p>
                                </div>
                                <a href="{{ route('article.index') }}" class="btn buttonCharacter fs-5 mt-2">{{__('ui.btnDiscoverAds')}}</a>
                            </div>
                            <div class="col-6 d-flex justify-content-start align-items-center">
                                <img class="img-fluid imgHeader" src="{{ Storage::url('image/header.png') }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="row h-100">
                            <div class="col-6 d-flex flex-column justify-content-center p-5 headerSX">
                                <div class="title" data-swiper-parallax="-300">
                                    <h1>{{__('ui.addAds')}}</h1>
                                </div>
                                <div class="subtitle" data-swiper-parallax="-200">
                                    <h2>{{__('ui.slogan2')}}</h2>
                                </div>
                                <div class="text" data-swiper-parallax="-100">
                                    <p>
                                    {{__('ui.text2')}}
                                    </p>
                                </div>
                                <a href="{{ route('article.create') }}" class="btn buttonCharacter mt-2 fs-5">{{__('ui.btnAddAds')}}</a>
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
            {{-- Search --}}


            {{-- Punto di forza 1 --}}
            <div class="col-6 col-md-3 pt-2">
                <div class="infoIcon">
                    <i class="bi bi-truck fs-1 barraIcon  mb-3"></i>
                    <h5>{{__('ui.fastDelivery')}}</h5>
                    <div class="divisorioIcons"></div>
                    <p>{{__('ui.textDelivery')}}.</p>
                </div>
            </div>
            {{-- Punto di forza 2 --}}
            <div class="col-6 col-md-3 pt-2">
                <div class="infoIcon">
                    <i class="bi bi-lock fs-1 barraIcon  mb-3"></i>
                    <h5>{{__('ui.securePayement')}}</h5>
                    <div class="divisorioIcons"></div>
                    <p>{{__('ui.textPayement')}}</p>
                </div>
            </div>
            {{-- Punto di forza 3 --}}
            <div class="col-6 col-md-3 pt-2">
                <div class="infoIcon">
                    <i class="bi bi-award fs-1 barraIcon  mb-3"></i>
                    <h5>{{__('ui.quality')}}</h5>
                    <div class="divisorioIcons"></div>
                    <p>{{__('ui.textQuality')}}</p>
                </div>
            </div>
            {{-- Punto di forza 4 --}}
            <div class="col-6 col-md-3 pt-2">
                <div class="infoIcon">
                    <i class="bi bi-headset fs-1 barraIcon  mb-3"></i>
                    <h5>{{__('ui.customerService')}}</h5>
                    <div class="divisorioIcons"></div>
                    <p>{{__('ui.textService')}}</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Swiper Category --}}
    <div class="container text-center cambiacolore sfumaturaa mt-3 mb-4 border">
        <div class="row justify-content-center ">
            <div class="col-12 d-flex justify-content-start align-items-center mb-1 mt-2 sectionsArrow ps-4 pt-3">
                <h2 class="m-0 textGrey fw-bold ">{{__('ui.categories')}}</h2><a class="colorPetrolio mt-1"
                    href="{{ route('article.index') }}"><i
                        class="bi colorPetrolio fw-bold bi-arrow-right-short fs-1 mt-1"></i></a>
            </div>
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
    {{-- Ultimi 4 annunci --}}
    <div class="container cambiacolore sfumaturaa mt-4 border">
        <div class="row">
            <div class="col-12 d-flex justify-content-start align-items-center mb-4 mt-2 sectionsArrow ps-4 pt-3">
                <h2 class="m-0 textGrey fw-bold ">Annunci</h2><a class="mt-1 colorPetrolio"
                    href="{{ route('article.index') }}"><i
                        class="bi colorPetrolio fw-bold bi-arrow-right-short fs-1 mt-1"></i></a>
            </div>
            <div class="col-12 d-flex  wrapper justify-content-evenly align-items-center mt-1 pb-5">
                @foreach ($articles as $article)
                    <x-cardArticle :article="$article"></x-cardArticle>
                @endforeach
            </div>
        </div>
    </div>

</x-layout>
