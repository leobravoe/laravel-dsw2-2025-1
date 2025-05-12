<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PedidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pedidos')->insert([
            ['status' => 'A', 'users_id' => 1, 'enderecos_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'A', 'users_id' => 1, 'enderecos_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'A', 'users_id' => 1, 'enderecos_id' => null, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
