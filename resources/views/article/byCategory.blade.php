<x-layout>
    <div class="container min-vh-100">
        <div class="row pt-5">
            <div class="col-12 pt-5">
                <h1 class="text-center">{{ __('ui.category') }}: <span>"{{ ucFirst(__("ui.$category->name")) }}"</span>
                </h1>
            </div>
        </div>
        <div class="row pt-5 justify-content-center">
            <div
                class="col-12 p-3 pt-4 pb-1 d-flex flex-md-row justify-content-center justify-content-md-end  align-items-center my-3 incipit">
                <div
                    class=" row d-flex flex-column flex-md-row justify-content-center justify-content-md-evenly align-items-center w-100 criteriContainer">
                    <div
                        class="col-4 d-flex flex-column justify-content-center align-items-center align-items-md-start criterio mx-0 px-lg-2">
                        <div class="row mb-2 w-100 d-flex justify-content-center">
                            <h6 class="mx-3 mx-md-0 mx-lg-3 text-center text-white fw-bold py-1 bg_navbar1">ORDINE PREZZO
                            </h6>
                            <div
                                class="col-5 mx-md-0 mx-lg-3  form-check form-check-inline d-flex justify-content-center text-center">
                                <input class="form-check-input text-center" type="radio" name="inlineRadioOptions"
                                    id="priceAsc" value="priceAsc">
                                <label class="form-check-label text-center ms-1" for="priceAsc">Crescente</label>
                            </div>
                            <div
                                class="col-5 mx-md-0 mx-lg-3 form-check form-check-inline d-flex justify-content-center">
                                <input class="form-check-input ms-2" type="radio" name="inlineRadioOptions"
                                    id="priceDesc" value="priceDesc">
                                <label class="form-check-label ms-1" for="priceDesc">Decrescente</label>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-4 d-flex flex-column justify-content-center align-items-center align-items-md-start criterio mx-0 px-lg-2">
                        <div class="row mb-2 w-100 d-flex justify-content-center ">
                            <h6 class="mx-3  text-center text-white fw-bold py-1 bg_navbar1">ORDINE
                                ALFABETICO</h6>
                            <div
                                class="col-5 mx-md-0 mx-lg-3 form-check form-check-inline d-flex justify-content-center text-center">
                                <input class="form-check-input text-center" type="radio" name="inlineRadioOptions"
                                    id="nameAsc" value="nameAsc">
                                <label class="form-check-label text-center ms-1" for="nameAsc">A-Z</label>
                            </div>
                            <div
                                class="col-5 mx-md-0 mx-lg-3 form-check form-check-inline d-flex justify-content-center ">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="nameDesc"
                                    value="nameDesc">
                                <label class="form-check-label ms-1" for="nameDesc">Z-A</label>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-4 d-flex flex-column justify-content-center align-items-center align-items-md-start criterio mx-0 px-lg-2">
                        <div class="row mb-2 w-100 d-flex justify-content-center">
                            <h6 class="mx-3 mx-md-0 mx-lg-3 text-center text-white fw-bold py-1 bg_navbar1">DATA
                                INSERIMENTO</h6>
                            <div
                                class="col-5 mx-md-0 mx-lg-3 form-check form-check-inline d-flex justify-content-center  text-center">
                                <input class="form-check-input text-center" type="radio" name="inlineRadioOptions"
                                    id="timeAsc" value="timeAsc">
                                <label class="form-check-label text-center ms-1" for="timeAsc">Recenti</label>
                            </div>
                            <div
                                class="col-5 mx-md-0 mx-lg-3 form-check form-check-inline d-flex  m-0 p-0 justify-content-center ">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="timeDesc"
                                    value="timeDesc">
                                <label class="form-check-label ms-1" for="timeDesc">Vecchi</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-around py-5 pt-5">
            <div class="col-12 px-0">
                @foreach ($articles as $article)
                    <x-cardArticleIndex :article="$article" :category="$article->category" :isNew="in_array($article->id, $latestArticles)"></x-cardArticleIndex>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
