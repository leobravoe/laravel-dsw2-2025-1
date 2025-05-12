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
        Schema::create('pedido_produtos', function (Blueprint $table) {
            $table->unsignedBigInteger('Pedidos_id')->index('fk_pedidos_has_produtos_pedidos1_idx');
            $table->unsignedBigInteger('Produtos_id')->index('fk_pedidos_has_produtos_produtos1_idx');
            $table->unsignedInteger('quantidade');
            $table->string('observacao')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();

            $table->primary(['Pedidos_id', 'Produtos_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedido_produtos');
    }
};
