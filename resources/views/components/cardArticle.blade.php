<div class="col-3 col-md-4 my-3 card"><img src="{{ Storage::url('image/ps5.jpg') }}">
    <div class="info">
        <h5>{{ $article->title }}</h5>
        <p class="text-white">{{ $article->price }}€</p>
        <p class="text-white">{{ $article->category->name }}</p>
        <a href="{{ route('article.show', compact('article')) }}" class="btn button">{{__('ui.btnShow')}}</a>
    </div>
</div>