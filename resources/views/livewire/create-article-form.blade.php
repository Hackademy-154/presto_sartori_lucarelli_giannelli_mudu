<form class="shadow  p-5  bg-tertiary rounded-3 text-center pb-2 pt-4 my-5 w-100 " wire:submit="save">

    <h3 class="  m-0 fw-bold my-3 mb-2 pb-2 fs-2"> {{__('ui.addAds')}}
    </h3>
    @if (session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif
    <div class="mb-3 text-start d-flex flex-column">
        <label for="title" class="text-start fs-6 fw-bold">{{__('ui.title')}}</label>
        <input type="text" class=" p-1  @error('title') is-invalid @enderror" id="title" wire:model.blur="title"
            placeholder="{{__('ui.placeholder1')}}">
        @error('title')
            <p class="fst-italic text-danger mb-0">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-3 text-start d-flex flex-column">
        <label for="description" class="text-start fs-6 fw-bold">{{__('ui.description')}}</label>
        <textarea cols="30" rows="5" class="p-1  px-1 @error('description') is-invalid @enderror" id="description"
            wire:model.blur="description" placeholder="{{__('ui.placeholder2')}}"></textarea>
        @error('description')
            <p class="fst-italic text-danger mb-0">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-3 text-start d-flex flex-column">
        <label for="price" class="text-start fs-6 fw-bold">{{__('ui.price')}}</label>
        <input type="text" class="p-1   @error('price') is-invalid @enderror" id="price" wire:model.blur="price"
            placeholder="{{__('ui.placeholder3')}}">
        @error('price')
            <p class="fst-italic text-danger mb-0">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-3 text-start d-flex flex-column">
        <label for="category" class="text-start fs-6 fw-bold">{{__('ui.category')}}</label>
        <select id="category" wire:model.blur="category" class="p-1">
            <option class="text-black " label> {{__('ui.selectCategory')}}</option>
            @foreach ($categories as $category)
                <option class="text-black" value="{{ $category->id }}"> {{ ucFirst(__("ui.$category->name")) }} </option>
            @endforeach
        </select>
        @error('category')
            <p class="fst-italic text-danger mb-0">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-3">
        <input type="file" wire:model.live="temporary_images" multiple class="form-control shadow @error('temporary_images.*') is-invalid @enderror" placeholder="Img/">
        @error('temporary_images.*')
            <p class="fst-italic text-danger mb-0">{{ $message }}</p>
        @enderror
        @error('temporary_images')
            <p class="fst-italic text-danger mb-0">{{ $message }}</p>
        @enderror
    </div>
    @if (!empty($images))
    <div class="row">
        <div class="col-12">
            <p>Photo preview:</p>
            <div class="row border border-4 border-success rounded shadow py-4">
                @foreach ($images as $key=>$image)
                <div class="col-6 d-flex flex-column align-items-center my-3">
                    <div class="img-preview mx-auto shadow rounded" style="background-image: url({{$image->temporaryUrl()}});"></div>
                    <button type="button" class="btn mt-1 btn-danger" wire:click="removeImage({{$key}})">X</button>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif
    <div class="mb-3 pt-2 d-flex justify-content-between">
        <a class="btn btn-secondary w-25 mt-3" href="{{ route('homepage') }}">{{__('ui.btnBack')}}</a>
        <button type="submit" class="btn btn-success w-25 mt-3">{{__('ui.btnAdd')}}</button>
    </div>
</form>
