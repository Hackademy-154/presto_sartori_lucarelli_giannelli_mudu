<x-layout>
    <div class="container min-vh-100">
        <div class="row pt-5 justify-content-center d-none">
            <h2 class="mb-4">ORDINA ARTICOLI PER</h2>
            <div
                class="col-12 p-3 d-flex flex-md-row justify-content-start justify-content-md-center align-items-center my-3 incipit">
                <div
                    class=" row d-flex flex-column flex-md-row justify-content-evenly align-items-center w-100 criteriContainer">
                    <div
                        class="col-4 d-flex flex-column justify-content-center align-items-center align-items-md-start criterio">
                        <div class="row w-100 d-flex justify-content-center">
                            <h6 class="mx-3 text-center text-white fw-bold py-1 bg_navbar1">PREZZO</h6>
                            <div class="col-5 form-check form-check-inline d-flex justify-content-center text-center">
                                <input class="form-check-input text-center" type="radio" name="inlineRadioOptions"
                                    id="priceAsc" value="priceAsc">
                                <label class="form-check-label text-center ms-1" for="priceAsc">Crescente</label>
                            </div>
                            <div class="col-5 form-check form-check-inline d-flex justify-content-center">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="priceDesc"
                                    value="priceDesc">
                                <label class="form-check-label ms-1" for="priceDesc">Decrescente</label>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-4 d-flex flex-column justify-content-center align-items-center align-items-md-start criterio">
                        <div class="row w-100 d-flex justify-content-center">
                            <h6 class="mx-3 text-center text-white fw-bold py-1 bg_navbar1">ORDINE ALFABETICO</h6>
                            <div class="col-5 form-check form-check-inline d-flex justify-content-center text-center">
                                <input class="form-check-input text-center" type="radio" name="inlineRadioOptions"
                                    id="nameAsc" value="nameAsc">
                                <label class="form-check-label text-center ms-1" for="nameAsc">A-Z</label>
                            </div>
                            <div class="col-5 form-check form-check-inline d-flex justify-content-center ">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="nameDesc"
                                    value="nameDesc">
                                <label class="form-check-label ms-1" for="nameDesc">Z-A</label>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-4 d-flex flex-column justify-content-center align-items-center align-items-md-start criterio">
                        <div class="row w-100 d-flex justify-content-center">
                            <h6 class="mx-3 text-center text-white fw-bold py-1 bg_navbar1">ORDINE DI INSERZIONE</h6>
                            <div class="col-5 form-check form-check-inline d-flex justify-content-center  text-center">
                                <input class="form-check-input text-center" type="radio" name="inlineRadioOptions"
                                    id="timeAsc" value="timeAsc">
                                <label class="form-check-label text-center ms-1" for="timeAsc">Più recente</label>
                            </div>
                            <div class="col-5 form-check form-check-inline d-flex justify-content-center ">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="timeDesc"
                                    value="timeDesc">
                                <label class="form-check-label ms-1" for="timeDesc">Meno recente</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-evenly align-items-center py-5" id="wrapperIndex">
            @foreach ($articles as $article)
                <x-cardArticleIndex :article="$article" :category="$article->category" :isNew="in_array($article->id, $latestArticles)"></x-cardArticleIndex>
            @endforeach
        </div>
    </div>
</x-layout>
