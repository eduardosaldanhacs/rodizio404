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
        Schema::create('pizzas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('flavor')->nullable();
            $table->text('history')->nullable();
            $table->string('image')->nullable();
            $table->decimal('small_price', 8, 2)->nullable(); // pequeno
            $table->decimal('medium_price', 8, 2)->nullable(); // médio
            $table->decimal('large_price', 8, 2)->nullable(); // grande
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pizzas');
    }
};
