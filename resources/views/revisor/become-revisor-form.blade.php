<x-layout>
    <div class="container spazioNav2">
        <div class="row align-items-center justify-content-between">
            <div class="col-6 d-flex d-none d-lg-block">
                <img class="img-fluid sfumaturaa" src="/media/work.png" alt="">
            </div>
            <div class="col-12 col-lg-5 d-flex flex-column align-items-center justify-content-center">
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
                <div class="col-12 d-flex text-start pt-1  bg-tertiary rounded-3 px-2 sfumaturaa flex-column">
                    <h3 class="m-0 fw-bold my-3 pb-2 fs-2 text-center ">{{ __('ui.hiringTitle')}}</h3>
                    <ul class="px-4">
                        <li>
                        {{ __('ui.jobRequired1')}}
                        </li>
                        <li>
                        {{ __('ui.jobRequired2')}}

                        </li>
                        <li>
                        {{ __('ui.jobRequired3')}}

                        </li>
                        <li>{{ __('ui.jobRequired4')}}
                        </li>
                    </ul>
                </div>
                <form action="{{ route('become.revisor') }}" method="POST"
                    class="shadow pt-3 p-4 pb-3 bg-tertiary rounded-3 text-center py-5 mb-5 mt-4 w-100">
                    @csrf
                    <div class="row align-items-center">

                        <div class="col-12 d-flex flex-column justify-content-start">
                            <label for="messageUser" class="text-start fs-5 fw-bold mb-2">{{ __('ui.addMessage')}}</label>
                            <textarea name="messageUser" id="messageUser" cols="30" rows="7"></textarea>
                        </div>

                        <div class="col-12 d-flex  text-center justify-content-between align-items-center">
                            <a class="btn btn-secondary w-25 mt-3" href="{{ route('homepage') }}">{{ __('ui.btnBack')}}</a>
                            <button type="submit" class="btn btn-success w-25 mt-3">{{ __('ui.btnSend')}}</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
