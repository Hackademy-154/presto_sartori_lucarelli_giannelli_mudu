<x-layout>
    <div class="container vh-100">

        <div class="row pt-5">
            <div class="col-12 text-center my-5">
                <h1 class="text-dark">{{$article->title}}</h1>
            </div>
        </div>


        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-10 d-flex justify-content-start align-items-start cardShow ps-0">

                <div class="contImgDettaglio d-flex flex-column justify-content-evenly">

                    <div class="img-dettaglio">
                        <img class="imgShow" src="{{ Storage::url('image/slide_abbigliamento.png') }}" alt="">
                    </div>
                    <div class="img-dettaglio">
                        <img class="imgShow" src="{{ Storage::url('image/slide_sport.jpeg') }}" alt="">
                    </div>
                    <div class="img-dettaglio">
                        <img class="imgShow" src="{{ Storage::url('image/slide_casa&giardinaggio.webp') }}" alt="">
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
                <div class="col-12 col-md-4 ms-3 d-flex flex-column justify-content-between">
                    <div class="d-flex flex-column justify-content-between text-dark">
                        <h2>{{$article->title}}</h2>
                        <h4> {{$article->price}}€</h4>
                        <div class="scrollspy-example text-black divDescriptionCardShow mb-3" data-bs-spy="scroll" data-bs-smooth-scroll="true" tabindex="0">
                            <h6>{{$article->description}}</h6>
                        </div>
                    </div>
                    <div class="d-flex justify-content-around align-items-end">
                        <a href="" class="btn btn-warning"><i class="bi bi-cart-plus"></i></a>
                    </div>
                </div>

            </div>


        </div>
    </div>


    </div>
</x-layout>