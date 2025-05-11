@props(['pizzas'])
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