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
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('comment');
            $table->tinyInteger('score');

            $table->foreignId('author_id')
                  ->constrained('users');

            $table->foreignId('cible_id')
                  ->constrained('users')
                  ->nullable();

            $table->foreignId('product_id')
                  ->nullable()
                  ->constrained('products');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ratings');
    }
};
