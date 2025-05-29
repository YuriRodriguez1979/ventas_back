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
        Schema::create('almacens', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->string('detalle', 50);
            $table->integer('entrada_Cantidad');
            $table->decimal('entrada_valor_unitario');
            $table->decimal('entrada_valor_total');
            $table->integer('salida_cantidad');
            $table->decimal('salida_valor_unitario');
            $table->decimal('salida_valor_total');
            $table->integer('saldo_total');
            $table->foreignId('id_producto')->cascadeOnUpdate()->constrained('productos')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('almacens');
    }
};
