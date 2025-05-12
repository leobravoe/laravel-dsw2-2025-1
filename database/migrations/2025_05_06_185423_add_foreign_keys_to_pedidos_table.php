<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('pedidos', function (Blueprint $table) {
            $table->foreign(['Enderecos_id'], 'fk_Pedidos_Enderecos1')->references(['id'])->on('enderecos')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['Users_id'], 'fk_Pedidos_Users1')->references(['id'])->on('users')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pedidos', function (Blueprint $table) {
            $table->dropForeign('fk_Pedidos_Enderecos1');
            $table->dropForeign('fk_Pedidos_Users1');
        });
    }
};
