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

        Pizza::create([
            'name' => 'Campeira',
            'flavor' => 'Charque desfiado, abóbora cabotiá assada, cebola roxa e queijo coalho.',
            'image' => 'campeira.jpg',
            'history' => 'A Campeira homenageia os sabores rústicos do campo. Uma combinação clássica do interior gaúcho, repaginada para conquistar o forno da pizzaria.',
            'small_price' => 23.00,
            'medium_price' => 33.00,
            'large_price' => 43.00,
        ]);
        
        Pizza::create([
            'name' => 'Missioneira',
            'flavor' => 'Carne moída temperada com cominho, azeitonas pretas, ovo cozido e muçarela.',
            'image' => 'missioneira.jpg',
            'history' => 'Inspirada na culinária das Missões Jesuíticas, essa pizza relembra os pastéis de forno recheados do interior com um toque todo especial.',
            'small_price' => 21.00,
            'medium_price' => 31.00,
            'large_price' => 41.00,
        ]);
        
        Pizza::create([
            'name' => 'Pampa Veggie',
            'flavor' => 'Cogumelos salteados, chimichurri artesanal, moranga assada e queijo de búfala.',
            'image' => 'pampa_veggie.jpg',
            'history' => 'A opção vegetariana para quem quer o sabor do sul com leveza e criatividade. A Pampa Veggie mostra que tradição e inovação podem caminhar juntas.',
            'small_price' => 24.00,
            'medium_price' => 34.00,
            'large_price' => 44.00,
        ]);

        Pizza::create([
            'name' => 'Estância Doce',
            'flavor' => 'Doce de leite cremoso, banana caramelizada, canela e farofa de amendoim.',
            'image' => 'estancia_doce.jpg',
            'history' => 'A sobremesa que nasceu nas estâncias gaúchas agora vira pizza! Um sabor doce com alma campeira, perfeita pra fechar o churrasco com chave de ouro.',
            'small_price' => 18.00,
            'medium_price' => 26.00,
            'large_price' => 34.00,
        ]);

        Pizza::create([
            'name' => 'Serra Colonial',
            'flavor' => 'Calabresa artesanal, queijo colonial, tomate italiano e manjericão fresco.',
            'image' => 'serra_colonial.jpg',
            'history' => 'Direto da serra gaúcha, essa pizza traz os sabores das cantinas familiares com um toque da imigração italiana que ajudou a construir o Rio Grande.',
            'small_price' => 22.00,
            'medium_price' => 32.00,
            'large_price' => 42.00,
        ]);
        
    }
}
