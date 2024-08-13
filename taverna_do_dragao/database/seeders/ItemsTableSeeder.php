<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('items')->insert([
            [
                'name' => 'O Um Anel de Cebola',
                'description' => 'Anel de Cebola empanado',
                'price' => 14.99,
                'typeFood' => 'Porções',
                'image' => 'theOneRing.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Burguer de 20 lados',
                'description' => 'Hamburguer com 20 lados',
                'price' => 19.99,
                'typeFood' => 'Pratos',
                'image' => 'burguer20.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fritas Fantásticas',
                'description' => 'Batatas fritas fantásticas',
                'price' => 29.99,
                'typeFood' => 'Porções',
                'image' => 'amazingFries.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cerveja Amarga',
                'description' => 'Uma cerveja forte e amarga para corações intensos',
                'price' => 15.99,
                'typeFood' => 'Bebidas',
                'image' => 'bitterBeer.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}