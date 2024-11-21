<x-layout>
    <div class="container-fluid spazioNav2 pt-5  px-0">
        <div class="row pt-5 align-items-center justify-content-center mx-1 py-5 spazioNav2">
            <div class="col-12 loginFrom d-flex flex-column justify-content-center align-items-center">
                <h2 class="fs-1 mb-2 text-center colorPetrolio fw-bold">Sign In</h2>
                <div class="d-flex justify-content-center mb-2">
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
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="d-flex flex-column">
                        <label class="fw-bold" for="email ">Email:</label>
                        <input type="email" name="email" class="my-1  p-1 @error('email') is-invalid @enderror">
                        @error('email')
                            <div class="text-danger fst-italic">Indirizzo email non valido</div>
                        @enderror
                    </div>
                    <div class="d-flex flex-column ">
                        <label class="fw-bold" for="password ">Password:</label>
                        <input type="password" name="password" class="my-1 p-1 @error('password') is-invalid @enderror">
                        @error('password')
                            <div class="text-danger fst-italic">Password non valida</div>
                        @enderror
                    </div>
                    <div class="d-flex flex-column justify-content-center text-center mt-1">
                        <span class="fst-italic ">
                            Non hai un account? <a href="{{ route('register') }}"
                                class="fst-italic  cursor-pointer colorPetrolio fw-bold">Registrati</a>
                        </span>
                        <button type="submit" class="buttonCustom">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
