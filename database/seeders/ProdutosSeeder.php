<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produtos')->insert([
            ['nome' => 'Pepperoni', 'preco' => 50.50, 'tipo_produtos_id' => 1, 'ingredientes' => 'Pepperoni fatiado, queijo, cebola, pimentão, molho de tomate e orégano', 'urlImage' => '/img-default/pepperoni-2024-10-17-1729213779-2727.png', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Laranja', 'preco' => 8.00, 'tipo_produtos_id' => 2, 'ingredientes' => 'Laranja, água e açúcar', 'urlImage' => '/img-default/laranja-2024-10-17-1729213779-2727.png', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Skol - Lata', 'preco' => 8.00, 'tipo_produtos_id' => 3, 'ingredientes' => 'Água, malte, milho e lúpulo. Alergênicos: Contém cevada e glúten', 'urlImage' => '/img-default/skol-lata-2024-10-17-1729213779-2727.png', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
