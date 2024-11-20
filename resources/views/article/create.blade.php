<x-layout>
    <div class="container vh-100">
        <div class="row justify-content-center align-items-center ">
            <div class="col-12  w-100 my-5 d-flex justify-content-center rounded-1">
                <h1 class="text-center test text-dark fw-bold  ">
                    Inserire articolo
                </h1>
            </div>
            <div class="col-5 d-flex ">
                <img class="imgCreate test2" src="{{ Storage::url('image/createImg.png') }}"></img>
            </div>
            <div class="col-7 d-flex ">
                <!-- creare articolo con livewire -->
                <livewire:create-article-form>
            </div>
        </div>
    </div>
</x-layout>
