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
        Schema::create('contados', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->string('tipo_documento', 150);
            $table->string('numero_documento', 150);
            $table->decimal('monto');
            $table->foreignId('id_compra')->cascadeOnUpdate()->constrained('compras')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contados');
    }
};
