<div class="container-fluid bg-dark text-white shadow-sm">
    <div class="row align-items-center py-3">
        <!-- Logo e Nome da Pizzaria -->
        <div class="col-md-4 d-flex align-items-center">
            <a href="{{ route('index') }}" class="d-flex align-items-center text-white text-decoration-none">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Rodízio404" height="50" class="me-3">
                <h4 class="m-0 fw-bold">Rodízio404</h4>
            </a>
        </div>

        <!-- Navegação -->
        <div class="col-md-5">
            <nav class="nav justify-content-center">
                <a class="nav-link text-white" href="{{ route('login') }}"><i class="fas fa-pizza-slice me-1"></i>Cardápio</a>
                <a class="nav-link text-white" href="{{ route('login') }}"><i class="fas fa-tags me-1"></i>Promoções</a>
                <a class="nav-link text-white" href="{{ route('login') }}"><i class="fas fa-info-circle me-1"></i>Sobre Nós</a>
                <a class="nav-link text-white" href="{{ route('login') }}"><i class="fas fa-phone-alt me-1"></i>Contato</a>
            </nav>
        </div>

        <!-- Carrinho e Login -->
        <div class="col-md-3 text-end">
            <a href="{{ route('login') }}" class="btn btn-outline-light me-2">
                <i class="fas fa-shopping-cart me-1"></i> Carrinho
            </a>
            <a href="{{ route('login') }}" class="btn btn-warning">
                <i class="fas fa-sign-in-alt me-1"></i> Entrar
            </a>
            @auth
                <a href="{{ route('logout') }}" class="btn btn-danger">
                    <i class="fas fa-sign-out-alt me-1"></i> Sair
                </a>    
            @endauth
        </div>
    </div>
</div>
