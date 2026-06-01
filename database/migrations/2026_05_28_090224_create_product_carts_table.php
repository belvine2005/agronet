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
        Schema::create('product_carts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('cart_id')
                  ->constrained('carts');

            $table->foreignId('product_id')
                  ->constrained('products');

            $table->decimal('quantity');

            $table->integer('unitCost');

            $table->integer('total_price');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_carts');
    }
};
