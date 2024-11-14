<x-layout>
    <div class="container-fluid text-center bg-body-tertiary">
        <div class="row">
            <!-- CAROUSEL -->
            <div class="col-12 bg-danger mt-3">
                <div id="carouselExampleFade" class="carousel slide carousel-fade">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="..." class="d-block w-100" alt="...">IMMAGINE1
                        </div>
                        <div class="carousel-item">
                            <img src="..." class="d-block w-100" alt="...">IMMAGINE2
                        </div>
                        <div class="carousel-item">
                            <img src="..." class="d-block w-100" alt="...">IMMAGINE3
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <!-- FINE CAROUSEL -->


        <div class="row vh-100 justify-content-evenly align-items-start mt-5">

            <div class="col-2 mx-2">
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item ">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                <a href="{{route('article.create')}}" class="text-decoration-none text-black">Aggiungi articolo</a>
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                            <div class="accordion-body">
                                <livewire:create-article-form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-9">

                <div class="cardExepmle rounded-3 d-flex flex-column justify-content-evenly align-items-center">
                    <div class="immagine mt-2"></div>
                    <div class="d-flex flex-row justify-content-between mt-1 px-3 w-100">
                        <h5>TITOLO</h5>
                        <p>20€</p>
                    </div>
                    <p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem, ipsum</p>
                    <a href="" class="btn btn-dark rounded-4 w-75 mb-2">Vai</a>
                </div>

            </div>
        </div>
    </div>

</x-layout>