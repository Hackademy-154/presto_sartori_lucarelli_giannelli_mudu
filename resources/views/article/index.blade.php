<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 text-center">
                <h3 class="display-3">
                    Tutti gli annunci
                </h3>
            </div>
        </div>
        <div class="row justify-content-center py-5">
            @foreach ($articles as $article)
            <div class="col-12 col-md-4 d-flex justify-content-center">
                <div class="card mb-4 shadow" style="width: 17rem;">
                    <img src="" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{$article->title}} </h5>
                        <p class="card-text text-black">{{$article->price}}€</p>
                        <p class="card-text text-black">{{$article->category->name}}</p>
                        <div class="d-flex justify-content-center py-3">
                            <a href="" class="btn btn-outline-dark btnDetail">Vai al dettaglio</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>