<div>
    <button wire:click="toggleCarrinho" class="btn btn-outline-light me-2">
        <i class="fas fa-shopping-cart me-1"></i> Carrinho
    </button>

    @if($mostrarCarrinho)
        <div class="card mt-3 p-3 position-absolute">
            <h5>Itens no carrinho:</h5>

            @forelse ($carrinho as $item)
                <p class="m-0 text-capitalize">Pizza: {{ $item['name'] }}</p>
                <p class="m-0 text-capitalize">Preço: R$ {{ number_format($item['small_price'], 2, ',', '.') }}</p>
                <p class="mb-2 text-capitalize">Quantidade: {{ $item['quantidade'] }}</p>
            @empty
                <p>Carrinho vazio.</p>
            @endforelse

            @if($carrinho)
                <p class="mt-0 fw-bold">Total: R$ {{ number_format($this->total, 2, ',', '.') }}</p>
                <a wire:click="limparCarrinho" class="btn btn-outline-danger mt-2">Limpar Carrinho</a>
            @endif
        </div>
    @endif
</div>
