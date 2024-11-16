<x-layout>
    <div class="container-fluid pt-5 vh-100 px-0">
        <div class="row pt-5 align-items-center justify-content-center mx-1 py-5 ">
            <div class="col-12 loginFrom d-flex flex-column justify-content-center align-items-center">
                <h2 class="fs-1 mb-2 text-center">Sign In</h2>
                <div class="d-flex justify-content-center mb-2">
                    <!-- Facebook -->
                    <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"><i
                            class="fab bi-facebook"></i></a>
                    <!-- Twitter -->
                    <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"><i
                            class="fab bi-twitter"></i></a>
                    <!-- Google -->
                    <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"><i
                            class="fab bi-google"></i></a>
                    <!-- Instagram -->
                    <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"><i
                            class="fab bi-instagram"></i></a>
                </div>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="d-flex flex-column">
                        <label for="email ">Email:</label>
                        <input type="email" name="email" class="my-1  p-1" />
                    </div>
                    <div class="d-flex flex-column">
                        <label for="password ">Password</label>
                        <input type="password" name="password" class="my-1 p-1" />
                    </div>
                    <div class="d-flex flex-column justify-content-center text-center mt-1">
                        <a href="" class="fst-italic  cursor-pointer">Password dimenticata?</a>
                        <span class="fst-italic">
                            Non hai un account? <a href="{{ route('register') }}"
                                class="fst-italic  cursor-pointer">Registrati</a>
                        </span>

                        <button type="submit" class="buttonCustom">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
