<nav class="navbar position-fixed navbar-expand-lg bg_navbar1 vw-100 d-flex flex-column">
    <div class="container-fluid ff">
        <a class="navbar-brand me-1 textColor1" href="{{ route('homepage') }}"><img
                src="{{ Storage::url('image/logo.png') }}" class="logo ms-3" alt=""></a>
        <a class="navbar-brand textColor1" href="{{ route('homepage') }}">PRESTO.IT</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex  searchBar mx-4">
                <form action="{{ route('article.search') }}" class="d-flex ms-auto searchInput ms-3" role="search"
                    method="GET">
                    <div class="d-flex p-0 z">
                        <select id="category" wire:model.blur="category" name="query2" class="form-control xx"
                            style=" box-shadow: none;">
                            <option class="textSearch" label>{{__('ui.categories')}}</option>
                            @foreach ($categories as $category)
                                <option class="textSearch" value="{{ $category->id }}">{{ ucFirst(__("ui.$category->name")) }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="ms-2 p-0 y">
                        <input class="searchInput" type="search" name="query" placeholder="{{__('ui.search')}}"
                            aria-label="search">
                    </div>
                    <div class="x">
                        <button class="buttonSearch" type="submit" id="basic-addon2">
                            <i class="bi bi-search text-white"></i>
                        </button>
                    </div>
                </form>
            </div>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex">
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle textColor1" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        IT/EN/ESP
                    </a>
                    <ul class="dropdown-menu dropdownLanguage ">
                        <li><a class="dropdown-item" href="#">  <x-_locale lang="it" /> </a></li>
                        <li><a class="dropdown-item" href="#"> <x-_locale lang="en" /> </a></li>
                        <li><a class="dropdown-item" href="#"> <x-_locale lang="es" /> </a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown ">
                    @guest
                        <a class="nav-link dropdown-toggle textColor1" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{__('ui.hello')}}{{__('ui.login')}}
                        </a>
                        <ul class="dropdown-menu dropdownUser">
                            <div class="col-12">
                                <div class="d-flex flex-column align-items-start">
                                    <a class="dropdown-item" href="{{ route('login') }}">{{__('ui.login')}}</a>

                                </div>
                            </div>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">{{__('ui.contactUs')}}</a></li>
                            <li><a class="dropdown-item" href="#">{{__('ui.faq')}}</a></li>
                        </ul>
                    @else
                        <a class="nav-link dropdown-toggle textColor1 d-flex align-items-center" href="#"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="revisor-name text-white">{{__('ui.hello')}}{{ ucWords(Auth::user()->name) }}</span>
                            @if (\App\Models\Article::toBeRevisedCount() != null && Auth::user()->is_revisor)
                                <i class="bi bi-bell-fill  badge position-absolute   translate-middle   ">
                                </i>
                            @endif
                        </a>
                        <ul class="dropdown-menu dropdownUserLoggato">
                            <!-- revisore -->
                            @if (Auth::user()->is_revisor)
                                <li>
                                    <a href="{{ route('revisor.index') }}" class="dropdown-item">{{__('ui.btnRevisor')}} <span
                                            class="badge bg-danger">{{ \App\Models\Article::toBeRevisedCount() }}</span></a>
                                </li>
                            @endif
                            <li><a href="{{ route('article.create') }}" class="dropdown-item">{{__('ui.btnAddAds')}}</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="dropdown-item" type=" submit">{{__('ui.logout')}}</button>
                            </form>
                            <li><a class="dropdown-item" href="#">{{__('ui.contactUs')}}</a></li>
                            <li><a class="dropdown-item" href="#">{{__('ui.faq')}}</a></li>
                        </ul>
                    @endguest
                </li>

                <li class="nav-item ms-2 me-4">
                    <a class="nav-link pe-3 py-0" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                        aria-controls="offcanvasExample">
                        <i class="bi bi-cart text-white fs-4 p-0"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">{{__('ui.cart')}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div id="sidebarCart">


        </div>
    </div>
</div>
