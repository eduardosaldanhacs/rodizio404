<?php

namespace App\Livewire;

use Livewire\Component;
USE App\Models\Pizza;

class AddPizza extends Component
{
    public $pizza;

    public function mount($pizza)
    {
        $this->pizza = $pizza;
    }
    
    public function adicionarAoCarrinho()
    {
        $pizza = $this->pizza;
        $carrinho = session()->get('carrinho', []);
        
        if (isset($carrinho[$pizza->id])) {
            $carrinho[$pizza->id]['quantidade']++;
        } else {
            $carrinho[$pizza->id] = [
                'name' => $pizza->name,
                'small_price' => $pizza->small_price,
                'quantidade' => 1,
            ];
        }
        session()->put('carrinho', $carrinho);
        $this->dispatch('notification', type: 'success', title: 'Produto adicionado!');
        $this->dispatch('pizzaAdded');
    }
    


    public function render()
    {
        return view('livewire.add-pizza');
    }
}
