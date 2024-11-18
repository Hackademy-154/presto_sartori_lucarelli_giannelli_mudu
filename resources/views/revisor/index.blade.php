<x-layout>
    <div class="container">

        <div class="row spazioNav">
            <div class="col-12 text text-center my-5">
                <h1 class="text-dark">Dashboard del Revisore</h1>

                <!-- messaggio di avvenuta accettazione o rifiuto dell'articolo  -->
                @if (session()->has('message'))
                <div class="row justify-content-center">
                    <div class="col-5 alert alert-success text-center shadow rounded">
                        {{session('message')}}
                    </div>
                </div>
                @endif
            </div>
        </div>

        <!-- controllo per verificare se c'è un articolo da revisionare -->
        @if($article_to_check)
        <!-- ci sono articoli da rev -->
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-10 d-flex justify-content-start align-items-start cardShow ps-0">
                <!-- 6 img per l'articolo -->
                <div class="contImgDettaglio d-flex flex-column justify-content-evenly">
                    @for($i = 0; $i<6; $i++)
                        <div class="img-dettaglio">
                        <img src="https://picsum.photos/35{{$i}}" alt="img provvisorie">
                </div>
                @endfor
            </div>
            <div class="col-12 col-md-6 img-container">
                <img src="https://picsum.photos/350" alt="">
            </div>
            <div class="col-12 col-md-4 ms-3 d-flex flex-column justify-content-between">
                <div class="d-flex flex-column justify-content-between text-dark">
                    <h3>{{$article_to_check->title}}</h3>
                    <h4>Autore: {{$article_to_check->user->name}}</h4>
                    <h4>{{$article_to_check->price}} €</h4>
                    <h4 class="fst-italic text-muted"># {{$article_to_check->category->name}}</h4>
                    <div class="scrollspy-example text-black divDescriptionCardRev mb-3" data-bs-spy="scroll" data-bs-smooth-scroll="true" tabindex="0">
                        <h6>{{$article_to_check->description}}</h6>
                    </div>
                </div>
                <div class="d-flex justify-content-around align-items-end">
                    <form action="{{route('reject', ['article'=> $article_to_check])}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="btn btn-outline-danger">Rifiuta</button>
                    </form>
                    <form action="{{route('accept', ['article'=> $article_to_check])}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="btn btn-outline-success">Accetta</button>
                    </form>
                </div>
            </div>
        </div>
            <!-- non ci sono articoli da rev -->
        @else
        <div class="row">
            <div class="col">
                <h1>Nessun articolo da revisionare</h1>
                <a href="{{route('homepage')}}" class="btn btn-outline-success">Torna alla homepage</a>
            </div>
        </div>
        @endif
    </div>
</x-layout>