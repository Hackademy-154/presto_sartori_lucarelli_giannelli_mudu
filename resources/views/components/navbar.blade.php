<nav class="navbar navbar-expand-lg bg_navbar1">
    <div class="container-fluid">

        <a class="navbar-brand" href="#">PRESTO.IT</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        It/En/Esp
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Italiano</a></li>
                        <li><a class="dropdown-item" href="#">English</a></li>
                        <li><a class="dropdown-item" href="#">Espaniol</a></li>
                    </ul>
                </li>


                <li class="nav-item dropdown">

                    @guest
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ciao, accedi
                    </a>
                    <ul class="dropdown-menu">

                        <div class="col-12">
                            <div class="d-flex flex-column align-items-center">
                                <a class="btn btn-warning" href="{{ route('login') }}">Login</a>
                                <p class="text-black">non sei ancora registrato? <a href="{{ route('register') }}">Registrati</a></p>
                            </div>
                        </div>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Contattaci</a></li>
                        <li><a class="dropdown-item" href="#">FAQ</a></li>
                    </ul>

                    @else
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ciao, (NOME UTENTE)
                    </a>
                    <ul class="dropdown-menu">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="dropdown-item"" type=" submit">logout</button>
                        </form>
                        <li><a class="dropdown-item" href="#">I miei ordini</a></li>
                        <li><a class="dropdown-item" href="#">I miei articoli</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Contattaci</a></li>
                        <li><a class="dropdown-item" href="#">FAQ</a></li>
                    </ul>

                    @endguest
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Carrello</a>
                </li>

            </ul>

        </div>
    </div>
</nav>