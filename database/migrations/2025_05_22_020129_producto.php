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
        Schema::create('productos', function(Blueprint $table){
            $table->id();
            $table->string('producto', 100);
            $table->string('unidad_medida', 20);
            $table->string('laboratorio', 100);
            $table->boolean('generico');
            $table->boolean('comercial');
            $table->foreignId('id_proveedor')->cascadeOnUpdate()->constrained('proveedores')->nullOnDelete();
            $table->foreignId('id_tipocategoria')->cascadeOnUpdate()->constrained('tipo_categorias')->nullOnDelete();
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
