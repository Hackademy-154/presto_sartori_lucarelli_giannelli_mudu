<form class="shadow p-5 bg-white text-center" wire:submit="save">
    <div class="mb-5">
        <label for="title" class="form-label text-dark">Titolo</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" wire:model.blur="title">
        @error('title')
            <p class="fst-italic text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="mb-5">
        <label for="description" class="form-label text-dark">Descrizione</label>
        <textarea class="form-control @error('description') is-invalid @enderror" id="description" wire:model.blur="description"></textarea>
        @error('description')
            <p class="fst-italic text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="mb-5">
        <label for="price" class="form-label text-dark">Prezzo</label>
        <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" wire:model.blur="price">
        @error('price')
            <p class="fst-italic text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="mb-5">
        <select id="category" wire:model.blur="category" class="form-control">
            <option label disabled> Seleziona una categoria</option>
            @foreach ($categories as $category)
                <option value="{{$category->id}}" >{{$category->name}}</option>
            @endforeach
        </select>
        @error('category')
            <p class="fst-italic text-danger">{{$message}}</p>
        @enderror

    </div>
    <div class="mb-5 text-center">
        <button type="submit" class="btn btn-dark">Crea</button>
    </div>
</form>
