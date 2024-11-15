<x-layout>
    <div class="container text-center bg-body-tertiary">
        <div class="row">
            <!-- CAROUSEL -->
            <div class="col-12 p-0">
                <div id="carouselExampleFade" class="carousel slide carousel-fade">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ Storage::url('image/slideAbbigliamento.jpg') }}" class="d-block w-100"
                                alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="..." class="d-block w-100" alt="...">IMMAGINE2
                        </div>
                        <div class="carousel-item">
                            <img src="..." class="d-block w-100" alt="...">IMMAGINE3
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <!-- FINE CAROUSEL -->
        <div class="row  justify-content-center align-items-center mt-5">
            <div class="col-3 d-flex" id="cardLeft">
                <div class="col-6  cardLeft">
                    <div class="row justify-content-end align-items-end h-100  "
                        style="background-image: url({{ Storage::url('image/slideAbbigliamento.jpg') }})">
                        <div class="col-12 d-flex blur">
                            <div class="row align-items-end">
                                <div class="col-12 d-flex  text-start">
                                    <h5 class="fw-bold mt-2">Felpa Nike limited edition</h5>
                                </div>
                                <div class="col-12 d-flex ">
                                    <h5 class="fw-bold">$349.95</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 d-flex cardRight d-none" id="cardRight">
                    <div class="row align-items-center justify-content-center align-content-center">
                        <div class="col-12 d-flex  text-start mb-3">
                            <h5 class="fw-bold mt-2">Felpa Nike limited edition</h5>
                        </div>
                        <div class="col-12 d-flex text-start mb-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit odio placeat doloribus.
                            Temporibus similique eaque aspernatur sint eum odit beatae...
                        </div>
                        <div class="col-12 d-flex mt-2">
                            <h5 class="fw-bold">$349.95</h5>
                        </div>
                        <div class="col-12  d-flex justify-content-center align-items-end mt-4 ">
                            <button class="buttonCard">Vai al dettaglio</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
{{-- Da rivedere --}}
{{-- <div class=" col-3 m-2 cardExepmle rounded-3 d-flex flex-column justify-content-evenly align-items-center">
    <div class="immagine mt-2"></div>
    <div class="d-flex flex-row justify-content-between mt-1 ">
        <h5>TITOLO</h5>
        <p>20€</p>
    </div>
    <p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem, ipsum</p>
    <a href="" class="btn btn-dark rounded-4 w-75 mb-2">Vai</a>
</div> --}}
{{-- <div class="col-2 mx-2">
    <div class="accordion" id="accordionPanelsStayOpenExample">
        <div class="accordion-item ">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                    aria-controls="panelsStayOpen-collapseOne">
                    <a href="{{ route('article.create') }}" class="text-decoration-none text-black">Aggiungi
                        articolo</a>
                </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                <div class="accordion-body">
                    <livewire:create-article-form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
