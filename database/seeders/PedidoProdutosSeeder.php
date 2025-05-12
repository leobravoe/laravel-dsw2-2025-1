<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PedidoProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pedido_produtos')->insert([
            ['pedidos_id' => 1, 'produtos_id' => 1, 'quantidade' => 1, 'observacao' => null, 'created_at' => now(), 'updated_at' => now()],
            ['pedidos_id' => 1, 'produtos_id' => 2, 'quantidade' => 2, 'observacao' => null, 'created_at' => now(), 'updated_at' => now()],
            ['pedidos_id' => 1, 'produtos_id' => 3, 'quantidade' => 1, 'observacao' => null, 'created_at' => now(), 'updated_at' => now()],
            ['pedidos_id' => 2, 'produtos_id' => 1, 'quantidade' => 2, 'observacao' => null, 'created_at' => now(), 'updated_at' => now()],
            ['pedidos_id' => 3, 'produtos_id' => 3, 'quantidade' => 10, 'observacao' => null, 'created_at' => now(), 'updated_at' => now()],
            ['pedidos_id' => 3, 'produtos_id' => 2, 'quantidade' => 1, 'observacao' => null, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
