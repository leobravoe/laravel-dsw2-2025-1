<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            ['name' => 'Usuário', 'email' => 'user@user.com.br', 'password' => bcrypt('12345678'), 'role' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Administrador', 'email' => 'admin@admin.com.br', 'password' => bcrypt('12345678'), 'role' => 1, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
