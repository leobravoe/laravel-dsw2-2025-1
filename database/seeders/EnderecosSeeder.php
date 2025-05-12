<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnderecosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('enderecos')->insert([
            ['users_id' => 1, 'bairro' => 'São Francisco', 'logradouro' => 'Rua Pedro II', 'numero' => 111, 'complemento' => 'Apto. 303', 'created_at' => now(), 'updated_at' => now()],
            ['users_id' => 1, 'bairro' => 'Centro', 'logradouro' => 'Rua Parque Paulo', 'numero' => 222, 'complemento' => null, 'created_at' => now(), 'updated_at' => now()]
        ]);
    }
}
