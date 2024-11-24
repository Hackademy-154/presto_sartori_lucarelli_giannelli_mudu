<x-layout>
    <div class="container min-vh-100">
        <div class="row pt-5 justify-content-center">
            <h2 class="mb-4">ORDINA ARTICOLI PER</h2>
            <div class="col-12 p-3 d-flex flex-column justify-content-center align-items-center my-3 incipit">

                <div class=" row d-flex justify-content-evenly align-items-center">

                    <div class="col-4 d-flex flex-column justify-content-center align-items-start criterio">
                        <h6 class="mx-3">PREZZO</h6>
                        <div class="d-flex justify-content-center align-items-center ">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                    id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">crescente</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                    id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">decrescente</label>
                            </div>
                        </div>
                    </div>

                    <div
                        class=" col-4 d-flex flex-column justify-content-center align-items-center mx-4 criterioCentrale">

                        <label for="customRange2" class="form-label">FASCIA DI PREZZO</label>
                        <input type="range" class="form-range" min="0" max="5" id="customRange2">
                    </div>

                    <div class=" col-4 criterio d-flex flex-column justify-content-center align-items-start criterio">
                        <h6 class="mx-3">STATO</h6>
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                    id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">Nuovo</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                    id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">Usato</label>
                            </div>
                        </div>
                    </div>

                </div>



            </div>
        </div>
        <div class="row justify-content-evenly align-items-center py-5 ">
            @foreach ($articles as $article)
                <x-cardArticleIndex :article="$article" :category="$article->category"></x-cardArticleIndex>
            @endforeach
        </div>

    </div>

</x-layout>
