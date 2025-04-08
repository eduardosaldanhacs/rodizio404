<x-layouts.main-layout :pageTitle="'Início - Pizzaria Delícia'">

    {{-- Hero / Banner --}}
    <section class="bg-dark text-white text-center py-5">
        <div class="container">
            <h1 class="display-4 fw-bold">A pizza que você merece 🍕</h1>
            <p class="lead">Sabores irresistíveis, ingredientes frescos e entrega rápida.</p>
            {{-- <a href="{{ route('sabores') }}" class="btn btn-danger btn-lg mt-4">Ver Sabores</a> --}}
        </div>
    </section>

    {{-- Sabores em destaque --}}
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Mais Pedidas</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($pizzas as $pizza)
                    <div class="col">
                        <div class="card h-100 shadow-sm">
                            <img src="{{ asset('storage/' . $pizza->imagem) }}" class="card-img-top" alt="{{ $pizza->nome }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $pizza->nome }}</h5>
                                <p class="card-text">{{ Str::limit($pizza->descricao, 100) }}</p>
                            </div>
                            <div class="card-footer text-end bg-white">
                                <a href="{{ route('sabores.detalhe', $pizza->id) }}" class="btn btn-outline-danger btn-sm">Ver mais</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Chamada para fazer pedido --}}
    <section class="py-5 bg-danger text-white text-center">
        <div class="container">
            <h3>Pronto para fazer seu pedido?</h3>
            {{-- <a href="{{ route('sabores') }}" class="btn btn-light mt-3">Escolher minha pizza</a> --}}
        </div>
    </section>

</x-layouts.main-layout>
