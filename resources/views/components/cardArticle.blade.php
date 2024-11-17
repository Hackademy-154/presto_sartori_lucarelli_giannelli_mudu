

<div class="col-3 col-md-4 my-3 card"><img src="{{ Storage::url('image/slide_abbigliamento.png') }}">
    <div class="info">
        <h5>{{ $article->title }}</h5>
        <p>{{ $article->price }}€</p>
        <p>{{ $article->category->name }}</p>
        <a href="{{ route('article.show', compact('article')) }}" class="btn button">Vai all'articolo</a>
    </div>
</div>

