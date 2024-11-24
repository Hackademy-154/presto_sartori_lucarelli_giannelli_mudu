<x-layout>
    <div class="container-fluid spazioNav2 pt-5 margin-footer">
        <div class="row align-items-center justify-content-center spazioNav2 py-5 ">
            <div class="col-12 registerFrom d-flex flex-column justify-content-center align-items-center ">
                <h2 class="fs-1 mb-3 text-center fw-bold">{{ __('ui.register') }}</h2>
                <div class="d-flex justify-content-center">
                    <!-- Facebook -->
                    <a data-mdb-ripple-init class="btnCustom2 btn-outline btn-floating m-1" href="#!"
                        role="button"><i class="fab bi-facebook fw-bold fs-4"></i></a>
                    <!-- Twitter -->
                    <a data-mdb-ripple-init class="btnCustom2 btn-outline btn-floating m-1" href="#!"
                        role="button"><i class="fab bi-twitter fw-bold fs-4"></i></a>
                    <!-- Google -->
                    <a data-mdb-ripple-init class="btnCustom2 btn-outline btn-floating m-1" href="#!"
                        role="button"><i class="fab bi-google fw-bold fs-4"></i></a>
                    <!-- Instagram -->
                    <a data-mdb-ripple-init class="btnCustom2 btn-outline btn-floating m-1" href="#!"
                        role="button"><i class="fab bi-instagram fw-bold fs-4"></i></a>
                </div>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="d-flex flex-column pb-1">
                        <label class="fw-bold" for="name">{{ __('ui.name') }}</label>
                        <input type="text" name="name" class=" p-1 @error('name') is-invalid @enderror">
                        @error('name')
                            <div class="text-danger fst-italic">{{ __('ui.nameError') }}</div>
                        @enderror
                    </div>
                    <div class="d-flex flex-column pb-1">
                        <label class="fw-bold" for="email">Email:</label>
                        <input type="email" name="email" class=" p-1 @error('email') is-invalid @enderror">
                        @error('email')
                            <div class="text-danger fst-italic">{{ __('ui.emailError') }}</div>
                        @enderror
                    </div>
                    <div class="d-flex flex-column pb-1">
                        <label class="fw-bold" for="password">Password:</label>
                        <input type="password" name="password" class=" p-1 @error('password') is-invalid @enderror">
                        @error('password')
                            <div class="text-danger fst-italic">{{ __('ui.passwordError') }}</div>
                        @enderror
                    </div>
                    <div class="d-flex flex-column ">
                        <label class="fw-bold"for="password_confirmation">{{ __('ui.confirm') }} Password:</label>
                        <input type="password" name="password_confirmation"
                            class=" p-1 @error('password') is-invalid @enderror">
                        @error('password')
                            <div class="text-danger fst-italic">{{ __('ui.passwordError') }}</div>
                        @enderror
                    </div>
                    <div class="d-flex flex-column justify-content-center text-center mt-1">

                        <span class="fst-italic">{{ __('ui.messRegister') }} <a href="{{ route('login') }}"
                                class="fst-italic  cursor-pointer colorPetrolio fw-bold">{{ __('ui.login') }}</a>
                        </span>
                        <button type="submit" class="buttonCustom">{{ __('ui.register') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
