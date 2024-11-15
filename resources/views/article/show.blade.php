<x-layout>
    <div class="container">

        <div class="row">
            <div class="col-12 text-center my-5">
                <h1 class="text-dark">{{$article->title}}</h1>
            </div>
        </div>


        <div class="row justify-content-center align-items-center">
            <div class="col-10 d-flex justify-content-start align-items-start cardShow">

                <div class="col-1 contImgDettaglio d-flex flex-column justify-content-evenly">

                    <div class="img-dettaglio">
                        <img src="{{ Storage::url('image/slide_abbigliamento.png') }}" alt="">
                    </div>
                    <div class="img-dettaglio">
                    <img src="{{ Storage::url('image/slide_sport.jpeg') }}" alt="">
                    </div>
                    <div class="img-dettaglio">
                    <img src="{{ Storage::url('image/slide_casa&giardinaggio.webp') }}" alt="">
                    </div>
                    <div class="img-dettaglio">
                    <img src="{{ Storage::url('image/slide_libri&riviste.webp') }}" alt="">
                    </div>
                    <div class="img-dettaglio">
                    <img src="{{ Storage::url('image/slide_sport.jpeg') }}" alt="">
                    </div>
                </div>

                <div class="col-6 img-container">
                    <img src="{{ Storage::url('image/slide_abbigliamento.png') }}" alt="">
                </div>

                <!-- fine carousel -->

                <div class="col-4 ms-3 d-flex flex-column justify-content-between">
                    <div class="d-flex flex-column justify-content-between text-dark">
                        <h2>{{$article->title}}</h2>
                        <h4> {{$article->price}}€</h4>
                        <h6>{{$article->description}}</h6>
                    </div>
                    <div class="d-flex justify-content-between align-items-end">
                        <a href="" class="btn btn-dark">Acquista</a>
                        <a href="" class="btn btn-warning">Aggiungi al carrello</a>
                    </div>
                </div>

            </div>


        </div>
    </div>


    </div>
</x-layout>


