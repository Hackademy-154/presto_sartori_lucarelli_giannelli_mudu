<form class="shadow  p-3 p-md-5   bg-tertiary rounded-3 text-center pb-2 pt-4 my-0 my-md-5 w-100 " wire:submit="save">

    <h3 class="  m-0 fw-bold my-3 mb-2 pb-2 fs-2"> {{ __('ui.addAds') }}
    </h3>
    @if (session('success'))
        <div class="alert alert-success text-center">
            {{ __('ui.articleSuccessMessage') }}
        </div>
    @endif

    <div class="mb-3 text-start d-flex flex-column">
        <label for="title" class="text-start fs-6 fw-bold">{{ __('ui.title') }}</label>
        <input type="text" class=" p-1  @error('title') is-invalid @enderror" id="title" wire:model.blur="title" placeholder="{{ __('ui.placeholder1') }}">
        @error('title')
            <p class="fst-italic text-danger mb-0">{{ __('ui.placeholder1') }}</p>
        @enderror
    </div>
    <div class="mb-3 text-start d-flex flex-column">
        <label for="description" class="text-start fs-6 fw-bold">{{ __('ui.description') }}</label>
        <textarea cols="30" rows="5" class="p-1  px-1 @error('description') is-invalid @enderror" id="description" wire:model.blur="description"
            placeholder="{{ __('ui.placeholder2') }}"></textarea>
        @error('description')
            <p class="fst-italic text-danger mb-0">{{ __('ui.placeholder2') }}</p>
        @enderror
    </div>
    <div class="mb-3 text-start d-flex flex-column">
        <label for="price" class="text-start fs-6 fw-bold">{{ __('ui.price') }}</label>
        <input type="text" class="p-1   @error('price') is-invalid @enderror" id="price" wire:model.blur="price"
            placeholder="{{ __('ui.placeholder3') }}">
        @error('price')
            <p class="fst-italic text-danger mb-0">{{ __('ui.errorPrice') }}</p>
        @enderror
    </div>
    <div class="mb-3 text-start d-flex flex-column">
        <label for="category" class="text-start fs-6 fw-bold">{{ __('ui.category') }}</label>
        <select id="category" wire:model.blur="category" class="p-1">
            <option class="text-black " label> {{ __('ui.selectCategory') }}</option>
            @foreach ($categories as $category)
                <option class="text-black" value="{{ $category->id }}"> {{ ucFirst(__("ui.$category->name")) }}
                </option>
            @endforeach
        </select>
        @error('category')
            <p class="fst-italic text-danger mb-0">{{ __('ui.selectCategory') }}</p>
        @enderror
    </div>
    <div class="mb-3 custom-file-button d-flex align-items-center">
        @php
            $currentLang = session('locale', 'it');
        @endphp
        <label for="fileButton" class="labelFile me-2">{{ __('ui.file') }}</label>
        @if ($currentLang == 'it')
            <input name="fileButton" type="file" wire:model.live="temporary_images" multiple
                class="sp  w-100 @error('temporary_images.*') is-invalid @enderror" placeholder="Img/" id="">
        @else
            <input name="fileButton" type="file" wire:model.live="temporary_images" multiple
                class="ps w-100 @error('temporary_images.*') is-invalid @enderror" placeholder="Img/" id="">
        @endif

        @error('temporary_images.*')
            <p class="fst-italic text-danger mb-0">{{ $message }}</p>
        @enderror
        @error('temporary_images')
            <p class="fst-italic text-danger mb-0">{{ $message }}</p>
        @enderror
    </div>
    @if (!empty($images))
        <div class="row">
            <div class="col-12 sfumaturaa">
                <p class=" fw-bold text-black">{{ __('ui.imgPreview') }}:</p>
                <hr>
                <div class="row  rounded  ">
                    @foreach ($images as $key => $image)
                        <div class="col-4 d-flex flex-column align-items-center my-3 p-0">
                            <div class="img-preview mx-auto shadow " style="background-image: url({{ $image->temporaryUrl() }});"></div>
                            <button type="button" class="shadow btnTrash bg-danger text-white w-25  "
                                wire:click="removeImage({{ $key }})">{{ __('ui.remove') }}</button>
                        </div>
                    @endforeach
                </div>
                <hr>

            </div>
        </div>
    @endif
    @if (session('nosuccess'))
        <div class="mt-3 alert alert-danger text-center">
            {{ session('nosuccess') }}
        </div>
    @endif
    <div class=" pt-2 d-flex justify-content-between">
        <a class="btn btn-secondary w-25 mt-1" href="{{ route('homepage') }}">{{ __('ui.btnBack') }}</a>
        <button type="submit" class="btn btn-success w-25 mt-1">{{ __('ui.btnAdd') }}</button>
    </div>
</form>

