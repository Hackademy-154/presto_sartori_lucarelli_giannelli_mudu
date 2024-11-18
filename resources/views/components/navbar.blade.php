<nav class="navbar position-fixed navbar-expand-lg bg_navbar1 vw-100 d-flex flex-column">
    <div class="container-fluid ff">
        <a class="navbar-brand textColor1" href="{{ route('homepage') }}"><img src="{{ Storage::url('image/logo.png') }}" class="logo ms-5" alt=""></a>
        <a class="navbar-brand textColor1" href="{{ route('homepage') }}">PRESTO.IT</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex">
                <li class="nav-item">
                    <a href="{{ route('article.index') }}" class="nav-link text-decoration-none textColor1">Annunci</a>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle textColor1" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        IT/EN/ESP
                    </a>
                    <ul class="dropdown-menu dropdownLanguage ">
                        <li><a class="dropdown-item" href="#">Italiano</a></li>
                        <li><a class="dropdown-item" href="#">English</a></li>
                        <li><a class="dropdown-item" href="#">Espaniol</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown ">
                    @guest
                    <a class="nav-link dropdown-toggle textColor1" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Ciao, accedi
                    </a>
                    <ul class="dropdown-menu dropdownUser">
                        <div class="col-12">
                            <div class="d-flex flex-column align-items-start">
                                <a class="dropdown-item" href="{{ route('login') }}">Login</a>

                            </div>
                        </div>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Contattaci</a></li>
                        <li><a class="dropdown-item" href="#">FAQ</a></li>
                    </ul>
                    @else
                    <a class="nav-link dropdown-toggle textColor1" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Ciao, {{ ucWords(Auth::user()->name) }}!
                    </a>
                    <ul class="dropdown-menu dropdownUserLoggato">
                        <li><a href="{{ route('article.create') }}" class="dropdown-item">Inserisci annuncio</a></li>
                        <li><a class="dropdown-item" href="#">I miei ordini</a></li>
                        <li><a class="dropdown-item" href="#">I miei articoli</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <!-- revisore -->
                         @if(Auth::user()->is_revisor)
                            <li><a href="{{ route('revisor.index') }}" class="dropdown-item">Zona revisore</a></li>

                         @endif


                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="dropdown-item" type=" submit">Logout</button>
                        </form>
                        <li><a class="dropdown-item" href="#">Contattaci</a></li>
                        <li><a class="dropdown-item" href="#">FAQ</a></li>
                    </ul>
                    @endguest
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link p-0 " href="#"><i class="bi bi-cart fs-4 p-0"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>