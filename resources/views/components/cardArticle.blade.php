<div class="col-12 d-flex flex-column flex-md-row col-md-6 my-3 card mx-0 mx-md-3">
    <img
        src="{{ $article->images->isNotEmpty() ? $article->images->first()->getUrl(1000, 1000) : Storage::url('image/default.png') }}">
    <div class="info">
        <h5>{{ ucfirst($article->title) }}</h5>
        <p class="text-white">{{ $article->price }}€</p>
        <p class="text-white">{{ ucFirst($article->category->name) }}</p>
        <a href="{{ route('article.show', compact('article')) }}" class="btn button">{{ __('ui.btnShow') }}</a>
    </div>
</div>
