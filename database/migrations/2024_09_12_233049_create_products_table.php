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
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Автоматическое поле ID (primary key)
            $table->string('name'); // Поле для названия продукта (varchar)
            $table->decimal('cost', 8, 2); // Поле для стоимости продукта (decimal), где 8 — это общее количество цифр, а 2 — количество цифр после запятой
            $table->integer('amount'); // Поле для количества продукта (integer)
            $table->timestamps(); // Поля created_at и updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
