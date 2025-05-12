<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipo_produtos')->insert([
            ['descricao' => 'Pizza', 'created_at' => now(), 'updated_at' => now()],
            ['descricao' => 'Suco', 'created_at' => now(), 'updated_at' => now()],
            ['descricao' => 'Cerveja', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
