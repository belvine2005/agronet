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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->text('content');

            $table->foreignId('author_id')
                  ->constrained('users');

            $table->foreignId('target_id')
                  ->nullable()
                  ->constrained('users');

            $table->foreignId('product_id')
                  ->nullable()
                  ->constrained('products');

            $table->foreignId('ad_id')
                  ->nullable()
                  ->constrained('ads');
                  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
