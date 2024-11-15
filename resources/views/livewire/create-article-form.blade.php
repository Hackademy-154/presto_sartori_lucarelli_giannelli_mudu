<form class="shadow p-5 pb-2 bg-tertiary rounded-3 text-center" wire:submit="save">
    @if (session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

    <div class="mb-3 text-start">
        <label for="title" class="form-label text-dark">Titolo</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
            wire:model.blur="title">
        @error('title')
            <p class="fst-italic text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-3 text-start">
        <label for="description" class="form-label text-dark">Descrizione</label>
        <textarea class="form-control @error('description') is-invalid @enderror" id="description"
            wire:model.blur="description"></textarea>
        @error('description')
            <p class="fst-italic text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-3 text-start">
        <label for="price" class="form-label text-dark">Prezzo</label>
        <input type="text" class="form-control @error('price') is-invalid @enderror" id="price"
            wire:model.blur="price">
        @error('price')
            <p class="fst-italic text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-3 text-start">
        <label for="category" class="form-label text-dark">Categoria</label>
        <select id="category" wire:model.blur="category" class="form-control">
            <option label> Seleziona una categoria</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" class="text-dark">{{ $category->name }}</option>
            @endforeach
        </select>
        @error('category')
            <p class="fst-italic text-danger">{{ $message }}</p>
        @enderror

    </div>
    <div class="mb-3 text-center">
        <button type="submit" class="btn btn-dark w-25 mt-3">Crea</button>
    </div>
</form>
