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
        Schema::create('creditos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->string('tipo_documento', 150);
            $table->string('numero_documento', 100);
            $table->decimal('monto');
            $table->integer('numero_cuotas');
            $table->decimal('monto_cuota');
            $table->foreignId('id_compra')->cascadeOnUpdate()->constrained('compras')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('creditos');
    }
};
