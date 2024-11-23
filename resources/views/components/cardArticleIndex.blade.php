<div class="col-12 cardnew sfumatura p-2 my-2 ">
    <div class="row justify-content-center align-items-center w-100">
        <div class="swiper3 mySwiper3 p-0 col-3 d-flex justify-content-center align-items-center">
            <div class="swiper-wrapper">
                @foreach ($article->images as $key => $image)
                    <div class="swiper-slide ">
                        <img src="{{$image->getUrl(1000,1000)}}"
                            class="img-fluid" alt="" id="cardImg">
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-9 d-flex flex-column cardCart">
            <div class="d-flex flex-column justify-content-between text-dark">
                <h4 class="mt-2 mb-1 fst-italic"><span class="fw-bold"
                        id="cardTitle">{{ ucfirst($article->title) }}</span>
                </h4>
                <hr class="my-1">
                <div class="scrollspy-example text-black divDescriptionCardRev2 mb-3" data-bs-spy="scroll"
                    data-bs-smooth-scroll="true" tabindex="0">
                    <h6 class="fst-italic"></h6>
                    <span class="fw-bold" id="cardDescription">{{ ucfirst($article->description) }}</span>
                </div>
                <hr class="my-1">
                <h6 class="fst-italic  mb-2">Prezzo: <span class="fw-bold" id="cardPrice">{{ $article->price }}
                        €</span> </h6>
                <hr class="my-1">
                <h6 class="fst-italic mb-2">Pubblicato da: <span
                        class="fw-bold">{{ ucfirst($article->user->name) }}</span>
                </h6>
                <div class="d-none">
                    <h6 class="text-dark px-3 m-0 " id="cardCategory">{{ ucfirst($article->category->name) }}</h6>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-end">
                <a href="{{ route('article.show', compact('article')) }}"
                    class="btn btn-warning mx-3">{{ __('ui.btnShow') }}</a>
                <button type="button" class="btnCart">
                    <i id="icona_{{ $article->id }}" class="bi bi-cart-plus cartIcon"></i>
                </button>
            </div>
        </div>
    </div>
</div>
