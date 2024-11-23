<x-layout>
    <div class="container">
        <div class="row py-5 justify-content-center align-items-center text-center">
            <div class="col-12">
                <h1 class="display1">
                    {{ __('ui.resultsFor')}} "<span class="fst-italic">
                        @if ($query)  
                            {{ ucfirst($query) }}  
                        @elseif (isset($category) && $category) 
                            {{ ucfirst(__('ui.' . $category->name)) }}  
                        @else  
                            
                        @endif
                    </span>"
                </h1>
            </div>
            
        </div>
        <div class="row height-custom justify-content-center align-items-center py-5">
            @forelse($articles as $article)
                <x-cardArticleIndex :article="$article" :category="$article->category"></x-cardArticleIndex>

            @empty
                <div class="col-12">
                    <h3 class="text-center">
                        {{__('ui.noResults')}}
                    </h3>
                </div>
            @endforelse
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div>
            {{ $articles->links() }}
        </div>
    </div>
</x-layout>
