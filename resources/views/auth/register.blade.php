<x-layout>
    <div class="container-fluid vh-100 pt-5">
        <div class="row align-items-center justify-content-center py-5 ">
            <div class="col-12 registerFrom d-flex flex-column justify-content-center align-items-center ">
                <h2 class="fs-1 mb-3 text-center fw-bold">Sign Up</h2>
                <div class="d-flex justify-content-center">
                    <!-- Facebook -->
                    <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"><i
                            class="fab bi-facebook fw-bold fs-4"></i></a>
                    <!-- Twitter -->
                    <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"><i
                            class="fab bi-twitter fw-bold fs-4"></i></a>
                    <!-- Google -->
                    <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"><i
                            class="fab bi-google fw-bold fs-4"></i></a>
                    <!-- Instagram -->
                    <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"><i
                            class="fab bi-instagram fw-bold fs-4"></i></a>
                </div>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="d-flex flex-column">
                        <label class="fw-bold" for="name">Name:</label>
                        <input type="text" name="name" class="mb-2 p-1 @error('name') is-invalid @enderror">
                        @error('name')
                        <div class="text-danger fst-italic">Nome obbligatorio</div>
                        @enderror
                    </div>
                    <div class="d-flex flex-column">
                        <label class="fw-bold" for="email">Email<span class="text-danger">*</span></label>
                        <input type="email" name="email" class="mb-2 p-1 @error('email') is-invalid @enderror">
                        @error('email')
                        <div class="text-danger fst-italic">Indirizzo email obbligatorio</div>
                        @enderror
                    </div>
                    <div class="d-flex flex-column">
                        <label class="fw-bold" for="password">Password:</label>
                        <input type="password" name="password" class="mb-2 p-1 @error('password') is-invalid @enderror">
                        @error('password')
                        <div class="text-danger fst-italic">Password non valida</div>
                        @enderror
                    </div>
                    <div class="d-flex flex-column">
                        <label class="fw-bold"for="password_confirmation">Confirm Password:</label>
                        <input type="password" name="password_confirmation" class="mb-2 p-1 @error('password') is-invalid @enderror">
                        @error('password')
                        <div class="text-danger fst-italic">Password non valida</div>
                        @enderror
                    </div>
                    <div class="d-flex flex-column justify-content-center text-center mt-1">

                        <span class="fst-italic">
                            Sei già registrato? <a href="{{ route('login') }}"
                                class="fst-italic  cursor-pointer colorPetrolio fw-bold">Login</a>
                        </span>
                        <button type="submit" class="buttonCustom">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
