<nav class="navbar position-fixed navbar-expand-lg bg_navbar1 vw-100 d-flex flex-column">
    <div class="container-fluid ff">
        <a class="navbar-brand textColor1" href="{{ route('homepage') }}"><img src="{{ Storage::url('image/logo.png') }}"
                class="logo ms-5" alt=""></a>
        <a class="navbar-brand textColor1" href="{{ route('homepage') }}">PRESTO.IT</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <form action="{{route('article.search')}}" class="d-flex ms-auto" role="search" method="GET">
            <div class="input-group">
                <input type="search" name="query" class="form-control" placeholder="Cerca qui" aria-label="search">
                <button type="submit" class="input-group-text btn btn-outline-success" id="basic-addon2">Cerca</button>
            </div>
        </form>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex">
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
                        <a class="nav-link dropdown-toggle textColor1 d-flex align-items-center" href="#"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="revisor-name text-white">Ciao, {{ ucWords(Auth::user()->name) }}</span>
                            @if (\App\Models\Article::toBeRevisedCount() != null && Auth::user()->is_revisor)
                                <i class="bi bi-bell-fill  badge position-absolute   translate-middle   ">
                                </i>
                            @endif
                        </a>
                        <ul class="dropdown-menu dropdownUserLoggato">
                            <!-- revisore -->
                            @if (Auth::user()->is_revisor)
                                <li>
                                    <a href="{{ route('revisor.index') }}" class="dropdown-item">Zona revisore <span
                                            class="badge bg-danger">{{ \App\Models\Article::toBeRevisedCount() }}</span></a>
                                </li>
                            @endif
                            <li><a href="{{ route('article.create') }}" class="dropdown-item">Inserisci annuncio</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="dropdown-item" type=" submit">Logout</button>
                            </form>
                            <li><a class="dropdown-item" href="#">Contattaci</a></li>
                            <li><a class="dropdown-item" href="#">FAQ</a></li>
                        </ul>
                    @endguest
                </li>
                <li class="nav-item mx-3 me-4">
                    <a class="nav-link p-0 " href="#"><i class="bi bi-cart fs-4 p-0"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
