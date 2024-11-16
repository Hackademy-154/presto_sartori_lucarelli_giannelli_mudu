<x-layout>
    <div class="container-fluid vh-100 pt-5">
        <div class="row align-items-center justify-content-center py-5 ">
            <div class="col-12 registerFrom d-flex flex-column justify-content-center align-items-center ">
                <h2 class="fs-1 mb-3 text-center">Sign Up</h2>
                <div class="d-flex justify-content-center">
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
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="d-flex flex-column">
                        <label for="name">Name:</label>
                        <input type="text" name="name" class="mb-2 p-1" />
                    </div>
                    <div class="d-flex flex-column">
                        <label for="email">Email:</label>
                        <input type="email" name="email" class="mb-2 p-1" />
                    </div>
                    <div class="d-flex flex-column">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="mb-2 p-1" />
                    </div>
                    <div class="d-flex flex-column">
                        <label for="password_confirmation">Confirm Password:</label>
                        <input type="password" name="password_confirmation" class="mb-2 p-1" />
                    </div>
                    <div class="d-flex flex-column justify-content-center text-center mt-1">

                        <span class="fst-italic">
                            Sei già registrato? <a href="{{ route('login') }}"
                                class="fst-italic  cursor-pointer">Login</a>
                        </span>
                        <button type="submit" class="buttonCustom">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
