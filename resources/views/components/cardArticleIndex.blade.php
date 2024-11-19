<div class="col-3 cardIndexContainer m-3 p-1">

    <img src="{{ Storage::url('image/slide_sport.jpeg') }} " class="indexImg" alt="">
    <div class="px-3 pt-2 d-flex justify-content-between align-items-center">
        <h4 class="text-truncate" style="max-width: 250px;">{{ $article->title }}</h4>
        <h6 class="text-dark my-0">{{ $article->price }}€</h6>
    </div>
    <h6 class="text-dark px-3 m-0">{{ $article->category->name }}</h6>
    <div class="d-flex justify-content-between align-items-center pt-4 mx-3">
        <a href="{{ route('article.show', compact('article')) }}" class="btn btn-warning">Vai all'articolo</a>

        <button type="button" class="btnCuore ">
            <i id="{{$article->id}}" class="bi bi-heart heartIcon"></i>
        </button>
    </div>

</div>




<!-- {{ Storage::url('image/ps5.jpg') }} -->