<x-layouts.main-layout :pageTitle="'Início - Pizzaria Delícia'">

    {{-- Hero / Banner --}}
    <section class="bg-dark text-white text-center py-90" style="background-image: url('{{ asset('assets/images/pizzas/pizza4.jpg') }}'); background-size: cover; background-position: center;">
        <div class="container">
            <h1 class="display-4 fw-bold text-white">A pizza que você merece</h1>
            <p class="lead">Sabores irresistíveis, ingredientes frescos e entrega rápida.</p>
            {{-- <a href="{{ route('sabores') }}" class="btn btn-danger btn-lg mt-4">Ver Sabores</a> --}}
        </div>
    </section>

    {{-- Sabores em destaque --}}
    <section class="py-5" style="background-image: url('{{ asset('assets/images/background-1-low.jpg') }}'); background-size: cover; background-position: center;">
        <div class="container">
            <h2 class="text-center mb-5">Mais Pedidas</h2>
            @foreach ($pizzas as $pizza)
                <div class="row justify-content-between align-items-center mb-5">
                    @if ($loop->iteration % 2 != 0)
                        {{-- Ímpar: Imagem à esquerda --}}
                        <div class="col-md-5 order-md-2">
                            <img src="{{ asset('assets/images/pizzas/' . $pizza->image) }}" class="img-fluid famous-pizza"
                                alt="{{ $pizza->name }}">
                        </div>
                        <div class="col-md-5 order-md-1 mt-4">
                            <h2 class="mb-2 flavor-title">{{ $pizza->name }}</h2>
                            <p>{{ Str::limit($pizza->flavor, 120) }}</p>

                            <h5 class="mb-2 history-title">História</h5>
                            <p>{{ Str::limit($pizza->history, 1200) }}</p>
                            @livewire('add-pizza', ['pizza' => $pizza], key($pizza->id))
                            
                        </div>
                    @else
                        {{-- Par: Texto à esquerda --}}
                        <div class="col-md-5">
                            <img src="{{ asset('assets/images/pizzas/' . $pizza->image) }}" class="img-fluid famous-pizza"
                                alt="{{ $pizza->name }}" style="height: 600px">
                        </div>
                        <div class="col-md-5 mt-4">
                            <h2 class="mb-2 flavor-title">{{ $pizza->name }}</h2>
                            <p>{{ Str::limit($pizza->flavor, 120) }}</p>

                            <h5 class="mb-2 history-title">História</h5>
                            <p>{{ Str::limit($pizza->history, 1200) }}</p>
                            @livewire('add-pizza', ['pizza' => $pizza], key($pizza->id))
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </section>

    {{-- Chamada para fazer pedido --}}
    <section class="py-5 bg-danger text-white text-center">
        <div class="container">
            <h3>Pronto para fazer seu pedido?</h3>
            <a href="{{ route('home') }}" class="btn btn-primary mt-3">Escolher minha pizza</a>
        </div>
    </section>
</x-layouts.main-layout>
