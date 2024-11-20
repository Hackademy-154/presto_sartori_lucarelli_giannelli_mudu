<div class="col-3 cardIndexContainer m-3 p-1" id="cardCart"> 

    <img src="{{ Storage::url('image/slide_sport.jpeg') }} " class="indexImg" alt="">
    <div class="px-3 pt-2 d-flex justify-content-between align-items-center">
        <h4 class="text-truncate" style="max-width: 250px;">{{ ucfirst($article->title) }}</h4>
        <h6 class="text-dark fs-5 my-0">{{ $article->price }}€</h6>
    </div>
    <a href="{{ route('article.byCategory', compact('category') ) }}" class="text-dark "><h6 class="text-dark px-3 m-0">{{ucfirst ($article->category->name) }}</h6></a>
    <div class="d-flex justify-content-between align-items-center pt-4 mx-3">
        <a href="{{ route('article.show', compact('article')) }}" class="btn btn-warning">Vai all'articolo</a>

        <button type="button" class="btnCart">
            <i id="{{$article->id}}" class="bi bi-cart-plus cartIcon"></i>
        </button>
    </div>

</div>




<!-- {{ Storage::url('image/ps5.jpg') }} -->