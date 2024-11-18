<x-layout>
    <div class="container spazioNav2">
        <div class="row">
            <div class="col-6">
                <img class="img-fluid sfumaturaa" src="/media/work.png" alt="">
            </div>
            <div class="col-6 d-flex flex-column align-items-center justify-content-center">
                <div class="col-12 text-center py-3 shadow bg-tertiary rounded-3 px-2">
                    <h3 class="m-0 fw-bold">Invia candidatura</h3>
                </div>
                <div class="col-12 d-flex justify-content-center">
                    @if (session()->has('errorMessage'))
                        <div class="alert alert-danger text-center shadow rounded w-50 mt-3">
                            {{ session('errorMessage') }}
                        </div>
                    @endif
                    @if (session()->has('message'))
                        <div class="alert alert-success text-center shadow rounded w-50 mt-3">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
                <form action="" method="POST"
                    class="shadow pt-3 p-4 pb-2 bg-tertiary rounded-3 text-center py-5 mb-5 mt-4 w-100">
                    @csrf
                    <div class="row">
                        <div class="col-12 d-flex flex-column justify-content-start">
                            <label for="message" class="text-start">Inserisci messaggio</label>
                            <textarea name="message" id="message" cols="30" rows="10"></textarea>
                        </div>
                        <div class="col-12 d-flex mb-3 text-center justify-content-between">
                            <a class="btn btn-danger w-25 mt-3" href="{{ route('homepage') }}">Annulla</a>
                            <button type="submit" class="btn btn-success w-25 mt-3">Invia</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
