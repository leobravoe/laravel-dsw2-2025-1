<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Chama todos os seeders criados
        $this->call([
            UsersSeeder::class,
            EnderecosSeeder::class,
            PedidosSeeder::class,
            TipoProdutosSeeder::class,
            ProdutosSeeder::class,
            PedidoProdutosSeeder::class,
        ]);
    }
}
