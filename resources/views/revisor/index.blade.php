<x-layout>
    <div class="container">

        <div class="row spazioNav">
            <div class="col">
                <h1>Dashboard del Revisore</h1>

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
            <div class="row">
                <div class="col">
                    <div class="row">
                        <!-- 6 img per l'articolo -->
                        @for($i = 0; $i<6; $i++)
                            <div class="col">
                                <img src="https://picsum.photos/350" alt="img provvisorie">
                            </div>
                        @endfor
                    </div>
                </div>

                <div class="col">
                    <div>
                        <!-- dettagli articolo -->
                        <h1>{{$article_to_check->user->title}}</h1>
                        <h3>Autore: {{$article_to_check->user->name}}</h3>
                        <h4>{{$article_to_check->price}} €</h4>
                        <h4 class="fst-italic text-muted"># {{$article_to_check->category->name}}</h4>
                        <p>{{$article_to_check->description}}</p>
                    </div>
                    <div>
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