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
        Schema::create('proveedores', function(Blueprint $table){
            $table->id();
            $table->string('ruc', 30);
            $table->string('razon_social', 100);
            $table->string('direccion', 250);
            $table->string('email', 250);
            $table->string('fijo', 12);
            $table->string('movil', 15);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedores');
    }
};
