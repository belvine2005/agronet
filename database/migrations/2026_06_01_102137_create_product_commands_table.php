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
        Schema::create('product_commands', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('product_id')
                  ->constrained('products');

            $table->foreignId('command_id')
                  ->constrained('commands');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_commands');
    }
};
