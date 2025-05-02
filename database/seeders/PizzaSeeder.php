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
            'name' => 'Gaudéria',
            'flavor' => 'Costela desfiada, cebola caramelizada, queijo colonial e molho barbecue artesanal.',
            'image' => 'gauderia.jpg',
            'history' => 'Inspirada nos domingos de costelada em família, a Gaudéria resgata o sabor do fogo de chão com um toque moderno. Uma pizza que representa o orgulho de ser do Sul.',
            'small_price' => 20.00,
            'medium_price' => 30.00,
            'large_price' => 40.00,
        ]);

        Pizza::create([
            'name' => 'Chimarrona',
            'flavor' => 'Frango marinado em ervas, catupiry, milho verde e orégano.',
            'image' => 'chimarrona.jpg',
            'history' => 'Em homenagem à tradição do chimarrão compartilhado, a Chimarrona mistura suavidade e aconchego, como uma roda de mate entre amigos — só que com muito sabor no forno!',
            'small_price' => 22.00,
            'medium_price' => 32.00,
            'large_price' => 42.00,
        ]);

        Pizza::create([
            'name' => 'Dos Pampas',
            'flavor' => 'Linguiça campeira, pimentão vermelho, pimenta dedo-de-moça suave e provolone.',
            'image' => 'dos_pampas.jpg',
            'history' => 'Com a força e o calor das coxilhas, a Pampa Picante é para quem gosta de uma pitada de ousadia. Sabor marcante, mas com o respeito do tempero tradicional.',
            'small_price' => 25.00,
            'medium_price' => 35.00,
            'large_price' => 45.00,
        ]);
    }
}
