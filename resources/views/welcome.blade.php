<x-layout>
    <div class="container sfumaturaa mb-4">
        {{-- Swiper Header --}}
        <div class="row borderTop ">
            <div class=" col-12 swiper mySwiper borderTop"
                style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="row h-100">
                            <div class="col-6 d-flex flex-column justify-content-center p-5 headerSX">
                                <div class="title" data-swiper-parallax="-300">
                                    <h1 class="fw-bold">Benvenuto</h1>
                                </div>
                                <div class="subtitle" data-swiper-parallax="-200">
                                    <h3 class="pb-3">Il tuo shopping, il nostro impegno</h3>
                                </div>
                                <div class="text" data-swiper-parallax="-100">
                                    <p>
                                        Scopri un mondo di prodotti selezionati con cura per soddisfare ogni tua
                                        esigenza.
                                        Siamo qui per offrirti un'esperienza di acquisto semplice, sicura e piacevole.
                                        Esplora le nostre offerte, approfitta di vantaggi esclusivi e lascia che la tua
                                        prossima avventura inizi con noi. La qualità e la tua soddisfazione sono la
                                        nostra priorità!
                                    </p>
                                </div>
                                <a href="{{ route('article.index') }}" class="btn buttonCharacter fs-5 mt-2">Scopri
                                    Annunci</a>
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
                                    <h1>Inserisci Annuncio</h1>
                                </div>
                                <div class="subtitle" data-swiper-parallax="-200">
                                    <h2>Senza perdere tempo</h2>
                                </div>
                                <div class="text" data-swiper-parallax="-100">
                                    <p>
                                        Pubblica i tuoi annunci in pochi semplici passaggi. La nostra piattaforma è
                                        pensata
                                        per
                                        farti risparmiare tempo prezioso, permettendoti di concentrarti su ciò che conta
                                        davvero.
                                        Non aspettare, inizia ora!
                                    </p>
                                </div>
                                <a href="{{ route('article.create') }}" class="btn buttonCharacter mt-2 fs-5">Aggiungi
                                    un
                                    articolo</a>
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
                    <h5>Spedizione Veloce</h5>
                    <div class="divisorioIcons"></div>
                    <p>Servizio di consegna rapido
                        ed efficiente.</p>
                </div>
            </div>
            {{-- Punto di forza 2 --}}
            <div class="col-6 col-md-3 pt-2">
                <div class="infoIcon">
                    <i class="bi bi-lock fs-1 barraIcon  mb-3"></i>
                    <h5>Pagamento Sicuro</h5>
                    <div class="divisorioIcons"></div>
                    <p>Metodi di pagamento affidabili e
                        protetti.</p>
                </div>
            </div>
            {{-- Punto di forza 3 --}}
            <div class="col-6 col-md-3 pt-2">
                <div class="infoIcon">
                    <i class="bi bi-award fs-1 barraIcon  mb-3"></i>
                    <h5>Qualità Garantita</h5>
                    <div class="divisorioIcons"></div>
                    <p>Massimo della qualità e della
                        soddisfazione.</p>
                </div>
            </div>
            {{-- Punto di forza 4 --}}
            <div class="col-6 col-md-3 pt-2">
                <div class="infoIcon">
                    <i class="bi bi-headset fs-1 barraIcon  mb-3"></i>
                    <h5>Assistenza 24/7</h5>
                    <div class="divisorioIcons"></div>
                    <p>Servizio di assistenza sempre disponibile.</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Swiper Category --}}
    <div class="container text-center cambiacolore sfumaturaa mt-3 mb-4 border">
        <div class="row justify-content-center ">
            <div class="col-12 d-flex justify-content-start align-items-center mb-1 mt-2 sectionsArrow ps-4 pt-3">
                <h2 class="m-0 textGrey fw-bold ">Categorie</h2><a class="colorPetrolio mt-1"
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
                                <h5 class="text-dark mt-3 fw-bold">{{ ucWords($category->name) }}</h5>
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
