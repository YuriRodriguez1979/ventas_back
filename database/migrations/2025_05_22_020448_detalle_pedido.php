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
         Schema::create('detalle_pedidos', function(Blueprint $table){
            $table->id();
            $table->foreignId('id_pedido')->cascadeOnUpdate()->constrained('pedidos')->nullOnDelete();
            $table->foreignId('id_producto')->cascadeOnUpdate()->constrained('productos')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
