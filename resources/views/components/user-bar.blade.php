<nav class="navbar navbar-expand-lg bg-primary position-fixed top-0 w-100 z-3" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('index') }}">Sabor Gaudério</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
            aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('cardapio') }}"><i
                            class="fas fa-pizza-slice me-1"></i>Cardápio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('login') }}"><i
                            class="fas fa-info-circle me-1"></i>Sobre
                        Nós</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('login') }}"><i
                            class="fas fa-phone-alt me-1"></i>Contato</a>

                </li>
            </ul>
            <div class="d-flex">

                {{-- <a href="{{ route('login') }}" class="btn btn-outline-light me-2">
                    <i class="fas fa-shopping-cart me-1"></i> Carrinho
                </a> --}}
                @livewire('carrinho')
                @guest
                    <a href="{{ route('login') }}" class="btn btn-warning">
                        <i class="fas fa-sign-in-alt me-1"></i> Entrar
                    </a>
                @endguest
                @auth
                    <a href="{{ route('logout') }}" class="btn btn-danger">
                        <i class="fas fa-sign-out-alt me-1"></i> Sair
                    </a>
                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Dropdown</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </li>
                @endauth
            </div>
        </div>
    </div>
</nav>
