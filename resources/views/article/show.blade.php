<x-layout>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>
                    {{$article->title}}
                </h1>
            </div>
        </div>

        
        <div class="row">
            <div class="col">
                <!-- carousel -->
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="https://picsum.photos/500" class="d-block w-100" alt="foto segnaposto">
                        </div>
                        <div class="carousel-item">
                        <img src="https://picsum.photos/501" class="d-block w-100" alt="foto segnaposto">
                        </div>
                        <div class="carousel-item">
                        <img src="https://picsum.photos/502" class="d-block w-100" alt="foto segnaposto">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <!-- fine carousel -->
            </div>

            <div class="col">
                <h2>{{$article->title}}</h2>
                <h4>Prezzo: {{$article->price}}</h4>
                <p>Descrizione: {{$article->description}}</p>
            </div>
        </div>

        
    </div>
</x-layout>