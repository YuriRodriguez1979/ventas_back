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
        Schema::create('accesos', function (Blueprint $table) {
            $table->id();
            $table->boolean('crear');
            $table->boolean('leer');
            $table->boolean('actualizar');
            $table->boolean('borrar');
            $table->foreignId('id_rol')->cascadeOnUpdate()->constrained('roles')->nullOnDelete();
            $table->foreignId('id_submenu')->cascadeOnUpdate()->constrained('submenus')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accesos');
    }
};
