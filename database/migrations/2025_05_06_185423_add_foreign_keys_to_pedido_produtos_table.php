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
        Schema::table('pedido_produtos', function (Blueprint $table) {
            $table->foreign(['Pedidos_id'], 'fk_Pedidos_has_Produtos_Pedidos1')->references(['id'])->on('pedidos')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['Produtos_id'], 'fk_Pedidos_has_Produtos_Produtos1')->references(['id'])->on('produtos')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pedido_produtos', function (Blueprint $table) {
            $table->dropForeign('fk_Pedidos_has_Produtos_Pedidos1');
            $table->dropForeign('fk_Pedidos_has_Produtos_Produtos1');
        });
    }
};
