<x-layout>
    <div class="container  ">
        <div class="row pt-5">
            <div class="col-12 text-center my-5">
                <h1 class="text-dark fw-bold">{{ __('ui.detail') }}: "{{ $article->title }}"</h1>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="row justify-content-center justify-content-lg-around align-items-center flex-column flex-lg-row cardShow sfumatura py-4 py-md-3 mt-4">
                <hr class="d-lg-none">
                <div class="col-12 col-lg-2 contImgDettaglio d-flex flex-column justify-content-evenly">
                    @if ($article->images->count())
                        @foreach ($article->images as $key => $image)
                            <div class="img-dettaglio">
                                <img src="{{ $image->getUrl(1000, 1000) }}" class="imgShow"
                                    alt="Immagine {{ $key + 1 }} dell'articolo '{{ $article->title }}'">
                            </div>
                        @endforeach
                    @else
                        @for ($i = 0; $i < 6; $i++)
                            <div class="img-dettaglio">
                                <img class="imgShow" src="https://picsum.photos/35{{ $i }}" alt="img provvisorie">
                            </div>
                        @endfor
                    @endif
                </div>
                <hr class="mt-3 mb-0 d-lg-none">
                <div class="col-12 col-lg-5 img-container text-center">
                    <img class="imgShow" src="{{ $image->getUrl(1000, 1000) }}" alt="">
                </div>
                <div class="col-12 col-lg-5 ms-lg-4 d-flex flex-column justify-content-between cardCart">
                    <div class="d-flex flex-column justify-content-between text-dark">
                        <h4 class="mt-2 mb-1 fst-italic"><span class="fw-bold" id="cardTitle">{{ ucfirst($article->title) }}</span></h4>
                        <hr class="my-2">
                        <h6 class="fst-italic "><span class="fw-bold" id="cardCategory">#{{ ucfirst(__('ui.' . $article->category->name)) }}</span>
                        </h6>
                        <hr class="my-2">
                        <div class="scrollspy-example text-black divDescriptionCardRev mb-3" data-bs-spy="scroll" data-bs-smooth-scroll="true" tabindex="0">
                            <h6 class="fst-italic">{{ __('ui.description') }}:</h6>
                            <span class="fw-bold" id="cardDescription">{{ ucfirst($article->description) }}</span>
                        </div>
                        <hr class="my-2">
                        <h6 class="fst-italic mb-2">{{ __('ui.price') }}: <span class="fw-bold" id="cardPrice">{{ $article->price }}
                                €</span> </h6>
                        <hr class="my-2">
                        <h6 class="fst-italic mb-3">{{ __('ui.author') }}: <span class="fw-bold">{{ ucfirst($article->user->name) }}</span>
                        </h6>
                    </div>
                    <div class=" d-flex justify-content-between" id="show">
                        <a class="btn btn-secondary w-25 d-flex justify-content-center align-items-center"
                            href="{{ route('homepage') }}">{{ __('ui.btnBack') }}</a>
                        <button type="" class="btn btn-success  w-25">
                            <i id="icona_{{ $article->id }}" class="bi bi-cart-plus fs-5 cartIcon text-white"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <hr class="mt-5">
                <div class="col-12 text-start my-4">
                    <h5>
                        </span> {{ __('ui.articlesAddedBy')}}: <span>{{ ucfirst($article->user->name) }}</span>
                    </h5>
                </div>
                <div class="row justify-content-start align-items-center">
                    @foreach ($article->user->articles as $userArticle)
                        @if ($userArticle->is_accepted)
                            <div class="col-12 col-md-6 col-lg-3 m-3 m-md-0">
                                <div class="cardRichiamo sfumatura" style="width: 18rem;">
                                    @if ($userArticle->images->isNotEmpty())
                                        <img src="{{ $userArticle->images->first()->getUrl(1000, 1000) }}" class="card-img-top"
                                            alt="{{ $userArticle->title }}">
                                    @else
                                        <img src="/path/to/default-image.jpg" class="card-img-top" alt="Default image">
                                    @endif
                                    <div class="card-body mt-2">
                                        <h5 class="card-title">{{ ucfirst($userArticle->title) }}</h5>
                                        <hr class="my-2">
                                        <p class="fst-italic d-none d-lg-block my-1">
                                        <p href="" class="text-dark" id="">#{{ ucfirst($userArticle->category->name) }}</p>
                                        </p>
                                        <p class="mb-0">{{ $userArticle->price }} €</p>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <a href="{{ route('article.show', $userArticle->id) }}" class="btn btn-warning">{{ __('ui.btnShow') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-layout>

