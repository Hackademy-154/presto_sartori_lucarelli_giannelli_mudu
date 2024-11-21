<form class="shadow  p-5  bg-tertiary rounded-3 text-center pb-2 pt-4 my-5 w-100 " wire:submit="save">

    <h3 class="  m-0 fw-bold my-3 mb-2 pb-2 fs-2">
        Inserire articolo
    </h3>
    @if (session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif
    <div class="mb-3 text-start d-flex flex-column">
        <label for="title" class="text-start fs-6 fw-bold">Titolo</label>
        <input type="text" class=" p-1  @error('title') is-invalid @enderror" id="title" wire:model.blur="title"
            placeholder="Titolo articolo...">
        @error('title')
            <p class="fst-italic text-danger mb-0">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-3 text-start d-flex flex-column">
        <label for="description" class="text-start fs-6 fw-bold">Descrizione</label>
        <textarea cols="30" rows="5" class="p-1  px-1 @error('description') is-invalid @enderror" id="description"
            wire:model.blur="description" placeholder="Piccola descrizione articolo..."></textarea>
        @error('description')
            <p class="fst-italic text-danger mb-0">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-3 text-start d-flex flex-column">
        <label for="price" class="text-start fs-6 fw-bold">Prezzo</label>
        <input type="text" class="p-1   @error('price') is-invalid @enderror" id="price" wire:model.blur="price"
            placeholder="12.5€">
        @error('price')
            <p class="fst-italic text-danger mb-0">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-3 text-start d-flex flex-column">
        <label for="category" class="text-start fs-6 fw-bold">Categoria</label>
        <select id="category" wire:model.blur="category" class="p-1">
            <option class="text-black " label> Seleziona una categoria</option>
            @foreach ($categories as $category)
                <option class="text-black" value="{{ $category->id }}">{{ ucFirst($category->name) }}</option>
            @endforeach
        </select>
        @error('category')
            <p class="fst-italic text-danger mb-0">{{ $message }}</p>
        @enderror

    </div>
    <div class="mb-3 pt-2 d-flex justify-content-between">
        <a class="btn btn-secondary w-25 mt-3" href="{{ route('homepage') }}">Indietro</a>
        <button type="submit" class="btn btn-success w-25 mt-3">Inserisci</button>
    </div>
</form>
