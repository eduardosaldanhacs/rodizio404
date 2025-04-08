<?php
// database/seeders/PizzaSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pizza;


class PizzaSeeder extends Seeder
{
    public function run(): void
    {
        Pizza::create([
            'nome' => 'Margherita',
            'descricao' => 'Molho de tomate, mussarela e manjericão fresco.',
            'preco_p' => 20.00,
            'preco_m' => 30.00,
            'preco_g' => 40.00,
        ]);

        Pizza::create([
            'nome' => 'Calabresa',
            'descricao' => 'Mussarela, calabresa fatiada e cebola.',
            'preco_p' => 22.00,
            'preco_m' => 32.00,
            'preco_g' => 42.00,
        ]);

        Pizza::create([
            'nome' => 'Frango com Catupiry',
            'descricao' => 'Frango desfiado com catupiry e mussarela.',
            'preco_p' => 25.00,
            'preco_m' => 35.00,
            'preco_g' => 45.00,
        ]);
    }
}
